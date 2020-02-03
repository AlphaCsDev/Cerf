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
        $('.AddTo').click(function () {
            var CommType = $("#CommType").val();
            var Brand = $('#Brand').val();
            var Model = $("#Model").val();
            var Power = $("#Power").val();
            var FullName = $("#FullName").val();
            var Disc = $("#Disc").val();
            var Price = $("#Price").val();
            var Image = $("#Image").val();
            var Count = $("#Count").val();
            var Charactristic = $("#Characteristic").val();
            if(/*CommType && Brand && Model  && FullName && Price &&*/ Image/* && Count && Charactristic*/){
            $.ajax({
                type: "GET",
                url: "PHP/admin.php",
                data: {
                    "CommType": CommType,
                    "Brand": Brand,
                    "Model": Model,
                    "Power": Power,
                    "FullName": FullName,
                    "Disc": Disc,
                    "Price": Price,
                    "Image": Image,
                    "Count": Count,
                    "Charactristic": Charactristic,
                    "access" : 1

                },
                dataType: "text",
                success(data) {
                    alert(data);
                }
            });}
        })
    });
