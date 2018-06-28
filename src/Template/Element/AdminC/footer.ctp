<!-- ### $App Screen Footer ### -->
<footer class="bdT ta-c p-30 lh-2 fsz-sm c-grey-600">
  <span>Copyright &copy; <?= date("Y"); ?> <a href="#"><?= COMPANY_NAME ?></a>. All rights reserved.</span>
</footer>

<script>
  var base_url = "<?= $base_url; ?>";  
  var autocomplete_default_company_id = '';
  var autocomplete_default_operator   = '';
  var autocomplete_default_provider   = '';
  var autocomplete_warehouse_provider_id = '';

  <?php if( isset($warehouse_provider_id) ){ ?>
    var autocomplete_warehouse_provider_id = "<?= $warehouse_provider_id; ?>";
  <?php } ?>

  <?php if( isset($autocomplete_default_company_value) ){ ?>
  	var autocomplete_default_company_id = [<?= $autocomplete_default_company_value; ?>];
  <?php } ?>  

  <?php if( isset($autocomplete_default_operator_value) ){ ?>
    var autocomplete_default_operator = [<?= $autocomplete_default_operator_value; ?>];
  <?php } ?>  

  <?php if( isset($autocomplete_default_provider_value) ){ ?>
    var autocomplete_default_provider = [<?= $autocomplete_default_provider_value; ?>]
  <?php } ?>
</script>

<?php       
  echo $this->Html->script('adminc/vendor.js');    
  echo $this->Html->script('adminc/bundle.js');
  echo $this->Html->script('jquery.min.js'); 
  echo $this->Html->script('ckeditor/ckeditor', array('inline' => false));

  if( $hdr_user_data->group_id == 1 ){ //Admin
    echo $this->Html->script('datepicker/bootstrap-datepicker.js');
    echo $this->Html->script('jquery.min.js');
    echo $this->Html->script('tokeninput/jquery.tokeninput.js');
    echo $this->Html->script('backend.js');
  }

  if( isset($enable_token_input) ){
  	echo $this->Html->script('jquery.min.js');
  	echo $this->Html->script('tokeninput/jquery.tokeninput.js');
  	echo $this->Html->script('autocomplete.js');
  }

  if( $hdr_user_data->group_id == 3 ){ // Company
  	echo $this->Html->script('jquery.min.js');
    echo $this->Html->script('company.js');
  }

  if( $hdr_user_data->group_id == 2 ){ // Provider
    echo $this->Html->script('jquery.min.js');
    echo $this->Html->script('tokeninput/jquery.tokeninput.js');
    echo $this->Html->script('provider.js');
  }
?>
<script>

</script>
</body>
</html>