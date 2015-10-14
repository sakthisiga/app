<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html lang="en">
   <head>
      <meta charset="utf-8">
      <title><?php echo $title; ?></title>
      <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="">
      <meta name="author" content="">

    <!-- Le styles -->
      <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
      <link href="<?php echo base_url();?>/css/bootplus.css" rel="stylesheet">
      <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .hero-unit {
          padding: 60px;
      }
      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
      </style>
      <link href="<?php echo base_url();?>/css/bootplus-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url();?>/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url();?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url();?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url();?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url();?>/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="<?php echo base_url();?>/ico/favicon.png">
    
   
    <script src="<?php echo base_url(); ?>/js/jquery.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-carousel.js"></script>
    <script src="<?php echo base_url();?>/js/bootstrap-typeahead.js"></script>
   
   </head>

   <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="<?php echo base_url(); ?>home">Mon Journal</a>
          <div class="nav-collapse collapse">
            <p class="navbar-text pull-right">
              Logged in as <a href="#" class="navbar-link"><?php echo $this->session->userdata('username'); ?></a><?php echo " | ".anchor('login/logout', 'Logout!!'); ?>
            </p>
            <ul class="nav">
              <li><a href="<?php echo base_url(); ?>register">Registation</a></li>
              <li><a href="<?php echo base_url(); ?>email">Email</a></li>
              <li><a href="<?php echo base_url(); ?>email">Contact</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span2">
          <div class="sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li class="nav-header">Sidebar</li>
              <li><a href="#">Link</a></li>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->


      
