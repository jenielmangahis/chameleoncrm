<script>
  var base_url = "<?= $base_url; ?>";  
</script>

<?php       
  echo $this->Html->script('jquery.2.1.0.min.js');    
  echo $this->Html->script('adminc/vendor.js');    
  echo $this->Html->script('adminc/bundle.js');  
?>
<script>
$(function(){
	$(".member-type").change(function(){
		var member_type = $(this).val();
		if( member_type == 'Individual' ){
			$(".company-information").fadeOut();
			$(".corporate-inputs").removeAttr('required');
		}else{
			$(".company-information").fadeIn();
			$(".corporate-inputs").prop('required', true);
		}		
	});
});
</script>
</body>
</html>