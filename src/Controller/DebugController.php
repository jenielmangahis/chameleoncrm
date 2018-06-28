<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;
use Tools\EasyParcel;
use Tools\TheLorry;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class DebugController extends AppController
{
    public $helpers = ['NavigationSelector'];

    /**
     * initialize method    
     * 
     */
    public function initialize()
    {
        parent::initialize();   
         
    }

    /**
     * beforeFilter method     
     * 
     */
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow();
    }

    public function afterFilter(Event $event)
    {
        parent::afterFilter($event);
    }

    public function debugEmailSending()
    {
        
    }

    public function admin_template_b() 
    {
        $this->viewBuilder()->layout("admin_b");              
    }

    public function admin_template_c() 
    {        
        $this->viewBuilder()->layout("admin_c");              
    }

    public function register() 
    {        
        $this->viewBuilder()->layout("register");              
    }

    public function login()
    {
        $this->viewBuilder()->layout("login");
    }

    public function testFacilities() 
    {
        $this->WarehouseFacilities = TableRegistry::get('WarehouseFacilities');

        $facilities = $this->WarehouseFacilities->find('all')
            ->contain(['Warehouse', 'OptionsWarehouseFacilities'])
        ;

        foreach( $facilities as $f ){
            debug($f);
        }

        exit;
    }
}
