<?php 
use Cake\ORM\TableRegistry;
$this->Users = TableRegistry::get('Users');
?>
<div class="container-fluid">    
    <div class="row">
        <div class="col-md-12">            
            <div class="bgc-white bd bdrs-3 p-20 mB-20">
                <div class="pull-left">
                    <h4 class="c-grey-900 mT-10 mB-30"><?= __('User View') ?></h4>            
                </div>
                <div class="pull-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= $this->Url->build("/users/dashboard") ?>"><i class="ti-home"></i> Home</a></li>    
                        <li class="breadcrumb-item"><a href="<?= $this->Url->build("/groups/index") ?>"><?= __('System Settings') ?></a></li>                                      
                        <li class="breadcrumb-item"><a href="<?= $this->Url->build("/groups/index") ?>"><?= __('Users') ?></a></li>                                                                                  
                        <li class="breadcrumb-item active"><?= __('View') ?></li>
                    </ol>
                </div>   
                <div class="clearfix"></div> 
                <div class="table-container" style="overflow:auto;">
                    <?php 
                        if( $user->is_active == $this->Users->isActive() ){                                        
                            $is_active_bg = 'user-active';
                            $is_active_value = "<span class=\"label\">ACTIVE</span>";
                        }else{
                            $is_active_bg = 'user-inactive';                                        
                            $is_active_value = "<span class=\"label\">INACTIVE</span>";
                        }
                    ?>
                    <table class="table table-striped table-bordered table-hover">
                        <tbody>
                            <tr>
                                <th style="width:10%;"><?= __('Name') ?></th>
                                <td><?= h($user->firstname . ' ' . $user->lastname) ?></td>
                            </tr>  
                            <tr>
                                <th><?= __('Username') ?></th>
                                <td><?= h($user->username) ?></td>
                            </tr>  
                            <tr>
                                <th><?= __('Is Active') ?></th>
                                <td class="<?= $is_active_bg; ?>"><?= $is_active_value; ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created') ?></th>
                                <td><?= date("Y-m-d H:i:s",strtotime($user->created)) ?></td>
                            </tr>  
                            <tr>
                                <th><?= __('Modified') ?></th>
                                <td><?= date("Y-m-d H:i:s",strtotime($user->modified)) ?></td>
                            </tr>                                           
                        </tbody>
                    </table>
                    <?= $this->Html->link('Back To list', ['action' => 'index'],['class' => 'btn btn-info', 'escape' => false]) ?>
                </div>                
            </div>
        </div>
    </div>
</div>
