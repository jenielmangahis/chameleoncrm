<style>
.form-caption{
    background-color: #3C8DBC;
    color:#ffffff;
    padding: 5px;
}
</style>
<div class="row gap-20 masonry pos-r">
  <div class="masonry-sizer col-md-6"></div>
  <div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
      <div class="pull-left">
          <h4 class="c-grey-900 mT-10 mB-30"><i class="ti-plus"></i> <?= __('Edit Company Details') ?></h4>            
      </div>
      <div class="pull-right">
          <ol class="breadcrumb" style="font-size:12px;">
              <li class="breadcrumb-item"><a href="<?= $this->Url->build("/users/dashboard") ?>"><i class="ti-home"></i> <?= __('Home') ?></a></li>              
              <li class="breadcrumb-item"><a href="<?= $this->Url->build("/company_details/index") ?>"><?= __('System Settings') ?></a></li>              
              <li class="breadcrumb-item"><a href="<?= $this->Url->build("/company_details/index") ?>"><?= __('Company Details') ?></a></li>              
              <li class="breadcrumb-item active"><?= __('Edit') ?></li>
          </ol>
      </div>   
      <div class="clearfix"></div> 
      <div class="mT-30">
        <?= $this->Form->create($companyDetail,['data-toggle' => 'validator', 'role' => 'form']) ?> 
        <?= $this->Form->hidden('latitude',['id' => 'latitude']); ?>
        <?= $this->Form->hidden('longtitude',['id' => 'longtitude']); ?>         
          <?php
              echo "
              <div class='form-group'>
                  <label for='name'>" . __('Name') . "</label>";
                  echo $this->Form->input('name', ['class' => 'form-control', 'id' => 'name', 'label' => false]);                
              echo " </div>";    
              
              echo "
              <div class='form-group'>
                  <label for='logo'>" . __('Logo') . "</label>";
                  echo $this->Form->input('logo', ['type' => 'text', 'class' => 'form-control has-ck-finder', 'readonly' => 'readonly', 'id' => 'logo', 'label' => false]);                
              echo " </div>";

              echo "
              <div class='form-group'>
                  <label for='qr_image'>" . __('QR Image') . "</label>";
                  echo $this->Form->input('qr_image', ['type' => 'text', 'class' => 'form-control has-ck-finder-sub', 'readonly' => 'readonly', 'id' => 'logo2', 'label' => false]);                
              echo " </div>";    
              
              echo "
              <div class='form-group'>
                  <label for='email'>" . __('Email') . "</label>";
                  echo $this->Form->input('email', ['class' => 'form-control', 'id' => 'email', 'label' => false]);                
              echo " </div>";    
              
              echo "
              <div class='form-group'>
                  <label for='address'>" . __('Address') . "</label>";
                  echo $this->Form->input('address', ['class' => 'form-control ckeditor', 'id' => 'address', 'label' => false]);                
              echo " </div>";    
              
              echo "
              <div class='form-group'>
                  <label for='inquiry_recipient'>" . __('Inquiry Recipient') . "</label>";
                  echo $this->Form->input('inquiry_recipient', ['class' => 'form-control', 'id' => 'inquiry_recipient', 'label' => false]);                
              echo " </div>";    
              
              echo "
              <div class='form-group'>
                  <label for='contact_number'>" . __('Contact Number') . "</label>";
                  echo $this->Form->input('contact_number', ['class' => 'form-control', 'id' => 'contact_number', 'label' => false]);                
              echo " </div>";    
              
              echo "
              <div class='form-group'>
                  <label for='fax'>" . __('Fax') . "</label>";
                  echo $this->Form->input('fax', ['class' => 'form-control', 'id' => 'fax', 'label' => false]);                
              echo " </div>";

              echo "
              <div class='form-group'>
                  <label for='fax'>" . __('Facebook') . "</label>";
                  echo $this->Form->input('facebook', ['type' => 'text', 'class' => 'form-control', 'id' => 'facebook', 'label' => false]);                
              echo " </div>";

              echo "
              <div class='form-group'>
                  <label for='fax'>" . __('Twitter') . "</label>";
                  echo $this->Form->input('twitter', ['type' => 'text', 'class' => 'form-control', 'id' => 'twitter', 'label' => false]);                
              echo " </div>";

              echo "
              <div class='form-group'>
                  <label for='fax'>" . __('Instagram') . "</label>";
                  echo $this->Form->input('instagram', ['type' => 'text', 'class' => 'form-control', 'id' => 'instagram', 'label' => false]);                
              echo " </div>";

              echo "
              <div class='form-group'>
                  <label for='fax'>" . __('Linkedin') . "</label>";
                  echo $this->Form->input('linkedin', ['type' => 'text', 'class' => 'form-control', 'id' => 'linkedin', 'label' => false]);                
              echo " </div>";

              echo "
              <div class='form-group'>
                  <label for='google_analytics'>" . __('Google Analytics') . "</label>";
                  echo $this->Form->input('google_analytics', ['type' => 'textarea', 'class' => 'form-control', 'id' => 'google_analytics', 'label' => false]);                
              echo " </div>";    
          ?>
          <br />          
          <div class="location-tab-map-pane" style="padding:10px;">
            <div class="tooltip-bottom-middle tooltip-layout panel-header-tooltip space-top-4 text-center pinned">
                <p class="panel-body" style="background-color: #3C8DBC;color:#ffffff;"><?= __('Drag the pin to set your location.') ?></p>
                <style>#map {width: 100%;height: 300px;}</style>
                <div id="map"></div>      
                <script>                    
                    function initMap() {
                        var lat = parseFloat($("#latitude").val());
                        var longt = parseFloat($("#longtitude").val());
                        
                        var myLatLng = {lat: lat, lng: longt};
                        var map = new google.maps.Map(document.getElementById('map'), {                                            
                            zoom: 16, // initialize zoom level - the max value is 21
                            streetViewControl: false, // hide the yellow Street View pegman
                            scaleControl: true, // allow users to zoom the Google Map
                            mapTypeId: google.maps.MapTypeId.ROADMAP,                                            
                            center: myLatLng,
                            //mapTypeId: google.maps.MapTypeId.ROADMAP
                        });

                        var myMarker = new google.maps.Marker({
                            position: new google.maps.LatLng(lat, longt),
                            draggable: true,
                            animation: google.maps.Animation.DROP
                        });

                        google.maps.event.addListener(myMarker, 'dragend', function (evt) {
                            $("#latitude").val(evt.latLng.lat());
                            $("#longtitude").val(evt.latLng.lng());
                        });

                        myMarker.addListener('click', toggleBounce);

                        bounds  = new google.maps.LatLngBounds();
                        loc = new google.maps.LatLng(myMarker.position.lat(), myMarker.position.lng());
                        bounds.extend(loc);
                        map.panToBounds(bounds);  

                        function toggleBounce() {
                          if (myMarker.getAnimation() !== null) {
                            myMarker.setAnimation(null);
                          } else {
                            myMarker.setAnimation(google.maps.Animation.BOUNCE);
                          }
                        }

                        map.setCenter(myMarker.position);
                        myMarker.setMap(map);
                    }
                </script>

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChZmDn0hp-VnrzRQK9IKjJeYPTDYWKIE8&callback=initMap&sensor=false" async defer></script>                
            </div>                
            </div>  
          <div class="form-group">
            <?= $this->Form->button('<i class="ti-save"></i> ' . __('Save'),['name' => 'save', 'value' => 'save', 'class' => 'btn btn-success', 'escape' => false]) ?>
            <?= $this->Form->button('<i class="ti-plus"></i> ' . __('Save and Continue editing'),['name' => 'save', 'value' => 'edit', 'class' => 'btn btn-success', 'escape' => false]) ?>
            <?= $this->Html->link('<i class="ti-left"> </i> ' . __('Back To list'), ['action' => 'index'],['class' => 'btn btn-info', 'escape' => false]) ?>                            
          </div>            
        </form>
      </div>
    </div>
  </div>
</div>