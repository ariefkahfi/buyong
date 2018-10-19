<!DOCTYPE html>
<html lang="en">
<head>
<title>Pusri</title>
<link rel="shortcut icon" href="aset/foto/IDS.jpg">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="aset/bootstrap/css/bootstrap.min.css">
<?php
		include "bundle_css.php";
	?>

  <style>
  .container {
    
  }
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #E24F4F;
      padding:15px;
      bottom: 0px;
      color: white;
    }

    .navbar {
        margin-top: 10px;
        background-color: #E24F4F;

    }

    .navbar ul.nav li a {
        color: #fff;
    }

    .navbar ul.nav li a:hover {
        color: #555555;
        background-color: #E7E7E7;
        transition: 0.5s;
    }

    .footer {
        background-color:#E24F4F;
        padding: 10px;
        color: #fff;   
    }

    .h-divider{
         margin-top:5px;
         margin-bottom:5px;
         height:1px;
         width:100%;
         border-top:1px solid gray;
    }

    .panel .panel-heading .visimisi {
      background-color: #E24F4F;
      color: #fff;
    }

    .header .banner {
        width: 100%;
        margin-top: 30px;
    }
	
	btn {
	
	 margin-top:700px;
	}
	
</style>
</head>
<body>

<div class="container"> 
    <div class="header">
        <img title="PT. Pusri Indonesia"  class="img-responsive banner" src="aset/img/banner.png">
    </div>

    <nav class="navbar navbar-default"> 
        <ul class="nav navbar-nav">
            <li class=""><a href="index.php">Home</a></li>
            <li><a href="tampil.php">Data Infrastruktur</a></li>
            <li><a href="tentang.php">Tentang Pusri</a></li>
            <li><a href="loginadmin.php" target="_blank">Login Admin</a></li>
            
        </ul>
    </nav>