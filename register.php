<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme5.css">
</head>
<body>
<?php
echo '<div class="form-body">';
echo '<div class="website-logo">';
echo '<a href="index.php">';
echo '<div class="logo">';
echo '<img class="logo-size" src="images/logo-light.svg" alt="">';
echo '</div>';
echo '</a>';
echo '</div>';
echo '<div class="row">';
echo '<div class="img-holder">';
echo '<div class="bg"></div>';
echo '<div class="info-holder">';
echo '<img src="images/REGISTER.png" alt="">';
echo '</div>';
echo '</div>';
echo '<div class="form-holder">';
echo '<div class="form-content">';
echo '<div class="form-items">';
echo '<h3>Register now!</h3>';
echo '<p>Create your very own account in PC Worldz.</p>';
echo '<div class="page-links">';
echo '<a href="index.php">Login</a><a href="register5.php" class="active">Register</a>';
echo '</div>';
echo '<form>';
echo '<input class="form-control" type="text" name="name" placeholder="Full Name" required>';
echo '<input class="form-control" type="email" name="email" placeholder="E-mail Address" required>';
echo '<input class="form-control" type="password" name="password" placeholder="Password" required>';
echo '<div class="form-button">';
echo '<button id="submit" type="submit" class="ibtn">Register</button>';
echo '</div>';
echo '</form>';
echo '<div class="other-links">';
echo '<span>Or register with</span><a href="#">Facebook</a><a href="#">Google</a><a href="#">Linkedin</a>';
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