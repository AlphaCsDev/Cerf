var cart = {};
function AddToCart() {
    var id = $(this).attr("id");
    if (cart[id] === undefined) {
        cart[id] = 1;
    }
    else {
        cart[id]++;
    }
    SaveCart();
}
function SaveCart() {
    var out = "";
    var d = new Date();
    var date = d.getFullYear() + "-" + d.getMonth() + 1 + "-" + d.getDate() + " " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();
    for (var i in cart) {
        out += i + "----" + cart[i];
    }
    $.ajax({
        type: "GET",
        url: "PHP/BuyCart.php",
        dataType: "text",
        data: {
            'Id': i,
            'Count': cart[i],
            'DateTime': date
        },
        success(data) {
            
            if(data){
                alert(data);
            }
            $('.modal-success').slideDown();
            setTimeout(() => {        
            $('.modal-success').slideUp(1500);
            }, 1000);
        }
    });
}

$(".close").click(function () {
    var id = $(this).attr("id");
    $('.modal-confirm-cart').show();
    $(".DeleteFrom").bind("click", function () {
        console.log(id);
        $.ajax({
            type: "GET",
            url: "PHP/BuyCart.php",
            dataType: "text",
            data: {
                'Id': id
            },
            success() {
                document.location.href = "account.php";
            }
        });
        $('.CloseConfirm').click(function () {
            $('.modal-confirm-cart').hide();
        })
    })
});
$(".modal-close").click(function () {
    $(".modal").hide();
})

$(".buy").bind("click", AddToCart);

$('.toggleAccount').click(function () {
    $('.dropAcc').toggle(500,function () {
        $('.dropOrder').show(500);
    });

})
$('.toggleOrder').click(function () {
    $('.dropOrder').toggle(500,function () {
        $('.dropAcc').show(500);
    });

})
$('#confirm-order-address').click(function () {
    $('.DropAddress').toggle();
    $('.AddressType').click(function () {
        $('#confirm-order-address').val($(this).attr("data-id"));

    })
})
$('#confirm-order-delivery').click(function () {
    $('.DropDelivery').toggle(500);
    $('.DeliveryType').click(function () {
        $('#confirm-order-delivery').val($(this).attr("data-id"));
        
    })
})
$('.SendAddress').click(function () {
    var address = $('#AddressDel').val();
    if (address == "" || (address.length < 5)) { return }
    $.ajax({
        type: "GET",
        url: "PHP/AddressAndNumber.php",
        data: { "address": address },
        dataType: "text",
        success(data) {
        }
    });
    
})
$('.SendNumber').click(function () {
    var number = $('#TelNumber').val();
    if (number == "" || (number.length < 5)){return}
        $.ajax({
            type: "GET",
            url: "PHP/AddressAndNumber.php",
            data: { "number": number},
            dataType: "text",
            success(data) {
            }
        });
})
$('.orderM').click(function () {
    var idOrder = $(this).attr("data-id");
    var ConOrder = $('.modal-confirm-order');
    ConOrder.show();
    $.ajax({
        type: "GET",
        url: "PHP/AddressAndNumber.php",
        data: { "idOrder": idOrder },
        dataType: "text",
        success: function (response) {
            $('.confirm-order-price').text(response + " ГРН");
        }
    });
})