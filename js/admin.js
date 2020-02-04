$(document).ready(function () {
    $('.btn').bind("click", function () {
        var datas = $(this).attr("data-id");
        console.log(datas);
        $.ajax({
            type: "GET",
            url: "PHP/admin.php",
            dataType: "html",
            data: {
                "data": datas
            },
            success(data) {
                $(".s").html(data);
            }
        });
    })
});
