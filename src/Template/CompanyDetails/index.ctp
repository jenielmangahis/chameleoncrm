<?php use Cake\Utility\Inflector; ?>
<style>
.form-caption{
    background-color: #3C8DBC;
    color:#ffffff;
    padding: 5px;
}
</style>
<div class="container-fluid">    
    <div class="row">
        <div class="masonry-item col-md-6">            
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="pull-left">
                    <h4 class="c-grey-900 mT-10 mB-30"><?= __('Company Details') ?></h4>            
                </div>
                <div class="pull-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= $this->Url->build("/users/dashboard") ?>"><i class="ti-home"></i> Home</a></li>                        
                        <li class="breadcrumb-item"><?= __('System Settings') ?></li>
                        <li class="breadcrumb-item active"><?= __('Company Details') ?></li>
                    </ol>
                </div>   
                <div class="clearfix"></div> 
                <div class="pull-right">
                        <?= $this->Html->link('<i class="ti-pencil"></i> Edit', ['action' => 'edit', $companyDetails->id],['class' => 'btn btn-info', 'escape' => false]) ?>
                </div>
                <div class="clearfix"></div> 
                <br />
                <div class="table-container" style="overflow:auto;">                    
                    <table class="table table-bordered">                        
                    <tbody>
                        <tr><td>Company Name</td><td><?php echo $companyDetails->name; ?></td></tr>
                        <tr><td>Logo</td><td><img class="company-logo" src="<?php echo $companyDetails->logo; ?>"></td></tr>
                        <tr><td>QR Image</td><td><img class="company-logo" src="<?php echo $companyDetails->qr_image; ?>"></td></tr>
                        <tr><td>Email</td><td><?php echo $companyDetails->email; ?></td></tr>
                        <tr><td>Inquiry Recipient</td><td><?php echo $companyDetails->inquiry_recipient; ?></td></tr>
                        <tr><td>Address</td><td><?php echo $companyDetails->address; ?></td></tr>
                        <tr><td>Contact Number</td><td><?php echo $companyDetails->contact_number; ?></td></tr>
                        <tr><td>Fax</td><td><?php echo $companyDetails->fax; ?></td></tr>
                        <tr><td>Facebook</td><td><?php echo $companyDetails->facebook; ?></td></tr>
                        <tr><td>Twitter</td><td><?php echo $companyDetails->twitter; ?></td></tr>
                        <tr><td>Linkedin</td><td><?php echo $companyDetails->linkedin; ?></td></tr>
                        <tr><td>Instagram</td><td><?php echo $companyDetails->instagram; ?></td></tr>
                        <tr><td>Google Analytics</td><td><?php echo h($companyDetails->google_analytics); ?></td></tr>
                    </tbody>
                    </table>
                </div>                
            </div>
        </div>
        <div class="masonry-item col-md-6">          
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <h4 class="c-grey-900 mT-10 mB-30"><?= __('Google Map') ?></h4>    
                <style>#map {width: 100%;height: 300px;}</style>
                    <div class="location-tab-map-pane" style="padding:10px;">
                        <div id="map"></div>            
                        <script>
                            function initMap() {
                              var myLatLng = {lat: <?php echo $companyDetails->latitude; ?>, lng: <?php echo $companyDetails->longtitude; ?>};

                              // Create a map object and specify the DOM element for display.
                              var map = new google.maps.Map(document.getElementById('map'), {
                                center: myLatLng,
                                // scrollwheel: false,
                                zoom: 16
                              });

                              // Create a marker and set its position.
                              var marker = new google.maps.Marker({
                                map: map,
                                position: myLatLng,
                                title: 'Regalia large and amazing room!'
                              });
                            }
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyChZmDn0hp-VnrzRQK9IKjJeYPTDYWKIE8&callback=initMap&sensor=false" async defer></script>                
                    </div>
            </div>
        </div>
    </div>
</div>
