<?= $this->element('AdminC/header'); ?>
<!-- @App Content -->
<!-- =================================================== -->
<div>
  <?php 
    if( $hdr_user_data->group_id == 1 ){
      echo $this->element('AdminC/left_sidebar_admin');
    }elseif( $hdr_user_data->group_id == 2 ){
      echo $this->element('AdminC/left_sidebar_provider');
    }elseif( $hdr_user_data->group_id == 3 ){      
      echo $this->element('AdminC/left_sidebar_company');
    }elseif( $hdr_user_data->group_id == 5 ){      
      echo $this->element('AdminC/left_sidebar_operator');
    }else{
      echo $this->element('AdminC/left_sidebar_individual');
    }
  ?>	
	<!-- #Main ============================ -->
    <div class="page-container">
    	<?= $this->element('AdminC/top_bar'); ?>
    	<!-- ### $App Screen Content ### -->
        <main class='main-content bgc-grey-100'>
          <div id='mainContent'>
          	<?= $this->Flash->render() ?>
          	<?= $this->fetch('content') ?>
          </div>
        </main>
        <?= $this->element('AdminC/footer'); ?>
   	</div>   	
</div>