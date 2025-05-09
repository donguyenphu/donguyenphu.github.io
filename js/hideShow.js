/// button hide and show
let firstHobby = document.getElementById("hobbyFirst");
let secondHobby = document.getElementById("hobbySecond");
let thirdHobby = document.getElementById("hobbyThird");
let hobbyOne = document.getElementById("hobbyOne");
let hobbyTwo = document.getElementById("hobbyTwo");
let hobbyThree = document.getElementById("hobbyThree");
let buttonHobbies = document.getElementsByClassName("buttonHobbies");
console.log(buttonHobbies);

hobbyOne.addEventListener('click', function () {
    if (firstHobby.style.display === 'none') {
        firstHobby.style.display = 'block';
        buttonHobbies[0].innerHTML = '<i class="fa-solid fa-chevron-down" id = "hobbyOne"></i>';
    }
    else {
        firstHobby.style.display = 'none';
        buttonHobbies[0].innerHTML = '<i class="fa-solid fa-chevron-up" id = "hobbyOne"></i>';
    }
    
});
hobbyTwo.addEventListener('click', function () {
    if (secondHobby.style.display === 'none') {
        secondHobby.style.display = 'block';
        buttonHobbies[1].innerHTML = '<i class="fa-solid fa-chevron-down" id = "hobbyTwo"></i>';
    }
    else {
        secondHobby.style.display = 'none';
        buttonHobbies[1].innerHTML = '<i class="fa-solid fa-chevron-up" id = "hobbyTwo"></i>';
    }
});
hobbyThree.addEventListener('click', function () {
    if (thirdHobby.style.display === 'none') {
        thirdHobby.style.display = 'block';
        buttonHobbies[2].innerHTML = '<i class="fa-solid fa-chevron-down" id = "hobbyThree"></i>';
    }
    else {
        thirdHobby.style.display = 'none';
        buttonHobbies[2].innerHTML = '<i class="fa-solid fa-chevron-up" id = "hobbyThree"></i>';
    }
});