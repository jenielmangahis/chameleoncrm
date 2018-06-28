<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Core\Plugin;
use Cake\Routing\Router;

/**
 * The default class to use for all routes
 *
 * The following route classes are supplied with CakePHP and are appropriate
 * to set as the default:
 *
 * - Route
 * - InflectedRoute
 * - DashedRoute
 *
 * If no call is made to `Router::defaultRouteClass`, the class used is
 * `Route` (`Cake\Routing\Route\Route`)
 *
 * Note that `Route` does not do any inflections on URLs which will result in
 * inconsistently cased URLs when used with `:plugin`, `:controller` and
 * `:action` markers.
 *
 */
Router::defaultRouteClass('Route');
Router::extensions(['pdf']);
Router::scope('/', function ($routes) {
    /**
     * Here, we are connecting '/' (base path) to a controller called 'Pages',
     * its action called 'display', and we pass a param to select the view file
     * to use (in this case, src/Template/Pages/home.ctp)...
     */
    //$routes->connect('/', ['controller' => 'Users', 'action' => 'login']);
    $routes->connect('/', ['controller' => 'Main', 'action' => 'index']);

    /**
     * ...and connect the rest of 'Pages' controller's URLs.
     */
    //$routes->connect('/pages/*', ['controller' => 'Pages', 'action' => 'display']);

    /**
     * Connect catchall routes for all controllers.
     *
     * Using the argument `InflectedRoute`, the `fallbacks` method is a shortcut for
     *    `$routes->connect('/:controller', ['action' => 'index'], ['routeClass' => 'InflectedRoute']);`
     *    `$routes->connect('/:controller/:action/*', [], ['routeClass' => 'InflectedRoute']);`
     *
     * Any route class can be used with this method, such as:
     * - DashedRoute
     * - InflectedRoute
     * - Route
     * - Or your own route class
     *
     * You can remove these routes once you've connected the
     * routes you want in your application.
     */
    $routes->fallbacks('InflectedRoute');
});

    $u = Router::url(null,true);  
    
    //Front Login / Registration
    Router::connect('/login',array('controller' => 'Users', 'action' => 'front_login')); 
    Router::connect('/forgot_password',array('controller' => 'Users', 'action' => 'front_forgot_password'));
    Router::connect('/activate_account/:code',array('controller' => 'Users', 'action' => 'activate_account'),array('pass' => array('code'),'code' => '[a-z0-9-]+'));
    Router::connect('/reset_password/:code',array('controller' => 'Users', 'action' => 'front_reset_password'),array('pass' => array('code'),'code' => '[a-z0-9-A-Z]+')); 
    
    //Front search
    Router::connect('/search',array('controller' => 'Main', 'action' => 'search')); 

    //Providers
    Router::connect('/provider/dashboard',array('controller' => 'Providers', 'action' => 'user_dashboard')); 
    Router::connect('/provider/warehouse',array('controller' => 'Providers', 'action' => 'user_warehouse')); 
    Router::connect('/provider/add_warehouse',array('controller' => 'Providers', 'action' => 'user_add_warehouse'));
    Router::connect('/provider/edit_warehouse/:id',array('controller' => 'Providers', 'action' => 'user_edit_warehouse'),array('pass' => array('id'),'id' => '[0-9]+')); 
    Router::connect('/provider/view_warehouse/:id',array('controller' => 'Providers', 'action' => 'user_view_warehouse'),array('pass' => array('id'),'id' => '[0-9]+'));  
    Router::connect('/provider/delete_warehouse/:id',array('controller' => 'Providers', 'action' => 'user_delete_warehouse'),array('pass' => array('id'),'id' => '[0-9]+'));  
    Router::connect('/provider/users',array('controller' => 'Providers', 'action' => 'users_list')); 
    Router::connect('/provider/add_user',array('controller' => 'Providers', 'action' => 'user_add'));
    Router::connect('/provider/edit_user/:id',array('controller' => 'Providers', 'action' => 'user_edit'),array('pass' => array('id'),'id' => '[0-9]+')); 
    Router::connect('/provider/view_user/:id',array('controller' => 'Providers', 'action' => 'user_view'),array('pass' => array('id'),'id' => '[0-9]+'));  
    Router::connect('/provider/delete_user/:id',array('controller' => 'Providers', 'action' => 'user_delete'),array('pass' => array('id'),'id' => '[0-9]+'));
    Router::connect('/provider/change_password/:id',array('controller' => 'Providers', 'action' => 'user_change_password'),array('pass' => array('id'),'id' => '[0-9]+'));
    Router::connect('/provider/view_warehouse_inventory/:id',array('controller' => 'WarehouseInventories', 'action' => 'user_view'),array('pass' => array('id'),'id' => '[0-9]+'));  

    Router::connect('/provider/warehouse_charges',array('controller' => 'ProviderCharges', 'action' => 'user_charges')); 
    Router::connect('/provider/edit_warehouse_charges/:id',array('controller' => 'ProviderCharges', 'action' => 'user_charges_edit'),array('pass' => array('id'),'id' => '[0-9]+')); 

    Router::connect('/provider/request_incoming_orders',array('controller' => 'Providers', 'action' => 'user_request_incoming_orders')); 
    Router::connect('/provider/view_incoming_order_request/:id',array('controller' => 'Providers', 'action' => 'user_view_incoming_order_request'),array('pass' => array('id'),'id' => '[0-9]+')); 
    Router::connect('/provider/approve_incoming_order/:id',array('controller' => 'Providers', 'action' => 'user_approve_incoming_order'),array('pass' => array('id'),'id' => '[0-9]+'));

    Router::connect('/provider/request_outgoing_orders',array('controller' => 'Providers', 'action' => 'user_request_outgoing_orders')); 
    Router::connect('/provider/view_outgoing_order_request/:id',array('controller' => 'Providers', 'action' => 'user_view_outgoing_order_request'),array('pass' => array('id'),'id' => '[0-9]+')); 
    Router::connect('/provider/approve_outgoing_order/:id',array('controller' => 'Providers', 'action' => 'user_approve_outgoing_order'),array('pass' => array('id'),'id' => '[0-9]+'));

    Router::connect('/provider/customers',array('controller' => 'Providers', 'action' => 'user_customers_list')); 
    Router::connect('/provider/view_customer/:id',array('controller' => 'Providers', 'action' => 'user_customer_view'),array('pass' => array('id'),'id' => '[0-9]+')); 

    Router::connect('/provider/warehouse_inventories',array('controller' => 'Providers', 'action' => 'user_warehouse_inventories')); 
    Router::connect('/provider/view_warehouse_inventory_item/:id',array('controller' => 'Providers', 'action' => 'user_view_warehouse_inventory_item'),array('pass' => array('id'),'id' => '[0-9]+')); 
    Router::connect('/provider/view_warehouse_inventory_items',array('controller' => 'Providers', 'action' => 'user_view_warehouse_inventory_items')); 

    Router::connect('/provider/invoices',array('controller' => 'DelsnapInvoices', 'action' => 'user_invoices'));
    Router::connect('/provider/view_invoice/:id',array('controller' => 'DelsnapInvoices', 'action' => 'user_view'),array('pass' => array('id'),'id' => '[0-9]+'));
    Router::connect('/provider/invoice_pdf/:id',array('controller' => 'DelsnapInvoices', 'action' => 'user_pdf'),array('pass' => array('id'),'id' => '[0-9]+'));
    Router::connect('/provider/invoice_paid/:id',array('controller' => 'DelsnapInvoices', 'action' => 'user_paid'),array('pass' => array('id'),'id' => '[0-9]+'));


    Router::connect('/provider/load_warehouse',array('controller' => 'Autocomplete', 'action' => 'ajax_provider_warehouse')); 

    //Companies / Corporates
    Router::connect('/company/dashboard',array('controller' => 'Companies', 'action' => 'user_dashboard')); 
    Router::connect('/company/items',array('controller' => 'Companies', 'action' => 'user_items')); 
    Router::connect('/company/add_item',array('controller' => 'Companies', 'action' => 'user_add_item')); 
    Router::connect('/company/edit_item/:id',array('controller' => 'Companies', 'action' => 'user_edit_item'),array('pass' => array('id'),'id' => '[0-9]+')); 
    Router::connect('/company/view_item/:id',array('controller' => 'Companies', 'action' => 'user_view_item'),array('pass' => array('id'),'id' => '[0-9]+')); 
    Router::connect('/company/load_item_unit_of_measurement',array('controller' => 'Items', 'action' => 'ajax_get_item_unit_measurement')); 
    Router::connect('/company/invoices',array('controller' => 'CompanyInvoices', 'action' => 'user_invoices'));
    Router::connect('/company/view_invoice/:id',array('controller' => 'CompanyInvoices', 'action' => 'user_view'),array('pass' => array('id'),'id' => '[0-9]+'));
    Router::connect('/company/invoice_pdf/:id',array('controller' => 'CompanyInvoices', 'action' => 'user_pdf'),array('pass' => array('id'),'id' => '[0-9]+'));

    Router::connect('/company/inventories',array('controller' => 'Companies', 'action' => 'user_inventory')); 
    Router::connect('/company/add_inventory',array('controller' => 'Companies', 'action' => 'user_add_inventory'));
    Router::connect('/company/edit_inventory/:id',array('controller' => 'Companies', 'action' => 'user_edit_inventory'),array('pass' => array('id'),'id' => '[0-9]+')); 
    Router::connect('/company/view_inventory/:id',array('controller' => 'Companies', 'action' => 'user_view_inventory'),array('pass' => array('id'),'id' => '[0-9]+')); 
    Router::connect('/company/delete_inventory/:id',array('controller' => 'Companies', 'action' => 'user_delete_inventory'),array('pass' => array('id'),'id' => '[0-9]+')); 

    Router::connect('/company/request_incoming_orders',array('controller' => 'Companies', 'action' => 'user_request_incoming_orders')); 
    Router::connect('/company/add_request_incoming_order',array('controller' => 'Companies', 'action' => 'user_add_request_incoming_order')); 
    Router::connect('/company/load_provider_warehouse_list',array('controller' => 'Companies', 'action' => 'ajax_provider_warehouse_list')); 
    Router::connect('/company/view_incoming_order_request/:id',array('controller' => 'Companies', 'action' => 'user_view_incoming_order_request'),array('pass' => array('id'),'id' => '[0-9]+')); 
    Router::connect('/company/delete_incoming_order_request/:id',array('controller' => 'Companies', 'action' => 'user_delete_incoming_order_request'),array('pass' => array('id'),'id' => '[0-9]+')); 

    Router::connect('/company/request_outgoing_orders',array('controller' => 'Companies', 'action' => 'user_request_outgoing_orders')); 
    Router::connect('/company/add_request_outgoing_order',array('controller' => 'Companies', 'action' => 'user_add_request_outgoing_order'));     
    Router::connect('/company/view_outgoing_order_request/:id',array('controller' => 'Companies', 'action' => 'user_view_outgoing_order_request'),array('pass' => array('id'),'id' => '[0-9]+')); 
    Router::connect('/company/delete_outgoing_order_request/:id',array('controller' => 'Companies', 'action' => 'user_delete_outgoing_order_request'),array('pass' => array('id'),'id' => '[0-9]+')); 

    Router::connect('/company/users',array('controller' => 'Companies', 'action' => 'users_list')); 
    Router::connect('/company/add_user',array('controller' => 'Companies', 'action' => 'user_add'));
    Router::connect('/company/edit_user/:id',array('controller' => 'Companies', 'action' => 'user_edit'),array('pass' => array('id'),'id' => '[0-9]+')); 
    Router::connect('/company/view_user/:id',array('controller' => 'Companies', 'action' => 'user_view'),array('pass' => array('id'),'id' => '[0-9]+'));  
    Router::connect('/company/delete_user/:id',array('controller' => 'Companies', 'action' => 'user_delete'),array('pass' => array('id'),'id' => '[0-9]+'));
    Router::connect('/company/change_password/:id',array('controller' => 'Companies', 'action' => 'user_change_password'),array('pass' => array('id'),'id' => '[0-9]+'));

    //Operators
    Router::connect('/operator/dashboard',array('controller' => 'Users', 'action' => 'operator_dashboard'));  
    Router::connect('/operator/view_incoming_order_request/:id',array('controller' => 'WarehouseIncomingOrders', 'action' => 'operator_view_request'),array('pass' => array('id'),'id' => '[0-9]+')); 
    Router::connect('/operator/view_outgoing_order_request/:id',array('controller' => 'WarehouseOutgoingOrders', 'action' => 'operator_view_request'),array('pass' => array('id'),'id' => '[0-9]+'));    
    
    //Autocomplete
    Router::connect('/auto_complete/companies',array('controller' => 'AutoComplete', 'action' => 'ajax_companies_list')); 
    Router::connect('/auto_complete/provider_warehouse',array('controller' => 'AutoComplete', 'action' => 'ajax_company_provider_warehouse')); 
    Router::connect('/auto_complete/providers',array('controller' => 'AutoComplete', 'action' => 'ajax_providers')); 

    

/**
 * Load all plugin routes.  See the Plugin documentation on
 * how to customize the loading of plugin routes.
 */
Plugin::routes();
