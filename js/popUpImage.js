let popUpImage = document.querySelector(".popUpImage");
let imageOnlyNoJSMain = document.querySelectorAll(".imageOnlyNoJSMain");
let popup = document.querySelector(".popup");
let closeUp = document.querySelector('.close');

imageOnlyNoJSMain.forEach(image => {
    image.onclick = () => {
        popup.style.display = 'block';
        popUpImage.src = image.getAttribute('src');
    }
});
closeUp.onclick = () => {
    popup.style.display = 'none';
}