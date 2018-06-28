<!-- footer -->
<footer class="footer"> © 2018 All rights reserved. Template designed by <a href="https://colorlib.com">Colorlib</a></footer>
<!-- End footer -->

<script>
  var base_url = "<?= $base_url; ?>";  
</script>

<?php   
  echo $this->Html->script('adminb/lib/jquery/jquery.min.js');
  echo $this->Html->script('adminb/lib/bootstrap/js/popper.min.js');
  echo $this->Html->script('adminb/lib/bootstrap/js/bootstrap.min.js');
  echo $this->Html->script('adminb/sidebarmenu.js');
  echo $this->Html->script('adminb/jquery.slimscroll.js');
  echo $this->Html->script('adminb/lib/sticky-kit-master/dist/sticky-kit.min.js');
  echo $this->Html->script('adminb/custom.min.js');
?>
</body>
</html>