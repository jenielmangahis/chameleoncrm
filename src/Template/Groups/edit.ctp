<div class="row gap-20 masonry pos-r">
  <div class="masonry-sizer col-md-6"></div>
  <div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
      <div class="pull-left">
          <h4 class="c-grey-900 mT-10 mB-30"><i class="ti-pencil"></i> <?= __('Edit Group') ?></h4>            
      </div>
      <div class="pull-right">
          <ol class="breadcrumb" style="font-size:12px;">
              <li class="breadcrumb-item"><a href="<?= $this->Url->build("/users/dashboard") ?>"><i class="ti-home"></i> <?= __('Home') ?></a></li>              
              <li class="breadcrumb-item"><a href="<?= $this->Url->build("/groups/index") ?>"><?= __('System Settings') ?></a></li>              
              <li class="breadcrumb-item"><a href="<?= $this->Url->build("/groups/index") ?>"><?= __('Groups') ?></a></li>              
              <li class="breadcrumb-item active"><?= __('Edit') ?></li>
          </ol>
      </div>   
      <div class="clearfix"></div> 
      <div class="mT-30">
        <?= $this->Form->create($group,['id' => 'frm-default-add', 'data-toggle' => 'validator', 'role' => 'form','class' => 'form-horizontal']) ?>        
          <?php
              echo "
              <div class='form-group'>
                  <label for='name'>" . __('Name') . "</label>";
                  echo $this->Form->input('name', ['class' => 'form-control', 'id' => 'name', 'label' => false]);                
              echo "</div>";    
          ?>
          <br />
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