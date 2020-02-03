var cart = {};
var decline = $('.modal-confirm-cart');

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
            /*alert(data);*/
            $('.modal-success').show(1000);
            $('.modal-success').hide(1000);
        }
    });
}
$('.order').click(function () {
    $('.modal-confirm-order').show();
})
$(".close").click(function () {
    var id = $(this).attr("id");
    console.log(id);
    decline.show();
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
    })
});
$(".CloseConfirm").click(function name(params) {
    $(".modal-confirm-cart").hide();
})

$(".buy").bind("click", AddToCart);