const burger = document.querySelector('.burger');
const navList = document.querySelector('.nav-list');
const statContainer = document.querySelector('.status-container');
const navContainer = document.querySelector('nav-container');

burger.addEventListener('click', () => {
    burger.classList.toggle('toggle');
    navList.classList.toggle('nav-active');
});

document.getElementById("img").onmouseenter = function() {mouseEnter()};
document.getElementById("img").onmouseleave = function() {mouseLeave()};
document.getElementById("img2").onmouseenter = function() {mouseEnter()};
document.getElementById("img2").onmouseleave = function() {mouseLeave()};


function mouseEnter() {
    document.getElementById("hover").style.display = "block";
    document.getElementById("hover2").style.display = "block";
}

function mouseLeave() {
    document.getElementById("hover").style.display = "none";
    document.getElementById("hover2").style.display = "none";
}

