<?php
namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Hostings helper
 */
class NavigationSelectorHelper extends Helper
{

    /**
     * Default configuration.
     *
     * @var array
     */
    protected $_defaultConfig = [];

    public function __construct(View $view, $config = [])
    {
        parent::__construct($view, $config);
    }

    /*
     * Selected Main Navigation
     *
     * @param string|null $selected Navigation.
     * @return array of selected navagation with selected
     * 
     */
    public function selectedMainNavigation($selected, $template = '') {
        $navigation = array(
            "dashboard" => "",
            "pages" => "",
            "companies" => "",
            "providers" => "",
            "groups"  => "",
            "users"   => "",  
            "slides" => "",          
            "system_settings" => "",            
            "reports" => "",
            "warehouse" => "",
            "warehouse_items" => "",
            "warehouse_incoming_order" => "",
            "warehouse_outgoing_order" => "",
            "inventories" => "",
            "customers" => "",
            "options" => "",
            "items" => "",
            "operators" => "",
            "warehouse_charges" => "",
            "delsnap_charges" => "",
            "provider_charges" => "",
            "delsnap_invoices" => "",
            "company_invoices" => ""
            
        );

        if( $template == 3 ){
            $navigation[$selected] = "menu-active";
        }else{
            $navigation[$selected] = "active";
        }        

        return $navigation;
    }
}
