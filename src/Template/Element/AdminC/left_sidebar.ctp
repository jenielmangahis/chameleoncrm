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
                <h5 class="lh-1 mB-0 logo-text"><?= COMPANY_NAME ?></h5>
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
      <li class="nav-item <?= $nav_selected["pages"]; ?>">
        <a class="" href="<?= $this->Url->build('/pages/index'); ?>">
          <span class="icon-holder">
            <i class="c-brown-500 ti-world"></i>
          </span>
          <span class="title">Pages</span>
        </a>
      </li>
      <li class="nav-item <?= $nav_selected["slides"]; ?>">
        <a class="" href="<?= $this->Url->build('/slides/index'); ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-image"></i>
          </span>
          <span class="title">Slides</span>
        </a>
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