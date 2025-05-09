<?php
    $level = './';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once './elements/head.php'; ?>
    <title>Contact me</title>
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
                    <h1 class="aboutMeTitleMain">My Contact</h1>
                </div>
                <div class="lineNoTitle"></div>
            </div>
            <div class="allContactWrapper">
                <div class="firstHalfContact">
                    <div id="phoneNumberWrapper">
                        <i class="fa-solid fa-phone" id="phone"></i>
                        <h1 class="phoneMain">Phone : +8449566286</h1>
                    </div>
                    <div id="instaWrapper">
                        <i class="fa-brands fa-instagram" id="insta"></i>
                        <h1 class="instaMain">Instagram: <a href="https://www.instagram.com/phujk32/" id="phujk32">phujk32</a></h1>
                    </div>
                    <div id="linkedinWrapper">
                        <i class="fa-brands fa-linkedin-in" id="linkedin"></i>
                        <h1 class="linkedinMain">Linkedin: <a href="https://www.linkedin.com/" id="donguyenphu">donguyenphu</a></h1>
                    </div>
                </div>
                <div class="secondHalfContact">
                    <div id="addressWrapper">
                        <!-- cam xanh la cay -->
                        <i class="fa-solid fa-map-location-dot" id="map"></i>
                        <h1 class="mapMain">Address: 64 Ham Long, Nui Deo, Thuy Nguyen, Hai Phong</h1>
                    </div>
                    <div id="facebookWrapper">
                        <i class="fa-brands fa-meta" id="meta"></i>
                        <h1 class="facebookMain">Facebook: <a href="https://www.facebook.com/bestofsuy/" id="NguyenPhu">Nguyen Phu</a></h1>
                    </div>
                    <div id="xWrapper">
                        <i class="fa-brands fa-x-twitter" id="x"></i>
                        <h1 class="xMain">X: <a href="https://x.com/DoNguyenPhu" id="DoNguyenPhu">Do Nguyen Phu</a></h1>
                    </div>
                </div>
            </div>
            <!-- contact: sdt, fb,in,lin,x,ad -->
            <div class="googleMap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3726.891451853306!2d106.67795077417374!3d20.91668638070472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314a7bfbc27bc233%3A0x89f213ed1023838c!2zSGFtIExvbmcgX3Ro4buLIHRy4bqlbiBuw7ppIMSRw6hvX2h1eeG7h24gdGjhu6d5IG5ndXnDqm5fdHAgaOG6o2kgcGjDsm5n!5e0!3m2!1svi!2s!4v1731950663163!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" id="googleMapMain"></iframe>
            </div>
        </div>
    </div>
    <?php require_once './elements/script.php';?>
</body>
</html>