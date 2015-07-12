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
    <title>Secret Home</title>

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
        <div class="container">
          
          <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="index.php" class="navbar-brand">peterbennington.com</a>

          <div class="collapse navbar-collapse navHeaderCollapse">            
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index.php">Home</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="#">About</a></li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Social Media <b class ="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="http://facebook.com/peter.bennington" target="_blank">Facebook</a></li>
                  <li><a href="http://twitter.com/peterbennington" target="_blank">Twitter</a></li>
                  <li><a href="http://instagram.com/petebennington" target="_blank">Instagram</a></li>
                </ul>
              </li>
              <li><a href="#">Portfolio</a></li>
              <li><a href="#contact" data-toggle="modal">Contact Me</a></li>
              <li><a href="logout.php">Log Out</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="jumbotron text-center">
          <h1>Hello, <?php echo htmlentities($_SESSION['user']['username'], ENT_QUOTES, 'UTF-8'); ?></h1>
          <h2>Welcome to the Secret Page</h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut nim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in prehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          </p>
          <a class="btn btn-default">Watch Now!</a>
          <a class="btn btn-info">Tweet It!</a>
        </div>
      </div>

      </div>


      <div class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
          <p class="navbar-text pull-left">Site Built by Peter Bennington</p>
          <a href="http://twitter.com/peterbennington" class="navbar-btn btn-info btn pull-right">Follow me on Twitter</a>
        </div>
      </div>

      <div class="modal fade" id="contact" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <form class="form-horizontal">
              <div class="modal-header">
                <h4>Contact Peter Bennington</h4>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label for="contact-name" class="col-lg-2 control-label">Name:</label>
                  <div class="col-lg-10">
                    <input type="text" class="form-control" id="contact-name" placeholder="Full Name">
                  </div>
                </div>
                <div class="form-group">
                  <label for="contact-email" class="col-lg-2 control-label">Email:</label>
                  <div class="col-lg-10">
                    <input type="email" class="form-control" id="contact-email" placeholder="you@example.com">
                  </div>
                </div>
                <div class="form-group">
                  <label for="contact-message" class="col-lg-2 control-label">Message:</label>
                  <div class="col-lg-10">
                    <textarea class="form-control" rows="8"></textarea>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                <button class="btn btn-primary" type="submit">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
  </body>
</html>