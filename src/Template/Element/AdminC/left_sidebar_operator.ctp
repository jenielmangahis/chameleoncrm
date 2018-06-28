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
        <a class="" href="<?= $this->Url->build('/operator/dashboard/') ?>">
          <span class="icon-holder">
            <i class="c-blue-500 ti-home"></i>
          </span>
          <span class="title">Dashboard</span>
        </a>
      </li>    
    </ul>
  </div>
</div>