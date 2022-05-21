<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php
        echo '<title>PC WORLDZ</title>';
        ?>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme5.css">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <?php
            echo '<a href="index.php">';
            ?>
                <div class="logo">
                 <?php
                echo '<img class="logo-size" src="images/logo-light.svg" alt="">';
                ?>
                </div>
             <?php
            echo '</a>';
            ?>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                 <?php
                echo '<img src="images/FORGOT PASSWORD.png" alt="">';
                ?>
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <?php
                        echo '<h3>Password Reset</h3>';
                        echo '<p>To reset your password, enter the email address you use to sign in to iofrm</p>';
                        echo '<form>';
                        echo '<input class="form-control" type="text" name="username" placeholder="E-mail Address" required>';
                        ?>
                            <div class="form-button full-width">
                                <?php
                                echo '<button id="submit" type="submit" class="ibtn btn-forget">Send Reset Link</button>';
                                ?>
                            </div>
                  <?php
                    echo '</form>';
                    ?>
                    </div>
                    <div class="form-sent">
                        <div class="tick-holder">
                            <div class="tick-icon"></div>
                        </div>
                            <?php
                            echo '<h3>Password link sent</h3>';
                            echo '<p>Please check your inbox info@pcworlds.com</p>';
                            ?>
                        <div class="info-holder">
                            <?php
                            echo '<span>Unsure if that email address was correct?</span> <a href="#">We can help</a>.';
                            ?>
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