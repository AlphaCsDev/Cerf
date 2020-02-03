var Min = $("#filter-price-min").val();
var Max = $("#filter-price-max").val();

var datas = {
    "priceMin": Min,
    "priceMax": Max,
};
function s(Sel, Que) {
    datas = {
        "priceMin": Min,
        "priceMax": Max,
        [Sel]: Que
    }
}

function Show(datas) {
    $.ajax({
        type: "GET",
        url: "PHP/filter.php",
        data: datas,
        dataType: "html",
        success(data) {
            $(".catalog-items").html(data);
        }
    });
    
};

    $('#filter-price-min').bind("change", ShowByPrice);
    $('#filter-price-max').bind("change", ShowByPrice,); 
    if($(location).attr('search')){
        var link = $(location).attr('search');
    }
    else link =1;

function ShowByPrice() { 
    $(".filter-input-checkbox").prop("checked", false);
    $(".filter-input-radio").prop("checked", false);       
        var Min = $("#filter-price-min").val();
        var Max = $("#filter-price-max").val();
        var datas = {
            "priceMin": Min,
            "priceMax": Max,
            "Page"    : link
   
        };
        
    setTimeout(() => {
        $(".buy").bind("click", AddToCart);
    }, 100);
            $.ajax({
                type: "GET",
                url: "PHP/filter.php",
                data: datas,
                dataType: "html",
                success(data) {
                    $(".catalog-items").html(data);
                }
            });
            $('.sort-price').bind("click", function () {
                datas = {
                    "priceMin": Min,
                    "priceMax": Max,
                    "ByPrice": "Order By Price"
                }
                Show(datas);
            });
            $('.sort-brand').bind("click", function () {
                datas = {
                    "priceMin": Min,
                    "priceMax": Max,
                    "ByBrand": "Order By Brand"
                }
                Show(datas);

            });
            $('.sort-type').bind("click", function () {
                datas = {
                    "priceMin"  : Min,
                    "priceMax"  : Max,
                    "ByType"    : "Order By PowerType"
                }
                Show(datas);                
            });

 
        }
           
$(".filter-input-radio").bind("click", function () {
    if ($(this).prop("checked", true)) {
        var radio = $(this).attr("data-id");
        datas = {
            "priceMin": Min,
            "priceMax": Max,
            "radio": radio
        }
        Show(datas);
    }
    $(".filter-input-checkbox").prop("checked", false);
    $("#filter-price-min").val(0);
    $("#filter-price-min-output").html(0);

    $("#filter-price-max").val(31000);
    $("#filter-price-max-output").html(31000);
});

$(".filter-input-checkbox").bind("click", function () {
    $(".filter-input-radio").prop("checked", false);

    $("#filter-price-min").val(0);
    $("#filter-price-min-output").html(0);

    $("#filter-price-max").val(31000);
    $("#filter-price-max-output").html(31000);
    var checked = ($(".filter-input-checkbox:checkbox:checked"));
    var CheckboxesUsed = [];
    checked.each(function name() {
        CheckboxesUsed.push($(this).attr("name"));
    })
    console.log(CheckboxesUsed);
    datas = {
        "priceMin": Min,
        "priceMax": Max,
        "brand": CheckboxesUsed
    }
    Show(datas);
});
 
$(document).ready(function () {

    ShowByPrice();
$(".sort-to-down").bind("click", function() {s("Low","DESC");});
$(".sort-to-high").bind("click", function() {s("High","ASC");});

});
