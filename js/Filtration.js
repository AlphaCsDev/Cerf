$(document).ready(ShowByPrice);

$('#FilterBut').bind("click", ShowByPrice);

$('#filter-price-min').bind("change", ShowByPrice);
$('#filter-price-max').bind("change", ShowByPrice);
function ShowByPrice() {
    var MinPrice = $("#filter-price-min").val();
    var MaxPrice = $("#filter-price-max").val();
    $.ajax({
        type: "GET",
        url: "PHP/filter.php",
        data: {
            "priceMin": MinPrice,
            "priceMax": MaxPrice
        },
        dataType: "html",
        success: function (response) {
            $(".catalog-items").html(response);
        }
    });

};
/*function ShowByBrand() {
    var check = $(".filter-input-checkbox").val;
    $.ajax({
        type: "method",
        url: "url",
        data: "data",
        dataType: "dataType",
        success: function (response) {
            
        }
    });
}*/
    $(".sort-to-down").bind("click", function () {
        $.ajax({
            type    : "GET",
            url     : "PHP/filter.php",
            data    : {
                "Prices": "$MinPrice = $_GET['priceMin'];$MaxPrice   = $_GET['priceMax'];",
                "Low": "SELECT * FROM `commodity` WHERE (`Price` >= '$MinPrice') AND (`Price` <= '$MaxPrice') ORDER BY Price DESC",
            },
            dataType: "html",
            success: function (response) {
                $(".catalog-items").html(response);
            }
        });
    });
    $(".sort-to-high").bind("click", function () {
        $.ajax({
            type     : "GET",
            url      : "PHP/filter.php",
            data     : {
                "High": "SELECT * FROM `commodity` WHERE (`Price` >= '$MinPrice') AND (`Price` <= '$MaxPrice') ORDER BY Price ASC"
            },
            dataType: "html",
            success: function (response) {
                $(".catalog-items").html(response);
        }
    });

});