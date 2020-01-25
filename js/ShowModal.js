//modal[0]= Форма feedback
//modal[1]= Карта
//modal[2]= Реєстраія
//modal[3]= Вхід
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
    modal[modal.length - 4].style.display = 'block';
    }
}
if (buttonCredit) {
buttonCredit.onclick = function () {
    NotToOpen();
    modal[modal.length - 4].style.display = 'block';
    }
}
if (map) {
map.onclick = function ShowMap() {
    NotToOpen();
    modal[modal.length - 3].style.display = 'block';
    }
}
if (SignUp[0]) {
SignUp[0].onclick = function () {
    NotToOpen();
    modal[modal.length - 2].style.display = 'block';
    }
}


if (LogIn[0]) {
LogIn[0].onclick = function () {
    NotToOpen();
    modal[modal.length-1].style.display = 'block';
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
