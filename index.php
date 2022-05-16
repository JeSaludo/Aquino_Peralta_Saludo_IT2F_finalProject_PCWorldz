<?php 

SESSION_START();

$acc_username = "admin@dev.com";
$acc_password = "admin";

$url_add = "https://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
if(isset($_REQUEST['login_button']) === true){
	if($_REQUEST['form_username'] != $acc_username){
			header("Location: ".$url_add."?notexist");
	}
	else if($_REQUEST['form_username'] == $acc_username && $_REQUEST['form_password'] != $acc_password){
			header("Location: ".$url_add."?wrongpass");
	}
	else if($_REQUEST['form_username'] == $acc_username && $_REQUEST['form_password'] == $acc_password){
			header("Location: ".$url_add."?success");

			$_SESSION['ses_username'] = $acc_username;
			$_SESSION['ses_password'] = $acc_password;
			$_SESSION['ses_fullname'] = $acc_fullname;
			$_SESSION['ses_address'] = $acc_address;
			
	}
	
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PC Worldz</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme5.css">
    <link rel="icon" href="favicon.ico">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.php">
                <div class="logo">
                    <img class="logo-size" src="images/logo-footer.png" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="images/intro.png" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Welcome to PC Worldz!</h3>
                        <p>Buy and build your very own gaming PC right now with PC Worldz.</p>
                        <div class="page-links">
                            <a href="index.php" class="active">Login</a><a href="register.php">Register</a>
                        </div>
                        <form method="POST">
                        <?php
						if(isset($_REQUEST['notexist'])===true){
							echo "<div class='alert alert-danger' role='alert'> Username doest not exist... </div>";
						}
						else if(isset($_REQUEST['wrongpass']) ===true){
							echo "<div class='alert alert-warning' role='alert'> Incorrect Password... </div>";					
						}
						else if(isset($_REQUEST['success']) ===true){
							echo "<div class='alert alert-success' role='alert'> Redirecting... </div>";	
							header("Refresh: 5; url=home.php");			
						}
						else if(isset($_REQUEST['logout']) === true)
						{
							echo "<div class='alert alert-info' role='alert'> Thank you... </div>";	
						}
						?>
                        
                            <input class="form-control" type="text" name="form_username" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="form_password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn" name="login_button" >Login</button> <a href="forget.php">Forget password?</a>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>