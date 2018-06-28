<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="viewport" content="width=device-width" />

    <title><?= COMPANY_NAME ?></title>
 
    <?php
            echo $this->Html->meta('icon');            
            echo $this->Html->css('adminb/lib/bootstrap/bootstrap.min.css');
            echo $this->Html->css('adminb/helper.css');
            echo $this->Html->css('adminb/style.css');

            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
        ?>
    <link rel="shortcut icon" href="<?= $this->Url->build("/webroot/ico/") ?>favicon.ico">        
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= $this->Url->build("/webroot/ico/") ?>apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= $this->Url->build("/webroot/ico/") ?>apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= $this->Url->build("/webroot/ico/") ?>apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?= $this->Url->build("/webroot/ico/") ?>apple-touch-icon-57-precomposed.png">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->  
    <script>
        var BASE_URL = '<?= $this->Url->build("/") ?>';
    </script>
</head>
<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>