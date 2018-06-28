<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;
use Cake\Network\Email\Email;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{
    public $helpers = ['NavigationSelector'];

    /**
     * initialize method
     *  ID : CA-01
     * 
     */
    public function initialize()
    {
        parent::initialize();
        $nav_selected = ["system_settings"];
        $this->set('nav_selected', $nav_selected);      

        $session = $this->request->session();    
        $this->user_data = $session->read('User.data');       
        
        if( isset($this->user_data) ){
            if( $this->user_data->group_id == 1 ){ //Admin
                $this->Auth->allow();
            }elseif( $this->user_data->group_id == 5 ){ //Operator
                $this->Auth->allow(['request_forgot_password', 'front_login', 'loggedin', 'ajax_login', 'activate_account', 'fb_login', 'operator_dashboard']);    
            }else{
                $this->Auth->allow(['request_forgot_password', 'front_login', 'loggedin', 'ajax_login', 'activate_account', 'fb_login']);    
            } 
        }else{
            $this->Auth->allow(['request_forgot_password', 'front_login', 'loggedin', 'ajax_login', 'activate_account', 'google_login', 'fb_login', 'cron_remove_unverified_accounts', 'front_forgot_password', 'front_reset_password']);
        }  

        $this->viewBuilder()->layout("admin_b");   
    }

    /**
     * beforeFilter method
     *  ID : CA-02
     * 
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['logout', 'login']);
    }

    /**
     * Index method
     * ID : CA-03
     * @return void
     */
    public function index()
    {        
        if( isset($this->request->query['query']) ){
            $query = $this->request->query['query'];
            $users = $this->Users->find('all')
                ->contain(['Groups'])
                ->where(['Users.firstname LIKE' => '%' . $query . '%'])       
                ->orWhere(['Users.lastname LIKE' => '%' . $query . '%'])       
                ->orWhere(['Users.email LIKE' => '%' . $query . '%'])       
                ->orWhere(['Groups.name LIKE' => '%' . $query . '%'])       
            ;
        }else{
            $users = $this->Users->find('all')
                ->contain(['Groups'])
            ;
        }

        $this->set('users', $this->paginate($users));
        $this->set('_serialize', ['users']);
    }

    /**
     * Dashboard method
     * ID : CA-04
     * @return void
     */
    public function dashboard()
    {  
        $nav_selected = ["dashboard"];
        $this->set([       
            'page_title' => 'Dashboard',
            'nav_selected' => $nav_selected
        ]);
    }   

    /**
     * View method
     * ID : CA-05
     * @param string|null $id User id.
     * @return void
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ["Groups"]
        ]);
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    /**
     * Add method
     * ID : CA-06
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {      
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->data;
            //Verify if username already taken
            $isUserExists = $this->Users->find('all')
                ->where(['Users.username' => $data['email']])
            ;
            if( $isUserExists->count() > 0 ){
                $this->Flash->error(__('Username already taken!'));
            }else{
                if( $data['password'] != $data['retype_password'] ){
                    $this->Flash->error(__('Password not match!'));
                }else{                    
                    $data['username'] = $this->request->data['email'];
                    $user = $this->Users->patchEntity($user, $data);
                    if ($this->Users->save($user)) {
                        $this->Flash->success(__('The user has been saved.'));
                        $action = $this->request->data['save'];
                        if( $action == 'save' ){
                            return $this->redirect(['action' => 'index']);
                        }else{
                            return $this->redirect(['action' => 'add']);
                        }
                    } else {
                        $this->Flash->error(__('The user could not be saved. Please, try again.'));
                    }
                }                
            }
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups'));
        $this->set('_serialize', ['user']);
    }

    /**
     * Edit method
     * ID : CA-07
     * @param string|null $id User id.
     * @return void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data);
            $result = $this->Users->save($user);
            if ($result) {
                $this->Flash->success(__('User data has been updated.'));
                if(isset($this->request->data['edit'])) {
                    return $this->redirect(['action' => 'edit', $id]);
                }else{
                    return $this->redirect(['action' => 'index']);
                }
            } else {
                $this->Flash->error(__('User data could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);

         $this->set('groups', $this->Users->Groups->find('list', array('fields' => array('name','id') ) ) );
    }

    /**
     * delete method
     * ID : CA-08
     * @return void
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        /*if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }*/
        $this->Flash->error(__('Deleting of user is currently disabled.'));
        return $this->redirect(['action' => 'index']);
    }

    /**
     * Login
     * ID : CA-09
     * lagin module then redirect to dashboard
     */
    public function login()
    {
        $this->Companies = TableRegistry::get('Companies');
        $this->Providers = TableRegistry::get('Providers');
        $this->ProviderUsers = TableRegistry::get('ProviderUsers');
        $this->CompanyUsers  = TableRegistry::get('CompanyUsers');

        // Change layout
        $this->viewBuilder()->layout("login");    
        
        //if already logged-in, redirect
        if($this->Auth->user()){
            $this->redirect(array('action' => 'index'));      
        }

        if ($this->request->is('post')) {           
            $user = $this->Auth->identify();            
            if ($user) {                       
                $this->Auth->setUser($user);
                
                $u = $this->Users->find()
                    ->where(['Users.id' => $this->Auth->user('id')])
                    ->first()
                ;              
                $session  = $this->request->session();  
                $session->write('User.data', $u);                                               
                $_SESSION['KCEDITOR']['disabled'] = false;
                $_SESSION['KCEDITOR']['uploadURL'] = Router::url('/')."webroot/upload";
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
        $this->set('page_title', 'User Login');
    }

    /**
     * logout
     * ID : CA-10
     * logout user and go back to login page
     */
    public function logout()
    {
        session_start();
        session_destroy();
        return $this->redirect($this->Auth->logout());
    }

    /**
     * Ajax Forgot Password
     * ID : CA-11
     * @return json data
     */
    public function request_forgot_password()
    {
        $this->Users = TableRegistry::get('Users');
        $this->viewBuilder()->layout('');        
        
        if ($this->request->is(['patch', 'post', 'put'])) {                
            $data = $this->request->data;        
            $user = $this->Users->find()
                ->where(['Users.email' => $data['email_username']])
                ->first()
            ;

            if($user) {
                $randChar   = rand() . $user->id;                
                $reset_code = md5(uniqid($randChar, true));  

                //Save verification code
                $user->reset_code = $reset_code;
                $this->Users->save($user);

                //Send email notification to customer                
                $edata = [
                    'user_name' => $user->firstname,
                    'reset_code' => $reset_code
                ];

                $recipient = $user->email;                     
                $email_smtp = new Email('cake_smtp');
                $email_smtp->from(['websystem@nixstage.com' => 'WebSystem'])
                    ->template('request_forgot_password')
                    ->emailFormat('html')
                    ->to($recipient)                                                                                                     
                    ->subject('Nixser : Forgot Password')
                    ->viewVars(['edata' => $edata])
                    ->send();

                $json['message'] = "An email has been sent to your e-mail address for confirmation.";
                $json['is_success'] = true;          
            }else{
                $json['message'] = "Invalid form entry";
                $json['is_success'] = false;    
            }
        }else{
            $json['message'] = "Invalid form entry";
            $json['is_success'] = false;
        }
        
        echo json_encode($json);
        exit;
    }

    /**
     * Change Password method     
     * ID : CA-12
     * @param string|null $id User id.
     * @param string|null $redirect 1 = owners, 2 = tenants, 0 = users.
     * @return void Redirects on successful add, renders view otherwise.
     */
    public function change_password( $id = null, $redirect = null)
    {  
        $user = $this->Users->get($id);  

        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->data;
            if( $data['password'] == $data['repassword'] ){

                $user->password = $data['password'];                
                
                if( $this->Users->save($user) ){

                    //Send email
                    /*$edata = [
                        'user_name' => $user->firstname,
                        'password' => $data['password']                        
                    ];
                    $recipient = $user_session->email;                     
                    $email_smtp = new Email('cake_smtp');
                    $email_smtp->from(['websystem@nixstage.com' => 'WebSystem'])
                        ->template('change_password')
                        ->emailFormat('html')
                        ->to($recipient)                                                                                                     
                        ->subject('Nixser : Change Password')
                        ->viewVars(['edata' => $edata])
                        ->send();*/

                    $this->Flash->success(__('Your password has been changed.'));
                    if( $redirect == 1 ){
                        return $this->redirect(['controller' => 'owners', 'action' => 'index']);
                    }elseif( $redirect == 2 ){
                        return $this->redirect(['controller' => 'tenants', 'action' => 'index']);
                    }else{
                        return $this->redirect(['action' => 'index']);
                    }                    
                }else{
                    $this->Flash->error(__('Your password could not be change. Please, try again.'));                    
                }
            }else{
                $this->Flash->error(__('Password does not match!'));                    
            }
        }

        $back_url = $this->request->referer();        
        $this->set(['user' => $user, 'back_url' => $back_url]);
    }

    /**
     * Suspend account method
     *  ID : CA-13
     *
     * @param string|null $id User id.
     * @param string|null $redirect Owner / Tenant.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function suspend($id = null, $redirect = null)
    {
        $this->request->allowMethod(['post']);
        $user = $this->Users->get($id);
        $user->is_active = 0;
        $this->Users->save($user);
        $this->Flash->success(__('The user has been suspended.'));        
        if( $redirect == 'owner' ){
            return $this->redirect(['controller' => 'owners', 'action' => 'index']);
        }elseif( $redirect == 'tenant' ){
            return $this->redirect(['controller' => 'tenants', 'action' => 'index']);
        }else{
            return $this->redirect(['action' => 'index']);
        }        
    }

    /**
     * Activate account method
     *  ID : CA-14
     *
     * @param string|null $id User id.
     * @param string|null $redirect Owner / Tenant.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function activate($id = null, $redirect = null)
    {
        $this->Owners = TableRegistry::get('Owners');

        $this->request->allowMethod(['post']);
        $user = $this->Users->get($id);
        $user->is_active = 1;        
        $this->Users->save($user);

        $this->Flash->success(__('The user has been activated.'));        
        if( $redirect == 'owner' ){
            return $this->redirect(['controller' => 'owners', 'action' => 'index']);
        }elseif( $redirect == 'tenant' ){
            return $this->redirect(['controller' => 'tenants', 'action' => 'index']);
        }else{
            return $this->redirect(['action' => 'index']);
        }      
    }

    /**
     * Frontend : Login
     * ID : CA-15
     * lagin module then redirect to dashboard
     */
    public function front_login()
    {
        // Change layout
        $this->viewBuilder()->layout("template_login");    
        
        //if already logged-in, redirect
        if($this->Auth->user()){
            $this->redirect(array('action' => 'index'));      
        }

        if( isset($this->request->query['er']) ){
            $this->Flash->error(__('Account already expired'));
        }

        if ($this->request->is('post')) {           
            $user = $this->Auth->identify();             
            if ($user) {                       
                $this->Auth->setUser($user);
                
                $u = $this->Users->find()
                    ->where(['Users.id' => $this->Auth->user('id')])
                    ->first()
                ;              
                $session  = $this->request->session();  
                $session->write('User.data', $u);                                               
                $_SESSION['KCEDITOR']['disabled'] = false;
                $_SESSION['KCEDITOR']['uploadURL'] = Router::url('/')."webroot/upload";

                if( $u->group_id == 1 ){
                    return $this->redirect($this->Auth->redirectUrl());
                }else{
                    if( $u->group_id == 4 ){
                        $this->Owners = TableRegistry::get('Owners');
                        $owner = $this->Owners->find()
                            ->where(['Owners.user_id' => $u->id])
                            ->first()
                        ;
                        $session->write('Owner.data', $owner);   

                        $this->Flash->success(__("Welcome back " . $u->firstname));     
                        return $this->redirect(['controller' => 'owner', 'action' => 'dashboard']);
                    }else{
                        $this->Tenants = TableRegistry::get('Tenants');
                        $tenant = $this->Tenants->find()
                            ->where(['Tenants.user_id' => $u->id])
                            ->first()
                        ;
                        $session->write('Tenant.data', $tenant);   

                        $this->Flash->success(__("Welcome back " . $u->firstname));     
                        return $this->redirect(['controller' => 'tenant', 'action' => 'dashboard']);
                    }
                    
                }             
                
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
        $this->set('page_title', 'User Login');
    }

    /**
     * Frontend : Ajax Login
     * ID : CA-16
     * lagin module then redirect to dashboard
     */
    public function ajax_login()
    {
        $json_data['message']    = "<div class=\"alert alert-danger\" role=\"alert\">Invalid username / password</div>";
        $json_data['is_success'] = false;

        $user = $this->Auth->identify();             
        if ($user) {                       
            $this->Auth->setUser($user);
            
            $u = $this->Users->find()
                ->where(['Users.id' => $this->Auth->user('id')])
                ->first()
            ;

            if( $u->is_active == 1 ){
                $session  = $this->request->session();  
                $session->write('User.data', $u);                                               
                $_SESSION['KCEDITOR']['disabled'] = false;
                $_SESSION['KCEDITOR']['uploadURL'] = Router::url('/')."webroot/upload";

                if( $u->group_id == 4 ){
                    $this->Owners = TableRegistry::get('Owners');
                    $owner = $this->Owners->find()
                        ->where(['Owners.user_id' => $u->id])
                        ->first()
                    ;
                    $session->write('Owner.data', $owner);                            
                }else{
                    $this->Tenants = TableRegistry::get('Tenants');
                    $tenant = $this->Tenants->find()
                        ->where(['Tenants.user_id' => $u->id])
                        ->first()
                    ;
                    $session->write('Tenant.data', $tenant);                            
                }

                $json_data['is_success'] = true;
                $json_data['message']    = "<div class=\"alert alert-success\" role=\"alert\">Redirecting to dashboard</div>"; 
            }else{
                $json_data['message']    = "<div class=\"alert alert-danger\" role=\"alert\">Account inactive</div>";
            }
        }

        $this->viewBuilder()->layout('');        
        echo json_encode($json_data);
        exit;        
    }

     /**
     * User loggedin method - redirection upon login
     * ID : CA-17
     * lagin module then redirect to dashboard
     */
    public function loggedin()
    {
        $session    = $this->request->session();
        $group_id   = $this->Auth->user('group_id');        
        $user_id    = $this->Auth->user('id');    
        $user_data  = $session->read('User.data');                              
        if( $group_id == 1 ){ //Admin
            return $this->redirect(['controller' => 'users', 'action' => 'dashboard']);  
        }else{
            return $this->redirect(['action' => 'logout']);  
        }
    }

     /**
     * Activate user account method
     * ID : CA-18
     * login module then redirect to dashboard
     */
    public function activate_account( $code = null )
    {   
        $this->Providers  = TableRegistry::get('Providers');
        $this->Companies = TableRegistry::get('Companies');
        $this->ProviderUsers  = TableRegistry::get('ProviderUsers');
        $this->CompanyUsers = TableRegistry::get('CompanyUsers'); 

        $user = $this->Users->find()
            ->where(['Users.activation_code' => $code])
            ->first()
        ;

        if( $user ){            
            $user->is_active = 1;
            $user->activation_code = '';
            $this->Users->save($user);
            $session  = $this->request->session();  
            $session->write('User.data', $user);      
            //Set auth data then call loggedin for redirection            
            $this->Auth->setUser($user);            

            if( $user->group_id == 2 ){ // Provider
                $providerUser = $this->ProviderUsers->find()
                    ->where(['ProviderUsers.user_id' => $user->id])
                    ->first()
                ;
                $provider = $this->Providers->find()
                    ->where(['Providers.id' => $providerUser->provider_id])
                    ->first()
                ;
               
                $session->write('Provider.data', $provider);                        
            }elseif( $user->group_id == 3 ){ //Corporate
                $companyUser = $this->CompanyUsers->find()
                    ->where(['CompanyUsers.user_id' => $user->id])
                    ->first()
                ;
                $company = $this->Companies->find()
                    ->where(['Companies.id' => $companyUser->company_id])
                    ->first()
                ;
                $session->write('Company.data', $company);    
            }
            $this->Flash->success(__("Your account was successfully activated."));
            return $this->redirect(['action' => 'loggedin']);
        }else{
            $this->Flash->error(__('Invalid Activation Code!'));
        }

        $this->viewBuilder()->layout('register');
    }

     
    /**
     * Frontend : Forgot Password
     * ID : CA-22
     * lagin module then redirect to dashboard
     */
    public function front_forgot_password()
    {
        // Change layout
        $this->viewBuilder()->layout("template_login");    
        
        //if already logged-in, redirect
        if($this->Auth->user()){
            $this->redirect(array('action' => 'index'));      
        }

        if ($this->request->is('post')) {           
            $data = $this->request->data;
            if( $data['email'] != '' ){
                $user = $this->Users->find()
                    ->where(['Users.email' => $data['email']])
                    ->first()
                ;

                if( $user ){
                    if( $user->is_active == $this->Users->isActive() ){
                        $reset_code = generateRandomString($user->id);
                        $user->reset_code = $reset_code;
                        $this->Users->save($user);

                        //Send email
                        $user_email = $data['email'];
                        $smtp = new Email('nixstage_smtp');
                        $smtp->from(['websystem@nixstage.com' => 'WebSystem'])
                            ->template('request_forgot_password')
                            ->emailFormat('html')
                            ->to($user_email)                                                                                                     
                            ->subject('Ranta : Reset Password')
                            ->viewVars(['user' => $user, 'reset_code' => $reset_code])
                            ->send();

                        $this->Flash->success(__('We have sent you an email in resetting your password. Please check. Thank you.'));        
                        return $this->redirect(['controller' => 'login']);
                    }else{
                        $this->Flash->error(__('Account disabled!'));        
                    }
                }else{
                    $this->Flash->error(__('Email does not exists.'));    
                }
            }else{
                $this->Flash->error(__('Please enter your registered email.'));
            }

        }

        $this->set('page_title', 'Forgot Password');
    }

    /**
     * Frontend : Login
     * ID : CA-23
     * lagin module then redirect to dashboard
     */
    public function front_reset_password( $code = null )
    {
        // Change layout
        $this->viewBuilder()->layout("template_login");  

        $user = $this->Users->find()
            ->where(['Users.reset_code' => $code])
            ->first()
        ;

        if( empty($user) ){
            $this->Flash->error(__('Invalid code!'));      
            return $this->redirect(['controller' => 'login']);  
        }  
        
        //if already logged-in, redirect
        if($this->Auth->user()){
            $this->redirect(array('action' => 'index'));      
        }

        if ($this->request->is('post')) {           
            $data = $this->request->data;
            if( $data['password'] == $data['repassword'] ){
                $user->password   = $data['password'];
                $user->reset_code = '';
                $this->Users->save($user);

                $this->Flash->success(__('Your password was successfully reset')); 
                return $this->redirect(['controller' => 'login']);         
            }else{
                $this->Flash->error(__('Password does not match! Please try again'));    
            }
        }
        $this->set('page_title', 'User Reset Password');
    }
}
