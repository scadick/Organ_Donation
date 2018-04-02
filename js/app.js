$(document).foundation();
(function() {
"use strict";
// Nav
var navToggle = document.querySelector(".menu-icon");
var nav = document.querySelector("#mainNav");
var close = document.querySelector("#closeButton");
var show;
var resize = window.matchMedia("(min-width: 40em)");

widthCheck();

function navFix() {
if(nav.classList.contains("hide")) {
nav.classList.remove("hide");
show = "false";
}else if(nav.style.display == "none") {
nav.classList.add("navShow");
show = "true";
}else if(!nav.classList.contains("hide")){
nav.classList.add("hide");
show = "false";
}else if(nav.style.display == "block") {
nav.style.display == "none";
show = "false";
}
}

function closeFix() {
if(show == "true") {
nav.classList.remove("navShow");
show = "false";
}
}

function widthCheck() {
if(window.innerWidth < 640) {
nav.classList.remove("hide");
navToggle.removeEventListener('click', navFix, false);
close.removeEventListener('click', closeFix, false);
}else{
nav.classList.add("hide");
navToggle.addEventListener('click', navFix, false);
close.addEventListener('click', closeFix, false);
}
}

window.addEventListener('resize', widthCheck);

})();
