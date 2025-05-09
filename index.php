<?php
    $level = './';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once './elements/head.php'; ?>
    <title>PORFOLIO-MAIN PAGE</title>
</head>
<body>
    <div id="preloader"></div>
    <div class="container">
        <?php require_once './elements/header.php'; ?>
        <div class="seperate"></div>
        <div class="imageWrapperIndex">
            <img src="./images/myImages0.jpg" alt="avatar" class="image">
        </div>
        <div class="socialWrapper">
            <div class="socialElementWrapper">
                <a href="https://www.facebook.com/bestofsuy/" class="social"><i class="fa-brands fa-square-facebook"></i></a>
            </div>
            <div class="socialElementWrapper">
                <a href="https://twitter.com/" class="social"><i class="fa-brands fa-square-x-twitter"></i></a>
            </div>
            <div class="socialElementWrapper">
                <a href="https://www.instagram.com/phujk32/" class="social"><i class="fa-brands fa-square-instagram"></i></a>
            </div>
            <div class="socialElementWrapper">
                <a href="https://www.linkedin.com/" class="social"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </div>
    <?php require_once './elements/script.php';?>
</body>
</html>