var MinPriceSlider=document.getElementById("filter-price-min");
let MaxPriceSlider=document.getElementById("filter-price-max");

let MinPrice=document.getElementById("filter-price-min-output");
let MaxPrice=document.getElementById("filter-price-max-output");

MinPrice.innerHTML=MinPriceSlider.value;
MaxPrice.innerHTML=MaxPriceSlider.value;

MinPriceSlider.oninput=function(){
    MinPrice.innerHTML=this.value;
}
MaxPriceSlider.oninput=function(){
    MaxPrice.innerHTML=this.value;
}
console.log(MinPriceSlider.value);
console.log(MinPrice.value);