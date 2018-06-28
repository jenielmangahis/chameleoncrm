<div class="row gap-20 masonry pos-r">
  <div class="masonry-sizer col-md-6"></div>
  <div class="masonry-item col-md-12">
    <div class="bgc-white p-20 bd">
      <div class="pull-left">
          <h4 class="c-grey-900 mT-10 mB-30"><i class="ti-plus"></i> <?= __('Add Page') ?></h4>            
      </div>
      <div class="pull-right">
          <ol class="breadcrumb" style="font-size:12px;">
              <li class="breadcrumb-item"><a href="<?= $this->Url->build("/users/dashboard") ?>"><i class="ti-home"></i> <?= __('Home') ?></a></li>              
              <li class="breadcrumb-item"><a href="<?= $this->Url->build("/pages/index") ?>"><?= __('Pages') ?></a></li>              
              <li class="breadcrumb-item active"><?= __('Add New') ?></li>
          </ol>
      </div>   
      <div class="clearfix"></div> 
      <div class="mT-30">
        <?= $this->Form->create($page,['data-toggle' => 'validator', 'role' => 'form']) ?>
          <?php
            echo "
            <div class='form-group'>
                <label for='name'>" . __('Name') . "</label>";
                echo $this->Form->input('name', ['class' => 'form-control', 'id' => 'name', 'label' => false]);                
            echo "</div>";    
            
            echo "
            <div class='form-group'>
                <label for='body'>" . __('Body') . "</label>";
                echo $this->Form->input('body', ['class' => 'form-control ckeditor', 'id' => 'body', 'label' => false]);                
            echo "</div>";    
            
            echo "
            <div class='form-group'>
                <label for='meta_title'>" . __('Meta Title') . "</label>";
                echo $this->Form->input('meta_title', ['class' => 'form-control', 'id' => 'meta_title', 'label' => false]);                
            echo "</div>";    
            
            echo "
            <div class='form-group'>
                <label for='meta_keyword'>" . __('Meta Keyword') . "</label>";
                echo $this->Form->input('meta_keyword', ['class' => 'form-control', 'id' => 'meta_keyword', 'label' => false]);                
            echo "</div>";    
            
            echo "
            <div class='form-group'>
                <label for='meta_description'>" . __('Meta Description') . "</label>";
                echo $this->Form->input('meta_description', ['class' => 'form-control', 'id' => 'meta_description', 'label' => false]);                
            echo "</div>";    
            
            echo "
            <div class='form-group'>
                <label for='is_publish'>" . __('Is Publish') . "</label>";
                echo $this->Form->select('is_publish',["1" => "Yes", "0" => "No"],['class' => 'form-control', 'id' => 'is_publish', 'label' => false]);                                        
            echo "</div>";    
          ?>
          <br />
          <div class="form-group">
            <?= $this->Form->button('<i class="ti-save"></i> ' . __('Save'),['name' => 'save', 'value' => 'save', 'class' => 'btn btn-success', 'escape' => false]) ?>
            <?= $this->Form->button('<i class="ti-plus"></i> ' . __('Save and Continue adding'),['name' => 'save', 'value' => 'edit', 'class' => 'btn btn-success', 'escape' => false]) ?>
            <?= $this->Html->link('<i class="ti-left"> </i> ' . __('Back To list'), ['action' => 'index'],['class' => 'btn btn-info', 'escape' => false]) ?>                            
          </div>            
        </form>
      </div>
    </div>
  </div>
</div>