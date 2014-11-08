<?php if(!class_exists('raintpl')){exit;}?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>HCC: House Control Center</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="./templates/hcc/././css/bootstrap.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
 <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      input {
        height: 25px;
      }
      .ipAddress{
        float: right;
        margin-right: 60px;
      }
      #infoConso {
        margin-top: 44px;
      }
    </style>
    <link href="./templates/hcc/././css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="./templates/hcc/././ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="./templates/hcc/././ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="./templates/hcc/././ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="./templates/hcc/././ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="./templates/hcc/././ico/favicon.png">
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>

          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="index.php">Accueil</a></li>
              <li><a href="settings.php">Configuration</a></li>
              <li><a href="http://blog.idleman.fr">A propos</a></li>
            </ul>
			<?php if( !isset($myUser) ){ ?>
            <form action="action.php?action=LOGIN" method="POST" class="navbar-form pull-right">
              <input class="span2" name="email" type="text" placeholder="Email">
              <input class="span2"  name="password" type="password" placeholder="Password">
              <button type="submit" class="btn">Connexion</button>
            </form>
			<?php }else{ ?>
			<div class="navbar-form pull-right">
			<a href="action.php?action=DISCONNECT" class="btn">D&eacute;connexion</a>
			</div>
			<?php } ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">