<?php 
use Cake\ORM\TableRegistry;
$this->Users = TableRegistry::get('Users');
?>
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
                    <h4 class="c-grey-900 mT-10 mB-30"><?= __('Users') ?></h4>            
                </div>
                <div class="pull-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= $this->Url->build("/users/dashboard") ?>"><i class="ti-home"></i> Home</a></li>                        
                        <li class="breadcrumb-item active"><?= __('Users') ?></li>
                    </ol>
                </div>   
                <div class="clearfix"></div> 

                <div class="user-block col-md-8" style="padding-left:0px;">   
                    <?= $this->Form->create(null,[                
                      'url' => ['action' => 'index'],
                      'class' => 'form-inline',
                      'type' => 'GET'
                    ]) ?>                         
                    <div class="input-group input-group-sm">
                        <input class="form-control" name="query" type="text" placeholder="Enter query to search">
                        <span class="input-group-btn">
                            <?= $this->Form->button('<i class="ti-search"></i>',['name' => 'search', 'value' => 'search', 'class' => 'btn btn-info btn-flat', 'escape' => false]) ?>                            
                            <?= $this->Html->link('<i class="ti-plus"></i> Add New', ['action' => 'add'],['class' => 'btn btn-success', 'escape' => false]) ?>
                        </span>
                    </div>                        
                    <?= $this->Form->end() ?>
                </div>
                <br />
                <div class="table-container" style="overflow:auto;">
                    <table class="table table-bordered">
                        <thead class="thead-inverse">
                            <tr>
                                <th class="actions"></th>                                
                                <th><?= $this->Paginator->sort('firstname', __("Firstname") . "<i class='ti-arrows-vertical pull-right'> </i>", array('escape' => false)) ?></th>
                                <th><?= $this->Paginator->sort('lastname', __("Lastname") . "<i class='ti-arrows-vertical pull-right'> </i>", array('escape' => false)) ?></th>
                                <th><?= $this->Paginator->sort('email', __("Email") . "<i class='ti-arrows-vertical pull-right'> </i>", array('escape' => false)) ?></th>                                
                                <th><?= $this->Paginator->sort('username', __("Username") . "<i class='ti-arrows-vertical pull-right'> </i>", array('escape' => false)) ?></th>                                
                                <th><?= $this->Paginator->sort('group_id', __("Group Name") . "<i class='ti-arrows-vertical pull-right'> </i>", array('escape' => false)) ?></th>                            
                                <th><?= $this->Paginator->sort('is_active', __("Is Active") . "<i class='ti-arrows-vertical pull-right'> </i>", array('escape' => false)) ?></th>
                                <th><?= $this->Paginator->sort('created', __("Created") . "<i class='ti-arrows-vertical pull-right'> </i>", array('escape' => false)) ?></th>
                                <th><?= $this->Paginator->sort('modified', __("Modified") . "<i class='ti-arrows-vertical pull-right'> </i>", array('escape' => false)) ?></th>                                                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($users as $user): ?>                            
                            <?php 
                                if( $user->is_active == $this->Users->isActive() ){                                        
                                    $is_active_bg = 'user-active';
                                    $is_active_value = "<span class=\"label\">ACTIVE</span>";
                                }else{
                                    $is_active_bg = 'user-inactive';                                        
                                    $is_active_value = "<span class=\"label\">INACTIVE</span>";
                                }
                            ?>
                            <tr>
                                <td class="table-actions">
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <?= $this->Html->link('<i class="ti-search"></i> View', ['action' => 'view', $user->id],['class' => 'dropdown-item', 'escape' => false]) ?>
                                            <?= $this->Html->link('<i class="ti-pencil"></i> Edit', ['action' => 'edit', $user->id],['class' => 'dropdown-item', 'escape' => false]) ?>
                                            <?php 
                                                if( $user->is_active == $this->Users->isActive() ){
                                                    echo $this->Html->link('<i class="ti-close"></i> Suspend', '#modal-suspend-'.$user->id,['data-toggle' => 'modal','class' => 'dropdown-item', 'escape' => false]);
                                                }else{
                                                    echo $this->Html->link('<i class="ti-check"></i> Activate', '#modal-activate-'.$user->id,['data-toggle' => 'modal','class' => 'dropdown-item', 'escape' => false]);
                                                }
                                            ?>
                                            <?= $this->Html->link('<i class="ti-trash"></i> Delete', '#modal-'.$user->id,['data-toggle' => 'modal','class' => 'dropdown-item', 'escape' => false]) ?>
                                        </div>  
                                    </div>    

                                    <div id="modal-<?=$user->id?>" class="modal fade">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">                                                
                                                <h4 class="modal-title">Delete Confirmation</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= __('Are you sure you want to delete selected entry?') ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn btn-default">No</button>
                                                <?= $this->Form->postLink(
                                                        'Yes',
                                                        ['action' => 'delete', $user->id],
                                                        ['class' => 'btn btn-danger', 'escape' => false]
                                                    )
                                                ?>
                                            </div>
                                          </div>
                                        </div>                              
                                    </div>      

                                    <div id="modal-suspend-<?=$user->id?>" class="modal fade">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">                                                
                                                <h4 class="modal-title">Confirmation</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= __('Are you sure you want to suspend the selected user?') ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn btn-default">No</button>
                                                <?= $this->Form->postLink(
                                                        'Yes',
                                                        ['action' => 'user_suspend', $user->id],
                                                        ['class' => 'btn btn-danger', 'escape' => false]
                                                    )
                                                ?>
                                            </div>
                                          </div>
                                        </div>                              
                                    </div>

                                    <div id="modal-activate-<?=$user->id?>" class="modal fade">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">                                                
                                                <h4 class="modal-title">Confirmation</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= __('Are you sure you want to activate the selected user?') ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn btn-default">No</button>
                                                <?= $this->Form->postLink(
                                                        'Yes',
                                                        ['action' => 'user_activate', $user->id],
                                                        ['class' => 'btn btn-danger', 'escape' => false]
                                                    )
                                                ?>
                                            </div>
                                          </div>
                                        </div>                              
                                    </div>
                                            
                                </td>                                
                                <td><?= h($user->firstname) ?></td>
                                <td><?= h($user->lastname) ?></td>                                                           
                                <td><?= h($user->email) ?></td>                                                           
                                <td><?= h($user->username) ?></td>                                                           
                                <td><?= h($user->group->name) ?></td>     
                                <td class="<?= $is_active_bg; ?>" style="text-align:center;"><?= $is_active_value; ?></td>                                                       
                                <td><?= h($user->created) ?></td>
                                <td><?= h($user->modified) ?></td>                  
                            </tr>
                            <?php ;endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <br />
                <div class="d-flex justify-content-center">
                    <nav aria-label="Page navigation example">
                      <ul class="pagination">
                        <?= $this->Paginator->prev('Previous') ?>
                        <?= $this->Paginator->numbers() ?>
                        <?= $this->Paginator->next('Next') ?>                    
                      </ul>                  
                    </nav>                
                </div>
            </div>
        </div>
    </div>
</div>
