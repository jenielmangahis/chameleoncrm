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
      <li class="nav-item <?= $nav_selected["dashboard"]; ?>">
        <a class="" href="<?= $this->Url->build('/provider/dashboard/') ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
          </span>
          <span class="title">Dashboard</span>
        </a>
      </li>                
      <li class="nav-item <?= $nav_selected["warehouse"]; ?>">
        <a class="" href="<?= $this->Url->build('/provider/warehouse/') ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-view-list-alt"></i>
          </span>
          <span class="title">Warehouse</span>
        </a>
      </li>  
      <li class="nav-item <?= $nav_selected["inventories"]; ?>">
        <a class="" href="<?= $this->Url->build('/provider/warehouse_inventories/') ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-package"></i>
          </span>
          <span class="title">Warehouse Inventories</span>
        </a>
      </li> 
      <li class="nav-item <?= $nav_selected["warehouse_incoming_order"]; ?>">
        <a class="" href="<?= $this->Url->build('/provider/request_incoming_orders/') ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-truck"></i>
          </span>
          <span class="title">Request Incoming Orders</span>
        </a>
      </li>
      <li class="nav-item <?= $nav_selected["warehouse_outgoing_order"]; ?>">
        <a class="" href="<?= $this->Url->build('/provider/request_outgoing_orders/') ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-truck"></i>
          </span>
          <span class="title">Request Outgoing Orders</span>
        </a>
      </li> 
      <li class="nav-item <?= $nav_selected["delsnap_invoices"]; ?>">
        <a class="" href="<?= $this->Url->build('/provider/invoices') ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-receipt"></i>
          </span>
          <span class="title">Invoices</span>
        </a>
      </li>  
      <li class="nav-item <?= $nav_selected["provider_charges"]; ?>">
        <a class="" href="<?= $this->Url->build('/provider/warehouse_charges/') ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-menu-alt"></i>
          </span>
          <span class="title">Warehouse Charges</span>
        </a>
      </li>                   
      <li class="nav-item <?= $nav_selected["users"]; ?>">
        <a class="" href="<?= $this->Url->build('/provider/users/') ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-user"></i>
          </span>
          <span class="title">Users</span>
        </a>
      </li>          
    </ul>
  </div>
</div>