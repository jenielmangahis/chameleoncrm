<!DOCTYPE html>
<html lang="en">
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
            <?= (isset($website_title) ? $website_title : 'Nixser Online Services') ?> : <?= (isset($page_title) ? $page_title : $this->fetch('title')) ?>
        </title>
        <meta name="keywords" content="<?php if(isset($mk_for_layout)) { echo $mk_for_layout; } ?>">
        <meta name="description" content="<?php if(isset($md_for_layout)) { echo $md_for_layout; } ?>">
       
        <!-- Bootstrap -->
        <?php
            echo $this->Html->meta('icon');
            echo $this->Html->css('bootstrap.css');
            echo $this->Html->css('animate.css');           
            echo $this->Html->css('styles.css');            
            echo $this->Html->css('font-awesome.min.css');

            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
        ?>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="<?= $this->Url->build("/webroot/ico/") ?>favicon.ico">        
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?= $this->Url->build("/webroot/ico/") ?>apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?= $this->Url->build("/webroot/ico/") ?>apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?= $this->Url->build("/webroot/ico/") ?>apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="<?= $this->Url->build("/webroot/ico/") ?>apple-touch-icon-57-precomposed.png">
    </head>

    <body>
        
        