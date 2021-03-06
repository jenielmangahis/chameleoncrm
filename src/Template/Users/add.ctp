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
          <h4 class="c-grey-900 mT-10 mB-30"><i class="ti-plus"></i> <?= __('Add User') ?></h4>            
      </div>
      <div class="pull-right">
          <ol class="breadcrumb" style="font-size:12px;">
              <li class="breadcrumb-item"><a href="<?= $this->Url->build("/users/dashboard") ?>"><i class="ti-home"></i> <?= __('Home') ?></a></li>              
              <li class="breadcrumb-item"><a href="<?= $this->Url->build("/users/index") ?>"><?= __('System Settings') ?></a></li>    
              <li class="breadcrumb-item"><a href="<?= $this->Url->build("/users/index") ?>"><?= __('User') ?></a></li>              
              <li class="breadcrumb-item active"><?= __('Add New') ?></li>
          </ol>
      </div>   
      <div class="clearfix"></div> 
      <div class="mT-30">
        <?= $this->Form->create($user,['data-toggle' => 'validator', 'role' => 'form']) ?>
          <h3 class="form-caption"><?= __('User Information') ?></h3>
          <?php
              echo "
              <div class='form-group'>
                  <label for='firstname'>" . __('Firstname') . "</label>";
                  echo $this->Form->input('firstname', ['class' => 'form-control', 'id' => 'firstname', 'label' => false]);                
              echo "</div>";    

              echo "
              <div class='form-group'>
                  <label for='middlename'>" . __('Middlename') . "</label>";
                  echo $this->Form->input('middlename', ['class' => 'form-control', 'id' => 'middlename', 'label' => false]);                
              echo "</div>";    

              echo "
              <div class='form-group'>
                  <label for='lastname'>" . __('Lastname') . "</label>";
                  echo $this->Form->input('lastname', ['class' => 'form-control', 'id' => 'lastname', 'label' => false]);                
              echo "</div>";

              echo "
              <div class='form-group'>
                  <label for='email'>" . __('Email') . "</label>";
                  echo $this->Form->input('email', ['class' => 'form-control', 'id' => 'email', 'label' => false]);                
              echo "</div>";

              echo "
              <div class='form-group'>
                  <label for='is_active'>" . __('Is Active') . "</label>";
                  echo $this->Form->select('is_active',["1" => "Yes", "0" => "No"],['class' => 'form-control', 'id' => 'is_active', 'label' => false]);                                        
              echo "</div>";
          ?>
          <h3 class="form-caption"><?= __('Login Details') ?></h3>          
          <?php
              echo "
              <div class='form-group'>
                  <label for='group_id'>" . __('Group') . "</label>";
                  echo $this->Form->input('group_id', ['class' => 'form-control', 'id' => 'group_id', 'label' => false]);                
              echo "</div>";    

              echo "
              <div class='form-group'>
                  <label for='username'>" . __('Username') . "</label>";
                  echo $this->Form->input('username', ['class' => 'form-control', 'id' => 'username', 'label' => false]);                
              echo "</div>";    

              echo "
              <div class='form-group'>
                  <label for='password'>" . __('Password') . "</label>>";
                  echo $this->Form->input('password', ['type' => 'password', 'class' => 'form-control', 'id' => 'password', 'label' => false]);                
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