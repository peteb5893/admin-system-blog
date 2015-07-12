<?php
    require("config.php");
    if(empty($_SESSION['user'])) 
    {
        header("Location: index.php");
        die("Redirecting to index.php"); 
    }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Page Title</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Own Styles-->
    <link href="css/styles.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body>

      <div class="navbar navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="navbar-brand">peterbennington.com</a>
            </div>

          <div class="collapse navbar-collapse navHeaderCollapse">            
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Home</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="posts.php">Posts</a></li>
              <li><a href="archive.php">Archive</a></li>
              <li><a href="about.php">About</a></li>
              <li><a href="#">Portfolio</a></li>
              <li><a href="#contact" data-toggle="modal">Contact Me</a></li>
              <li><a href="logout.php">Log Out</a></li>
            </ul>
          </div>
        </div>
      </div>









