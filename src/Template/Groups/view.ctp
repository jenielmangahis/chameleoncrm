<?php use Cake\Utility\Inflector; ?>
<style>
.ti-arrows-vertical{
    line-height: 19px;
}
</style>
<div class="container-fluid">    
    <div class="row">
        <div class="col-md-12">            
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="pull-left">
                    <h4 class="c-grey-900 mT-10 mB-30"><?= __('Group View') ?></h4>            
                </div>
                <div class="pull-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= $this->Url->build("/users/dashboard") ?>"><i class="ti-home"></i> Home</a></li>    
                        <li class="breadcrumb-item"><a href="<?= $this->Url->build("/groups/index") ?>"><?= __('System Settings') ?></a></li>                                      
                        <li class="breadcrumb-item"><a href="<?= $this->Url->build("/groups/index") ?>"><?= __('Groups') ?></a></li>                                                                                  
                        <li class="breadcrumb-item active"><?= __('View') ?></li>
                    </ol>
                </div>   
                <div class="clearfix"></div> 
                <div class="table-container" style="overflow:auto;">
                    <table class="table table-striped table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th width="140"><?= __('Name') ?></th>
                                <td><?= h($group->name) ?></td>
                            </tr>  
                            <tr>
                                <th width="140"><?= __('Created') ?></th>
                                <td><?= date("Y-m-d H:i:s",strtotime($group->created)) ?></td>
                            </tr>  
                            <tr>
                                <th width="140"><?= __('Modified') ?></th>
                                <td><?= date("Y-m-d H:i:s",strtotime($group->modified)) ?></td>
                            </tr>                                        
                        </tbody>
                    </table>
                    <?= $this->Html->link('Back To list', ['action' => 'index'],['class' => 'btn btn-info', 'escape' => false]) ?>
                </div>                
            </div>
        </div>
    </div>
</div>
