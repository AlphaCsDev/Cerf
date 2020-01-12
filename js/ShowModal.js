var modal       = document.getElementsByClassName("modal");
var map         = document.getElementById("map");
var bigMap      = document.getElementById("bigMap");
var buttonClose = document.getElementsByClassName("modal-close");
var buttonModal = document.getElementById("OpenModal");

buttonClose[1].onclick=function HideMap() {
    bigMap.style.display="none";
}
map.onclick = function ShowMap() {
    bigMap.style.display="block";
}
buttonModal.onclick =
function ShowModal() {
    modal[0].style.display = "block";
    console.log("cerf");
}

buttonClose[0].onclick = 
function CloseModal() {
    modal[0].style.display = "none";
    console.log("cerf");
}
