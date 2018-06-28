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
                    <h4 class="c-grey-900 mT-10 mB-30"><?= __('Pages') ?></h4>            
                </div>
                <div class="pull-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= $this->Url->build("/users/dashboard") ?>"><i class="ti-home"></i> Home</a></li>                        
                        <li class="breadcrumb-item active"><?= __('Pages') ?></li>
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
                                <th style="width:50%;"><?= $this->Paginator->sort('name', __("Name") . "<i class='ti-arrows-vertical pull-right'> </i>", array('escape' => false)) ?></th>
                                <th><?= $this->Paginator->sort('is_publish', __("Is Publish") . "<i class='ti-arrows-vertical pull-right'> </i>", array('escape' => false)) ?></th>                                
                                <th><?= $this->Paginator->sort('created', __("Created") . "<i class='ti-arrows-vertical pull-right'> </i>", array('escape' => false)) ?></th>
                                <th><?= $this->Paginator->sort('modified', __("Modified") . "<i class='ti-arrows-vertical pull-right'> </i>", array('escape' => false)) ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pages as $page): ?>
                            <?php $slug = Inflector::slug($page->name, "-"); ?>                                          
                            <tr>
                                <td class="table-actions">
                                    <div class="dropdown">
                                        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <?= $this->Html->link('<i class="ti-search"></i> Preview', ['action' => $page->id, $slug],['class' => 'dropdown-item', 'escape' => false, 'target' => '_new']) ?>
                                            <?php if( $page->is_publish == 1 ){ ?>                                                
                                                <?= $this->Html->link('<i class="ti-close"></i> Unpublish', '#modal-unpublish-'.$page->id,['class' => 'dropdown-item', 'data-toggle' => 'modal','escape' => false]) ?>
                                            <?php }else{ ?>
                                                <?= $this->Html->link('<i class="ti-check"></i> Publish', '#modal-publish-'.$page->id,['class' => 'dropdown-item', 'data-toggle' => 'modal','escape' => false]) ?>
                                            <?php } ?>
                                            <?= $this->Html->link('<i class="ti-pencil"></i> Edit', ['action' => 'edit', $page->id],['class' => 'dropdown-item', 'escape' => false]) ?>
                                            <?= $this->Html->link('<i class="ti-trash"></i> Delete', '#modal-'.$page->id,['class' => 'dropdown-item', 'data-toggle' => 'modal','escape' => false]) ?>
                                        </div>  
                                    </div>                              
                                    <div id="modal-<?=$page->id?>" class="modal fade">
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
                                                        ['action' => 'delete', $page->id],
                                                        ['class' => 'btn btn-danger', 'escape' => false]
                                                    )
                                                ?>
                                            </div>
                                          </div>
                                        </div>                              
                                    </div>

                                    <div id="modal-publish-<?=$page->id?>" class="modal fade">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">                                                
                                                <h4 class="modal-title">Confirmation</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= __('Are you sure you want to publish selected page?') ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn btn-default">No</button>
                                                <?= $this->Form->postLink(
                                                        'Yes',
                                                        ['action' => 'publish', $page->id],
                                                        ['class' => 'btn btn-info', 'escape' => false]
                                                    )
                                                ?>
                                            </div>
                                          </div>
                                        </div>                              
                                    </div>

                                    <div id="modal-unpublish-<?=$page->id?>" class="modal fade">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">                                                
                                                <h4 class="modal-title">Confirmation</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p><?= __('Are you sure you want to unpublish selected page?') ?></p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn btn-default">No</button>
                                                <?= $this->Form->postLink(
                                                        'Yes',
                                                        ['action' => 'unpublish', $page->id],
                                                        ['class' => 'btn btn-danger', 'escape' => false]
                                                    )
                                                ?>
                                            </div>
                                          </div>
                                        </div>                              
                                    </div>                       
                                </td>                            
                                <td><?= h($page->name) ?></td>
                                <td align="center">
                                    <?php 
                                        if( $page->is_publish == 1 ){
                                            echo "<span class=\"label label-success\">Published</span>";
                                        }else{
                                            echo "<span class=\"label label-danger\">Unpublished</span>";
                                        }
                                    ?>
                                </td>                                
                                <td><?= h($page->created) ?></td>
                                <td><?= h($page->modified) ?></td>                  
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
