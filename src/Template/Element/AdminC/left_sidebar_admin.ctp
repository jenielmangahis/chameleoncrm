<?php use Cake\Utility\Inflector; ?>
<?php $nav_selected = $this->NavigationSelector->selectedMainNavigation($nav_selected[0], 3); ?>
<!-- #Left Sidebar ==================== -->
<div class="sidebar">
  <div class="sidebar-inner">
    <!-- ### $Sidebar Header ### -->
    <div class="sidebar-logo">
      <div class="peers ai-c fxw-nw">
        <div class="peer peer-greed">
          <a class="sidebar-link td-n" href="<?= $this->Url->build("/"); ?>">
            <div class="peers ai-c fxw-nw">
              <div class="peer">
                <div class="logo">
                  <img src="<?= $this->Url->build("/webroot/images/admin-logo.jpg"); ?>" alt="<?= COMPANY_NAME ?>">
                </div>
              </div>
              <div class="peer peer-greed">
                <h5 class="lh-1 mB-0 logo-text"></h5>
              </div>
            </div>
          </a>
        </div>
        <div class="peer">
          <div class="mobile-toggle sidebar-toggle">
            <a href="" class="td-n">
              <i class="ti-arrow-circle-left"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- ### $Sidebar Menu ### -->
    <ul class="sidebar-menu scrollable pos-r">
      <li class="nav-item mT-30 <?= $nav_selected["dashboard"]; ?>">
        <a class="" href="<?= $this->Url->build('/users/dashboard/') ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
          </span>
          <span class="title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item <?= $nav_selected["items"]; ?>">
        <a class="" href="<?= $this->Url->build('/items/index'); ?>">
          <span class="icon-holder">
            <i class="c-brown-500 ti-package"></i>
          </span>
          <span class="title">Items</span>
        </a>
      </li>      
      <li class="nav-item <?= $nav_selected["warehouse_items"]; ?>">
        <a class="" href="<?= $this->Url->build('/warehouse_inventories/index'); ?>">
          <span class="icon-holder">
            <i class="c-brown-500 ti-package"></i>
          </span>
          <span class="title">Warehouse Inventories</span>
        </a>
      </li>
      <li class="nav-item <?= $nav_selected["companies"]; ?>">
        <a class="" href="<?= $this->Url->build('/companies/index'); ?>">
          <span class="icon-holder">
            <i class="c-brown-500 ti-id-badge"></i>
          </span>
          <span class="title">Companies</span>
        </a>
      </li>
      <li class="nav-item <?= $nav_selected["providers"]; ?>">
        <a class="" href="<?= $this->Url->build('/providers/index'); ?>">
          <span class="icon-holder">
            <i class="c-brown-500 ti-id-badge"></i>
          </span>
          <span class="title">Providers</span>
        </a>
      </li>                  
      <li class="nav-item <?= $nav_selected["warehouse"]; ?>">
        <a class="" href="<?= $this->Url->build('/warehouse/index/') ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-view-list-alt"></i>
          </span>
          <span class="title">Warehouse</span>
        </a>
      </li> 
      <li class="nav-item <?= $nav_selected["warehouse_incoming_order"]; ?>">
        <a class="" href="<?= $this->Url->build('/warehouse_incoming_orders') ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-truck"></i>
          </span>
          <span class="title">Request Incoming Orders</span>
        </a>
      </li>  
      <li class="nav-item <?= $nav_selected["warehouse_outgoing_order"]; ?>">
        <a class="" href="<?= $this->Url->build('/warehouse_outgoing_orders') ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-truck"></i>
          </span>
          <span class="title">Request Outgoing Orders</span>
        </a>
      </li> 
      <li class="nav-item <?= $nav_selected["delsnap_charges"]; ?>">
        <a class="" href="<?= $this->Url->build('/delsnap_charges/index/') ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-menu-alt"></i>
          </span>
          <span class="title">Delsnap Charges</span>
        </a>
      </li>  
      <li class="nav-item <?= $nav_selected["provider_charges"]; ?>">
        <a class="" href="<?= $this->Url->build('/provider_charges/index/') ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-menu-alt"></i>
          </span>
          <span class="title">Provider Charges</span>
        </a>
      </li>   
      <li class="nav-item <?= $nav_selected["delsnap_invoices"]; ?>">
        <a class="" href="<?= $this->Url->build('/delsnap_invoices') ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-receipt"></i>
          </span>
          <span class="title">Delsnap Invoices</span>
        </a>
      </li>
      <li class="nav-item <?= $nav_selected["company_invoices"]; ?>">
        <a class="" href="<?= $this->Url->build('/company_invoices') ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-receipt"></i>
          </span>
          <span class="title">Company Invoices</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="dropdown-toggle <?= $nav_selected["users"]; ?>" href="javascript:void(0);">
          <span class="icon-holder">
            <i class="c-orange-500 ti-user"></i>
          </span>
          <span class="title">Users</span>
          <span class="arrow">
            <i class="ti-angle-right"></i>
          </span>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a class='sidebar-link' href="<?= $this->Url->build('/users/providers'); ?>">Providers</a>
          </li>
          <li>
            <a class='sidebar-link' href="<?= $this->Url->build('/users/companies'); ?>">Companies</a>
          </li>                    
          <li>
            <a class='sidebar-link' href="<?= $this->Url->build('/users/operators'); ?>">Operators</a>
          </li>          
        </ul>
      </li>       
      <li class="nav-item dropdown">
        <a class="dropdown-toggle <?= $nav_selected["options"]; ?>" href="javascript:void(0);">
          <span class="icon-holder">
            <i class="c-orange-500 ti-list"></i>
          </span>
          <span class="title">Options</span>
          <span class="arrow">
            <i class="ti-angle-right"></i>
          </span>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a class='sidebar-link' href="<?= $this->Url->build('/options_item_attributes/index'); ?>">Item Attributes</a>
          </li>
          <li>
            <a class='sidebar-link' href="<?= $this->Url->build('/options_warehouse_item_types/index'); ?>">Warehouse Item Types</a>
          </li>
          <li>
            <a class='sidebar-link' href="<?= $this->Url->build('/options_warehouse_facilities/index'); ?>">Warehouse Facilities</a>
          </li>          
          <li>
            <a class='sidebar-link' href="<?= $this->Url->build('/options_muom/index'); ?>">MUOM</a>
          </li>
        </ul>
      </li>              
      <li class="nav-item dropdown">
        <a class="dropdown-toggle <?= $nav_selected["system_settings"]; ?>" href="javascript:void(0);">
          <span class="icon-holder">
            <i class="c-orange-500 ti-settings"></i>
          </span>
          <span class="title">System Settings</span>
          <span class="arrow">
            <i class="ti-angle-right"></i>
          </span>
        </a>
        <ul class="dropdown-menu">
          <li>
            <a class='sidebar-link' href="<?= $this->Url->build('/company_details/index'); ?>">Company</a>
          </li>
          <li>
            <a class='sidebar-link' href="<?= $this->Url->build('/users/index'); ?>">Users</a>
          </li>
          <li>
            <a class='sidebar-link' href="<?= $this->Url->build('/groups/index'); ?>">Groups</a>
          </li>
        </ul>
      </li>      
    </ul>
  </div>
</div>