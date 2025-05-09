<?php
$level = './';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once './elements/head.php'; ?>
    <title>My Hobbies</title>
</head>

<body>
    <div id="preloader"></div>
    <div class="container">
        <?php require_once './elements/header.php'; ?>
        <div class="seperate"></div>
        <div class="allWrapperDetails">
            <!--1.certificate: ielts, coursera, ameb,  -->
            <!-- 2.prizes: 2piano, 2chemistry , 1it-->
            <div class="lineAndTitleWrapper">
                <div class="lineNoTitle"></div>
                <div class="aboutMeTitleWrapper">
                    <h1 class="aboutMeTitleMain">My hobbies</h1>
                </div>
                <div class="lineNoTitle"></div>
            </div>
            <button id="hobbyOne" class="buttonHobbies"><i class="fa-solid fa-chevron-down"></i></button>
            <div class="CertificateNumberWrapper">
                <h1 class="CertificateNumberMain">Coding</h1>
            </div>
            <div class="descriptionHobbies" id="hobbyFirst">
                <p class="descriptionActivities">
                    Coding used to be part of my day. The interest began when I started my journey in high school. My family came to the final decision by making a turn from chemistry to Information Technology for better pursuing my career in the future.
                </p>
                <p class="descriptionActivities">
                    At first, I learned programming language Python as a beginning.
                </p>
                <!-- Image of coding python, especially filming python code... -->
                <p class="descriptionActivities">
                    After a period of 3 months, I started learning Competitive Programming, as know as CP, for having knowledge of basic and enhanced algorithms. I joined a CP class, hosted by Mr Hung for my class, and learned programming language C++;
                </p>
                <!-- Images of studying in CP class (first time in IT room) -->
                <div class="imageStorageNoJSWrapper">
                    <div class="imageOnlyNoJSWrapper" style="width:100%; flex: 1;">
                        <img src="./images/ITroom.jpg" class="imageOnlyNoJSMain" style="cursor: pointer;">
                    </div>
                    <div class="imageOnlyNoJSWrapper" style="width:100%; flex: 1;">
                        <img src="./images/ITroom2.jpg" class="imageOnlyNoJSMain" style="cursor: pointer;">
                    </div>
                </div>
                <div class="popUp">
                    <div class="popup">
                        <span class="close"><i class="fa-solid fa-xmark"></i></span>
                        <img src="" class="popUpImage">
                    </div>
                </div>
                <p class="descriptionActivities">
                    To be honest, that months were also a memorable time for me: Trying to learn as much as possible to get IT prizes as high as possible, Being passionate to this subject, buying keyboard as a motivation and better learning,sticking to my laptop and the IT room...
                </p>
                <div class="imageStorageNoJSWrapper">
                    <div class="imageOnlyNoJSWrapper">
                        <img src="./images/ITroom3.jpg" class="imageOnlyNoJSMain">
                    </div>
                    <div class="imageOnlyNoJSWrapper">
                        <img src="./images/ITroom4.jpg" class="imageOnlyNoJSMain">
                    </div>
                    <div class="imageOnlyNoJSWrapper">
                        <img src="./images/ITroom5.jpg" class="imageOnlyNoJSMain">
                    </div>
                    <div class="imageOnlyNoJSWrapper">
                        <img src="./images/ITroom6.jpg" class="imageOnlyNoJSMain">
                    </div>
                    <div class="imageOnlyNoJSWrapper">
                        <img src="./images/ITroom9.jpg" class="imageOnlyNoJSMain">
                    </div>
                </div>
                <div class="videosWrapper">
                    <div class="onlyVideoWrapper">
                        <video src="./images/ITroom7.mp4" class="onlyVideoMain" controls="" type="video/mp4"></video>
                    </div>
                    <div class="onlyVideoWrapper">
                        <video src="./images/ITroom8.mp4" class="onlyVideoMain" controls="" type="video/mp4"></video>
                    </div>
                </div>
                <p class="descriptionActivities">
                    I still remembered that I successfully proposed my mother to participate in a coding competition in Hanoi. In there, I met a lot of people, experienced a bunch of new feelings. Although the result I received was not my expectation, at least I connected to a lot of people and had more experience.
                </p>
                <p class="descriptionActivities">
                    The competition was held by VNU - UET national university, about 2000 IT students took part in the competition.
                </p>
                <div class="imageStorageNoJSWrapper">
                    <div class="imageOnlyNoJSWrapper">
                        <img src="./images/ITroom10.jpg" class="imageOnlyNoJSMain">
                    </div>
                    <div class="imageOnlyNoJSWrapper">
                        <img src="./images/ITroom11.jpg" class="imageOnlyNoJSMain">
                    </div>
                    <div class="imageOnlyNoJSWrapper">
                        <img src="./images/ITroom12.jpg" class="imageOnlyNoJSMain">
                    </div>
                    <div class="imageOnlyNoJSWrapper">
                        <img src="./images/ITroom13.jpg" class="imageOnlyNoJSMain">
                    </div>
                    <div class="imageOnlyNoJSWrapper">
                        <img src="./images/ITroom14.jpg" class="imageOnlyNoJSMain">
                    </div>
                </div>
            </div>
            <button id="hobbyTwo" class="buttonHobbies"><i class="fa-solid fa-chevron-down"></i></button>
            <div class="CertificateNumberWrapper">
                <h1 class="CertificateNumberMain">Piano</h1>
            </div>
            <div class="descriptionHobbies" id="hobbySecond">
                <p class="descriptionActivities">
                    The hobby began very early, about 10 to 11 years ago. I saw a guy in my favorite movie (earth's hero).He is so cool.Therefore, I proposed my mother to allow me to learn piano.
                </p>
                <p class="descriptionActivities">
                    During the time, I primarily learned classical music to enhance my technique. I also picked up some modern music in piano
                </p>
                <p class="descriptionActivities">
                    After a period of about 6 years of learning, piano formed root in my heart as a hobby and also a friend to relax.
                </p>
            </div>
            <button id="hobbyThree" class="buttonHobbies"><i class="fa-solid fa-chevron-down"></i></button>
            <div class="CertificateNumberWrapper">
                <h1 class="CertificateNumberMain">Playing football</h1>
            </div>
            <div class="descriptionHobbies" id="hobbyThird">
                <p class="descriptionActivities">
                    Football is one of my favorite hobby when I was a kid. I also used to play a popular football game: DLS from 2018 to 2022.
                    <!-- Maybe a pic from DLS games play and also video from youtube channel -->
                </p>
                <p class="descriptionActivities">
                    Up to now, I also join playing football with my friend when I am free. Each time my class football team participates in annual football tournament hosted by my school
                    <!-- football pictures and video -->
                </p>
            </div>
        </div>
    </div>
    <?php require_once './elements/script.php'; ?>
</body>

</html>