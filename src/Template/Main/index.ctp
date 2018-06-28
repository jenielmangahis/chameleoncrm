<?php use Cake\Utility\Inflector; ?>
<style>
.company-logo{
	width:300px;
	margin: 15px;	
}
</style>
<div class="container">
	<div class="row">
		<h2 class="text-center">Shipping Companies</h2>
        <hr/>
	</div>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">                
                <img src="<?= $this->Url->build("/webroot/img/shipping/evergreen.gif") ?>" class="company-logo" alt="Company Logo">
                <br />                
                <?= $this->Html->link(__("View Shipping Schedule") . "</span>",["controller" => "main", "action" => "evergreen_shipping"],["class" => "btn btn-primary col-xs-12", "escape" => false]) ?>                
                <div class="clearfix"></div>
            </div>
        </div>
        
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">                
                <img src="<?= $this->Url->build("/webroot/img/shipping/cosco.png") ?>" class="company-logo" alt="Company Logo">   
                <br />
                <?= $this->Html->link(__("View Shipping Schedule") . "</span>",["controller" => "main", "action" => "cosco_shipping"],["class" => "btn btn-primary col-xs-12", "escape" => false]) ?>
                <div class="clearfix"></div>
            </div>
        </div>
        
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="<?= $this->Url->build("/webroot/img/shipping/msc.png") ?>" class="company-logo" alt="Company Logo">   
                <br />
                <?= $this->Html->link(__("View Shipping Schedule") . "</span>",["controller" => "main", "action" => "msc_shipping"],["class" => "btn btn-primary col-xs-12", "escape" => false]) ?>
                <div class="clearfix"></div>
            </div>
        </div>
        
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
            	<img src="<?= $this->Url->build("/webroot/img/shipping/mol.svg") ?>" class="company-logo" alt="Company Logo" style="height:53px;">   
            	<br />                
                <?= $this->Html->link(__("View Shipping Schedule") . "</span>",["controller" => "main", "action" => "mol_shipping"],["class" => "btn btn-primary col-xs-12", "escape" => false]) ?>
                <div class="clearfix"></div>
            </div>
        </div>
        
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
            	<img src="<?= $this->Url->build("/webroot/img/shipping/interasia.png") ?>" class="company-logo" alt="Company Logo" style="width:136px;">   
                <br />
                <?= $this->Html->link(__("View Shipping Schedule") . "</span>",["controller" => "main", "action" => "interasia_shipping"],["class" => "btn btn-primary col-xs-12", "escape" => false]) ?>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="<?= $this->Url->build("/webroot/img/shipping/cma.png") ?>" class="company-logo" alt="Company Logo" style="width:92px;">   
                <br />
                <?= $this->Html->link(__("View Shipping Schedule") . "</span>",["controller" => "main", "action" => "cma_shipping"],["class" => "btn btn-primary col-xs-12", "escape" => false]) ?>
                <div class="clearfix"></div>
            </div>
        </div>
        
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="<?= $this->Url->build("/webroot/img/shipping/kline.gif") ?>" class="company-logo" alt="Company Logo" style="width:244px;">   
                <br />
                <?= $this->Html->link(__("View Shipping Schedule") . "</span>",["controller" => "main", "action" => "kline_shipping"],["class" => "btn btn-primary col-xs-12", "escape" => false]) ?>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="<?= $this->Url->build("/webroot/img/shipping/maersk.svg") ?>" class="company-logo" alt="Company Logo" style="width:144px;">   
                <br />
                <?= $this->Html->link(__("View Shipping Schedule") . "</span>",["controller" => "main", "action" => "maersk_shipping"],["class" => "btn btn-primary col-xs-12", "escape" => false]) ?>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="<?= $this->Url->build("/webroot/img/shipping/oocl.svg") ?>" class="company-logo" alt="Company Logo" style="width:100px;">   
                <br />
                <?= $this->Html->link(__("View Shipping Schedule") . "</span>",["controller" => "main", "action" => "oocl_shipping"],["class" => "btn btn-primary col-xs-12", "escape" => false]) ?>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="<?= $this->Url->build("/webroot/img/shipping/wanhai.png") ?>" class="company-logo" alt="Company Logo" style="width:244px;">   
                <br />
                <?= $this->Html->link(__("View Shipping Schedule") . "</span>",["controller" => "main", "action" => "wanhap_shipping"],["class" => "btn btn-primary col-xs-12", "escape" => false]) ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>