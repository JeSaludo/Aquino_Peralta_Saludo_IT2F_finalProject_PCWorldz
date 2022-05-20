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
<?php
echo '<div class="form-body">';
echo '<div class="website-logo">';
echo '<a href="index.php">';
echo '<div class="logo">';
echo '<img class="logo-size" src="images/logo-footer.png" alt="">';
echo '</div>';
echo '</a>';
echo '</div>';
echo '<div class="row">';
echo '<div class="img-holder">';
echo '<div class="bg"></div>';
echo '<div class="info-holder">';
echo '<img src="images/intro.png" alt="">';
echo '</div>';
echo '</div>';
echo '<div class="form-holder">';
echo '<div class="form-content">';
echo '<div class="form-items">';
echo '<h3>Welcome to PC Worldz!</h3>';
echo '<p>Buy and build your very own gaming PC right now with PC Worldz.</p>';
echo '<div class="page-links">';
echo '<a href="index.php" class="active">Login</a><a href="register.php">Register</a>';
echo '</div>';
echo '<form method="POST">';
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
echo '<input class="form-control" type="text" name="form_username" placeholder="E-mail Address" required>';
echo '<input class="form-control" type="password" name="form_password" placeholder="Password" required>';
echo '<div class="form-button">';
echo '<button id="submit" type="submit" class="ibtn" name="login_button" >Login</button> <a href="forget.php">Forget password?</a>';
echo '</div>';
echo '</form>';
echo '<div class="other-links">';
echo '<span>Or login with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
?>
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>