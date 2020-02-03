var Delivery=document.getElementById("Delivery");
var ServiceDelivery=document.getElementById("service-delivery");

var Guarantee=document.getElementById("Guarantee");
var ServiceGuarantee=document.getElementById("service-guarantee");

var Credit=document.getElementById("Credit");
var ServiceCredit=document.getElementById("service-credit");

if(ServiceDelivery){
ServiceDelivery.style.display="block";
    ServiceGuarantee.style.display="none";
    ServiceCredit.style.display="none";
    

Delivery.onclick =function ShowDelivery(){
    ServiceDelivery.style.display="block";
    ServiceGuarantee.style.display="none";
    ServiceCredit.style.display="none";
}

Guarantee.onclick=function ShowGuarantee(){
    ServiceDelivery.style.display="none";
    ServiceGuarantee.style.display="block";
    ServiceCredit.style.display="none";
}

Credit.onclick  = function ShowCredit(){
    ServiceDelivery.style.display="none";
    ServiceGuarantee.style.display="none";
    ServiceCredit.style.display="block";
}
}
