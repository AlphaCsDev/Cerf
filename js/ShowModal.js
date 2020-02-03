var modal = document.getElementsByClassName("modal");

var map = document.getElementById("map");

var buttonClose = document.getElementsByClassName("modal-close");

var buttonModal = document.getElementById("OpenModal");
var buttonCredit = document.getElementById("OpenCredit");

var SignUp = document.getElementsByClassName("sign-up");
var LogIn = document.getElementsByClassName("sign-in");


if (buttonModal){
buttonModal.onclick = function () {
    NotToOpen();
    $('.modal-form').show();
    }
}
if (buttonCredit) {
buttonCredit.onclick = function () {
    NotToOpen();
    $('.modal-form').show();
    }
}
if (map) {
map.onclick = function ShowMap() {
    NotToOpen();
    $('.modal-map').show();
    }
}
if (SignUp[0]) {
SignUp[0].onclick = function () {
    NotToOpen();
    $('.modal-sign-up').show();
    }
}


if (LogIn[0]) {
LogIn[0].onclick = function () {
    NotToOpen();
    $('.modal-sign-in').show();
    }
}

for (var i = 0; i < modal.length; i++){
    buttonClose[i].onclick = NotToOpen;
}


function NotToOpen() {
    for (var i = 0; i < modal.length; i++) {
        modal[i].style.display='none';
    }
}
