
    $("#search").keyup(function (){
        if ($(location).attr('pathname') != "/catalog.php"){
            document.location.href = "catalog.php"
        }

        var Min = $("#filter-price-min").val();
        var Max = $("#filter-price-max").val();
        var search = $(this).val();
        console.log(search);
        $.ajax({
            type: "POST",
            url: "PHP/Search.php",
            data:{
                "priceMin": Min,
                "priceMax": Max,
                'search': search},
            dataType: "html",
            success(data) {
                $(".catalog-items").html(data);
                
            }
        });
    }); 

$('.city-arrow').click(function () {
    var arrow = $(this).attr("data-id");
    $('.modal-map').data("id", arrow);
    $('.modal-map[data-id ='+arrow+']').slideDown();


    


    $(".modal-close").click(function () {
        $(".modal").hide();
    })
});


    



 