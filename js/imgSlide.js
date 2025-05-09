// image container
let swipeRightWrapper = document.getElementById("swipeRightWrapper");
let swipeLeftWrapper = document.getElementById("swipeLeftWrapper");
let imageMainForImages = document.getElementById("imageMainForImages");
let tmp = 0;

let arrImgLink = ['./images/myImages0.jpg', './images/myImages1.jpg', './images/myImages2.jpg','./images/myImages3.jpg','./images/myImages4.jpg'];

let length = arrImgLink.length;
swipeRightWrapper.addEventListener("click", function () {
    console.log(tmp);
    tmp++;
    tmp %= length;
    imageMainForImages.src = arrImgLink[tmp];
});

swipeLeftWrapper.addEventListener("click", function () {
    console.log(tmp);
    tmp = (!tmp ? length - 1 : tmp - 1);
    imageMainForImages.src = arrImgLink[tmp];
});

function loopSwipe() {
    imageMainForImages.src = arrImgLink[tmp];
    tmp++;
    tmp %= length;
}

setInterval(loopSwipe, 2500);