<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Companies Controller
 *
 * @property \App\Model\Table\CompaniesTable $Companies
 */
class AutoCompleteController extends AppController
{
    /**
     * initialize method
     *  ID : CA-01
     * 
     */
    public function initialize()
    {
        parent::initialize();
 
        $session = $this->request->session();            
        $this->user_data  = $session->read('User.data');                 
        if( isset($this->user_data) ){
            if( $this->user_data->group_id == 1 ){ //Admin
                $this->Auth->allow();
            }elseif( $this->user_data->group_id == 2 ){ //Provider
                $this->provider_data = $session->read('Provider.data');  
                $this->Auth->allow(['ajax_provider_warehouse']);
            }elseif( $this->user_data->group_id == 3 ){ //Corporate/Company                
                $this->Auth->allow(['ajax_providers']);
            }
        }
    }

    /**
     * Companies method
     *  ID : CA-02
     *
     * @return void
     */
    public function ajax_companies_list()
    {
        $this->Companies = TableRegistry::get('Companies');

        $query = $this->request->query['q'];

        $companies = $this->Companies->find('all')            
            ->orWhere(['OR' => [
                'Companies.name LIKE' => '%' . $query . '%'
            ]])                                
        ;
        
        $json_data = array();
        foreach( $companies as $c ){
            $json_data[] = ['id' => $c->id, 'name' => $c->name];
        }
        
        echo json_encode($json_data);
        exit;
    }

    /**
     * Provider : Provider warehouse list method
     *  ID : CA-03
     *
     * @return void
     */
    public function ajax_provider_warehouse()
    {
        $this->Warehouse = TableRegistry::get('Warehouse');

        $query = $this->request->query['q'];

        $warehouse = $this->Warehouse->find('all')            
            ->where(['Warehouse.provider_id' => $this->provider_data->id, 'Warehouse.name LIKE' => '%' . $query . '%'])                                
        ;
        
        $json_data = array();
        foreach( $warehouse as $w ){
            $json_data[] = ['id' => $w->id, 'name' => $w->name];
        }
        
        echo json_encode($json_data);
        exit;
    }

    /**
     * Providers method
     *  ID : CA-04
     *
     * @return void
     */
    public function ajax_providers()
    {
        $this->Providers = TableRegistry::get('Providers');

        $query = $this->request->query['q'];

        $providers = $this->Providers->find('all')            
            ->orWhere(['OR' => [
                'Providers.name LIKE' => '%' . $query . '%'
            ]])                                
        ;
        
        $json_data = array();
        foreach( $providers as $p ){
            $json_data[] = ['id' => $p->id, 'name' => $p->name];
        }
        
        echo json_encode($json_data);
        exit;
    }

    /**
     * Operators method
     *  ID : CA-05
     *
     * @return void
     */
    public function ajax_operators()
    {
        $this->Users = TableRegistry::get('Users');

        $query = $this->request->query['q'];

        $operators = $this->Users->find('all') 
            ->where(['Users.group_id' => $this->Users->isOperator()])           
            ->andWhere(['OR' => [
                'Users.firstname LIKE' => '%' . $query . '%',
                'Users.lastname LIKE' => '%' . $query . '%'
            ]])                                
        ;
        
        $json_data = array();
        foreach( $operators as $o ){
            $json_data[] = ['id' => $o->id, 'name' => $o->firstname . ' ' . $o->lastname];
        }
        
        echo json_encode($json_data);
        exit;
    }

    /**
     * Companies method
     *  ID : CA-06
     *
     * @return void
     */
    public function ajax_companies()
    {
        $this->Companies = TableRegistry::get('Companies');

        $query = $this->request->query['q'];

        $companies = $this->Companies->find('all')            
            ->orWhere(['OR' => [
                'Companies.name LIKE' => '%' . $query . '%'
            ]])                                
        ;
        
        $json_data = array();
        foreach( $companies as $c ){
            $json_data[] = ['id' => $c->id, 'name' => $c->name];
        }
        
        echo json_encode($json_data);
        exit;
    }

    /**
     * Provider : Provider warehouse list method
     *  ID : CA-07
     *
     * @return void
     */
    public function ajax_admin_provider_warehouse()
    {
        $this->Warehouse = TableRegistry::get('Warehouse');

        $query = $this->request->query['q'];
        $provider_id = $this->request->query['warehouse_provider_id'];

        $warehouse = $this->Warehouse->find('all')            
            ->where(['Warehouse.provider_id' => $provider_id, 'Warehouse.name LIKE' => '%' . $query . '%'])                                
        ;
        
        $json_data = array();
        foreach( $warehouse as $w ){
            $json_data[] = ['id' => $w->id, 'name' => $w->code . ' : ' . $w->name];
        }
        
        echo json_encode($json_data);
        exit;
    }

    /**
     * Admin : Warehouse list method
     *  ID : CA-08
     *
     * @return void
     */
    public function ajax_warehouse()
    {
        $this->Warehouse = TableRegistry::get('Warehouse');

        $query = $this->request->query['q'];

        $warehouse = $this->Warehouse->find('all')            
            ->where(['Warehouse.name LIKE' => '%' . $query . '%'])                                
        ;
        
        $json_data = array();
        foreach( $warehouse as $w ){
            $json_data[] = ['id' => $w->id, 'name' => $w->name];
        }
        
        echo json_encode($json_data);
        exit;
    }

    /**
     * Admin : Company Items list method
     *  ID : CA-09
     *
     * @return void
     */
    public function ajax_company_items()
    {
        $this->Items = TableRegistry::get('Items');

        $query = $this->request->query['q'];
        $company_id = $this->request->query['company_id'];

        $items = $this->Items->find('all')            
            ->where(['Items.company_id' => $company_id, 'Items.name LIKE' => '%' . $query . '%'])                                
        ;
        
        $json_data = array();
        foreach( $items as $i ){
            $json_data[] = ['id' => $i->id, 'name' => $i->name];
        }
        
        echo json_encode($json_data);
        exit;
    }

    /**
     * Admin : Item list method
     *  ID : CA-10
     *
     * @return void
     */
    public function ajax_items()
    {
        $this->Items = TableRegistry::get('Items');

        $query = $this->request->query['q'];
        $items = $this->Items->find('all')            
            ->where([
                'OR' => [
                    'Items.name LIKE' => '%' . $query . '%',
                    'Items.sku LIKE' => '%' . $query . '%'
                ]
            ])
        ;
        
        $json_data = array();
        foreach( $items as $i ){
            $json_data[] = ['id' => $i->id, 'name' => $i->sku . " : " . $i->name];
        }
        
        echo json_encode($json_data);
        exit;
    }
}
