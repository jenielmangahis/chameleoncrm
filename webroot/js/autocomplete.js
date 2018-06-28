  $("#cid_edit").tokenInput(base_url + 'auto_complete/companies', {
      theme: "facebook",  
      tokenLimit: 1,    
      preventDuplicates: true,
      prePopulate: [autocomplete_default_company_id]
  });

  $("#cid").tokenInput(base_url + 'auto_complete/companies', {
      theme: "facebook",  
      tokenLimit: 1,    
      preventDuplicates: true      
  });
