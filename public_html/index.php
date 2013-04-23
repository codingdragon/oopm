<?php

require 'submit.php';

if(!empty($_POST)){
  $f = new Submit();
  $f->checkPost($_POST);
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>HornblowerNY New Project Submission Page</title>

<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">
<!--[if IE]><meta http-equiv="X-UA-Compatible" content="chrome=1"><![endif]-->
<meta name="viewport" content="width=device-width,minimum-scale=1,maximum-scale=1">

<link rel="shortcut icon" type="image/ico" href="_assets/img/favicon.ico">

<!-- Add Google fonts like so... -->
<link href="http://fonts.googleapis.com/css?family=Squada+One" rel="stylesheet">
<link rel="stylesheet" href="_assets/css/base.css" type="text/css">
<link rel="stylesheet" href="_assets/css/common.css" type="text/css">

<script src="_assets/js/prefixfree.min.js"></script>
<script src="_assets/js/prefixfree.dynamic-dom.min.js"></script>
<script src="_assets/js/prefixfree.jquery.min.js"></script>
<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
<div id="page">
  <header class="group">
    <img src="_assets/img/mainlogo.png" alt=""> <img src="_assets/img/logo_oopm.png" alt="">
  </header>
  
  <?php if(empty($_POST)) :?>
  <form name="submit" method="post" action="" enctype="multipart/form-data">
    <div class="mandatory-info">
      <p><label for="user_name">Name:<span class="required">*</span></label> <input type="text" id="user_name" name="user_name" placeholder="Your Name" required></p>
      <p><label for="user_email">Email:<span class="required">*</span></label> <input type="email" id="user_email" name="user_email" placeholder="your.name@email.com" required></p>
      <p><label for="the_project">Project Name:<span class="required">*</span></label> <input type="text" id="the_project" name="the_project" placeholder="The Sample Project" required></p>
      <p><label for="due_date">Due Date:<span class="required">*</span></label> <input type="date" id="due_date" name="due_date" required></p>
    </div><!-- /.mandatory-info -->
  
    <h1>Please choose the type of new project(s) you wish to submit:</h1>
    <ul class="form-nav"><!-- Selecting any of these displays the global items and the corresponding section of the form -->
      <li><label for="select-print-ad"><input type="checkbox" id="print-ad" name="print-ad" onchange="oopm.checkbox(this)"> Print Ad</label></li>
      <li><label for="select-web-ad"><input type="checkbox" id="web-ad" name="web-ad" onchange="oopm.checkbox(this)"> Web Ad</label></li>
      <li><label for="select-new-collateral"><input type="checkbox" id="new-collateral" name="new-collateral" onchange="oopm.checkbox(this)"> Collateral Piece(s)</label></li>
      <li><label for="select-email-blast"><input type="checkbox" id="email-blast" name="email-blast" onchange="oopm.checkbox(this)"> Email Blast</label></li>
      <li><label for="select-web-change"><input type="checkbox" id="web-change" name="web-change" onchange="oopm.checkbox(this)"> Website Change</label></li>
    </ul> 
    
    <?php include '_assets/inc/_print_form.inc.php'; ?>
    <?php include '_assets/inc/_web_form.inc.php'; ?> 
    <?php include '_assets/inc/_collateral_form.inc.php'; ?>
    <?php include '_assets/inc/_email_form.inc.php'; ?>
    <?php include '_assets/inc/_site_form.inc.php'; ?>

    <div class="global"><!-- Hidden initially -->
      <p class="align-center"><input type="submit" value="Submit"></p>
    </div><!-- /.global -->
  </form>
  <?php else :?>
    <?php include '_assets/inc/_success_form.inc.php'; ?>  
  <?php endif;?>
</div><!-- /#page -->

<script src="http://ajax.googleapis.com/ajax/libs/chrome-frame/1/CFInstall.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
<script src="_assets/js/script.js"></script>
</body>
</html>