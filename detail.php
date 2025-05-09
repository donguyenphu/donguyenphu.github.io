<?php
    $level = './';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once './elements/head.php'; ?>
    <title>Personal Details</title>
</head>
<body>
    <div id="preloader"></div>
    <div class="container">
        <?php require_once './elements/header.php'; ?>
        <div class="seperate"></div>
        <div class="allWrapperDetails">
            <div class="lineAndTitleWrapper">
                <div class="lineNoTitle"></div>
                <div class="aboutMeTitleWrapper">
                    <h1 class="aboutMeTitleMain">Who am I?</h1>
                </div>
                <div class="lineNoTitle"></div>
            </div>
            <div class="informationWrapper">
                <div class="detailWrapper">
                    <div class="titleWrapper">
                        <div class="introWrapper">
                            <div class="symbolWrapper">
                                <i class="fa-solid fa-file-signature" id="name"></i>
                            </div>
                        </div>
                        <h1 class="introInfo">Name: </h1>
                        <h1 class="mainInfo">Do Nguyen Phu</h1>
                    </div>
                    <div class="titleWrapper">
                        <div class="introWrapper">
                            <div class="symbolWrapper">
                                <i class="fa-solid fa-cake-candles" id="birthdayCake"></i>
                            </div>
                        </div>
                        <h1 class="introInfo">Birth: </h1>
                        <h1 class="mainInfo">15/02/2008</h1>
                    </div>
                    <div class="titleWrapper">
                        <div class="introWrapper">
                            <div class="symbolWrapper">
                                <i class="fa-solid fa-school" id="school"></i>
                            </div>
                        </div>
                        <h1 class="introInfo">High school :</h1>
                        <a href="https://thptchuyentranphu.haiphong.edu.vn/homegd2" id="ctp">Tran Phu High School for the Gifted</a>
                    </div>
                    <div class="titleWrapper">
                        <div class="introWrapper">
                            <div class="symbolWrapper">
                                <i class="fa-solid fa-heart" id="heart"></i>
                            </div>
                        </div>
                        <h1 class="introInfo">Hobbies :</h1>
                        <h1 class="mainInfo">Programming, coding, football, piano</h1>
                    </div>
                    <div class="titleWrapper">
                        <div class="introWrapper">
                            <div class="symbolWrapper">
                                <i class="fa-brands fa-github" id="github"></i>
                            </div>
                        </div>
                        <h1 class="introInfo">Github :</h1>
                        <a href="https://github.com/donguyenphu" id="githubLink">
                            <div class="myGithubProject">
                                donguyenphu
                            </div>
                        </a>
                    </div>
                    <div class="titleWrapper">
                        <div class="introWrapper">
                            <div class="symbolWrapper">
                                <i class="fa-solid fa-book" id = "class"></i>
                            </div>
                        </div>
                        <h1 class="introInfo">Class :</h1>
                        <a href="https://www.facebook.com/profile.php?id=100094544850084" id="classLink">Information Technology</a>
                    </div>
                </div>
                <div class="imageWrapper">
                    <img src="./images/myImages0.jpg" class="imageMain" id = "imageMainForImages">
                    <button id="swipeLeftWrapper">
                        <i class="fa-solid fa-arrow-left" id = "swipeLeftMain"></i>
                    </button>
                    <button id="swipeRightWrapper">
                        <i class="fa-solid fa-arrow-right" id = "swipeRightMain"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php require_once './elements/script.php';?>
</body>
</html>