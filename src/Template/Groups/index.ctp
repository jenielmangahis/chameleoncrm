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
                    <h4 class="c-grey-900 mT-10 mB-30"><?= __('Groups') ?></h4>            
                </div>
                <div class="pull-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= $this->Url->build("/users/dashboard") ?>"><i class="ti-home"></i> Home</a></li>                        
                        <li class="breadcrumb-item active"><?= __('System Settings') ?></li>
                        <li class="breadcrumb-item active"><?= __('Groups') ?></li>
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
                        <input class="form-control" name="query" type="text" placeholder="Enter query to search" style="margin-right:4px;">
                        <span class="input-group-btn">
                            <?= $this->Form->button('<i class="ti-search"></i>',['name' => 'search', 'value' => 'search', 'class' => 'btn btn-info btn-flat', 'escape' => false]) ?>                            
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
                                <th style="width:60%;"><?= $this->Paginator->sort('name', __("Name") . "<i class='ti-arrows-vertical pull-right'> </i>", array('escape' => false)) ?></th>
                                <th><?= $this->Paginator->sort('created', __("Created") . "<i class='ti-arrows-vertical pull-right'> </i>", array('escape' => false)) ?></th>
                                <th><?= $this->Paginator->sort('modified', __("Modified") . "<i class='ti-arrows-vertical pull-right'> </i>", array('escape' => false)) ?></th>                                   
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($groups as $g) { ?>
                            <tr>
                                <td class="table-actions">
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <?= $this->Html->link('<i class="ti-eye"></i> View', ['action' => 'view', $g->id],['class' => 'dropdown-item','escape' => false]) ?>
                                            <?= $this->Html->link('<i class="ti-pencil"></i> Edit', ['action' => 'edit', $g->id],['class' => 'dropdown-item', 'escape' => false]) ?>
                                            <?= $this->Html->link('<i class="ti-trash"></i> Delete', '#modal-'.$g->id,['class' => 'dropdown-item', 'data-toggle' => 'modal','escape' => false]) ?>
                                        </div>  
                                    </div>
                                    <div id="modal-<?=$g->id?>" class="modal fade">
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
                                                        ['action' => 'delete', $g->id],
                                                        ['class' => 'btn btn-danger', 'escape' => false]
                                                    )
                                                ?>
                                            </div>
                                          </div>
                                        </div>                              
                                    </div>                       
                                </td>                                
                                <td><?= $g->name; ?></td>
                                <td><?= $g->created ?></td>
                                <td><?= $g->modified ?></td>                          
                            </tr>
                            <?php } ?>
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
