$(function(){   
  $('.default-datepicker').datepicker({
    format: 'yyyy-mm-dd',
    autoclose: true
  });
   
  $("#provider_id").tokenInput(base_url + 'auto_complete/ajax_providers', {
    theme: "facebook",  
    tokenLimit: 1,    
    preventDuplicates: true,
    prePopulate: autocomplete_default_provider,
  });

  $("#search_warehouse").tokenInput(base_url + 'auto_complete/ajax_warehouse', {
    theme: "facebook",  
    hintText: "Type warehouse name to search",
    tokenLimit: 1,    
    preventDuplicates: true    
  });

  $("#company_id").tokenInput(base_url + 'auto_complete/ajax_companies', {
    theme: "facebook",  
    tokenLimit: 1,    
    preventDuplicates: true,
    prePopulate: autocomplete_default_company_id,
  });

  $("#provider_warehouse_id").tokenInput(base_url + 'auto_complete/ajax_admin_provider_warehouse?warehouse_provider_id=' + autocomplete_warehouse_provider_id, {
    theme: "facebook",  
    tokenLimit: 1,    
    hintText: "Type provider warehouse to search",
    preventDuplicates: true,
    prePopulate: autocomplete_default_company_id,
  });

  $("#company_items").tokenInput(base_url + 'auto_complete/ajax_company_items', {
    theme: "facebook",      
    tokenLimit: 1,    
    hintText: "Type company item to search",
    preventDuplicates: true    
  });

  $("#item_id").tokenInput(base_url + 'auto_complete/ajax_items', {
    theme: "facebook",      
    tokenLimit: 1,    
    hintText: "Type item to search",
    preventDuplicates: true    
  });

  $("#operator_id").tokenInput(base_url + 'auto_complete/ajax_operators', {
    theme: "facebook",  
    tokenLimit: 1,    
    preventDuplicates: true,
    prePopulate: autocomplete_default_operator,
  });

  /*$("#provider_id").change(function(){
  	var provider_id = $(this).val();      
  	var url = base_url + "warehouse_inventories/ajax_provider_warehouse_list";
  	$.ajax({
             type: "POST",
             url: url,               
             data: {"provider_id":provider_id}, 
             success: function(o)
             {
                $("#warehouse_id").html(o);
              	$("#warehouse_id").removeAttr('disabled');                 
             }
      });    	
  });*/

  $("#company_id").change(function(){
    var company_id = $(this).val();      
    var url = base_url + "warehouse_inventories/ajax_company_inventory_list";
    $.ajax({
             type: "POST",
             url: url,               
             data: {"company_id":company_id}, 
             success: function(o)
             {
                $("#inventory_id").html(o);
                $("#inventory_id").removeAttr('disabled');                 
             }
      });     
  });
});