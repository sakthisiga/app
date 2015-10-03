
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Mon Journal &middot; Login Page</title>
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
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #E5E5E5;
      }

      .form-signin {
         border: 1px solid #D8D8D8;
         border-bottom-width: 2px;
         border-top-width: 0;
         background-color: #FFF;
         max-width: 350px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #F5F5F5;
        -webkit-border-radius: 3px;
           -moz-border-radius: 3px;
                border-radius: 3px;
      }
      .form-signin .form-signin-heading {
         font-size: 24px;
         font-weight: 300;
      }

      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

      </style>
      <link href="<?php echo base_url();?>/css/bootplus-responsive.css" rel="stylesheet">
      <link href="<?php echo base_url();?>/css/font-awesome-ie7.min.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo base_url();?>/js/html5shiv.js"></script>
    <![endif]-->

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
  </head>

  <body>

    <div class="container">

           
      <?php 
      $attributes = array('class' => 'form-signin');
      echo form_open('login/validate', $attributes); ?>
      <h1 align="center"><b>MON JOURNAL</b></h1><hr />
        <h4 class="form-signin-heading">Please sign in</h4>
        <input type="text" name="username" class="input-block-level" placeholder="Username">
        <input type="password" name="password" class="input-block-level" placeholder="Password">
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-primary" type="submit">
           Sign in
           <i class="icon-circle-arrow-right"></i>
        </button>
        <?php echo anchor('login/signup', 'Create Account');?>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>/js/jquery.js"></script>
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

  </body>
</html>
