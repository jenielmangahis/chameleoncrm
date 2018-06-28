<?= $this->element('AdminB/header'); ?>
<!-- Main wrapper  -->
<div id="main-wrapper">
  <?= $this->element('AdminB/header_nav'); ?>
  <?= $this->element('AdminB/left_sidebar'); ?>
  <div class="page-wrapper">
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
  </div>
</div>
<?= $this->element('AdminB/footer'); ?>