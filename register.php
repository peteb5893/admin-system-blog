<?php 
    require("config.php");
    if(!empty($_POST)) 
    { 
        // Ensure that the user fills out fields 
        if(empty($_POST['username'])) 
        { die("Please enter a username."); } 
        if(empty($_POST['password'])) 
        { die("Please enter a password."); } 
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) 
        { die("Invalid E-Mail Address"); } 
         
        // Check if the username is already taken
        $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                username = :username 
        "; 
        $query_params = array( ':username' => $_POST['username'] ); 
        try { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
        $row = $stmt->fetch(); 
        if($row){ die("This username is already in use"); } 
        $query = " 
            SELECT 
                1 
            FROM users 
            WHERE 
                email = :email 
        "; 
        $query_params = array( 
            ':email' => $_POST['email'] 
        ); 
        try { 
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage());} 
        $row = $stmt->fetch(); 
        if($row){ die("This email address is already registered"); } 
         
        // Add row to database 
        $query = " 
            INSERT INTO users ( 
                username, 
                password, 
                salt, 
                email 
            ) VALUES ( 
                :username, 
                :password, 
                :salt, 
                :email 
            ) 
        "; 
         
        // Security measures
        $salt = dechex(mt_rand(0, 2147483647)) . dechex(mt_rand(0, 2147483647)); 
        $password = hash('sha256', $_POST['password'] . $salt); 
        for($round = 0; $round < 65536; $round++){ $password = hash('sha256', $password . $salt); } 
        $query_params = array( 
            ':username' => $_POST['username'], 
            ':password' => $password, 
            ':salt' => $salt, 
            ':email' => $_POST['email'] 
        ); 
        try {  
            $stmt = $db->prepare($query); 
            $result = $stmt->execute($query_params); 
        } 
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); } 
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
    <title>Register</title>

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
                            <li class="dropdown">
                                <a class="dropdown-toggle" href="#" data-toggle="dropdown">Log In <strong class="caret"></strong></a>
                                <div class="dropdown-menu">
                                    <form class="form-login" action="index.php" method="post"> 
                                        <h1 class="text-center">Log In</h1>
                                            <p>
                                              <label class="sr-only">Username</label>
                                              <input type="text" name="username" placeholder="Username" class="form-control" required autofocus value="<?php echo $submitted_username;?>">
                                            </p>
                                            <p>
                                              <label class="sr-only">Password</label>
                                              <input type="password" name="password" placeholder="Password" class="form-control" required>
                                            </p>
                                            <p class="checkbox">
                                              <label><input type="checkbox">Remember Me</label>
                                            </p>
                                            <button type="submit" class="btn btn-primary btn-block">Log In</button>
                                    </form> 
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <form class="form-register" action="register.php" method="post">
                    <h1 class="text-center">Register</h1>
                    <p>
                      <label class="sr-only">Username</label>
                      <input type="text" name="username" placeholder="Username" class="form-control" required autofocus>
                    </p>
                    <p>
                      <label class="sr-only">Email Address</label>
                      <input type="email" name="email" placeholder="Email Address" class="form-control" required>
                    </p>
                    <p>
                      <label class="sr-only">Password</label>
                      <input type="password" name="password" placeholder="Password" class="form-control" required>
                    </p>
                
                    <button type="submit" class="btn btn-primary btn-block">Register</button>
                  </form>
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