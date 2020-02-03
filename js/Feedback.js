$('.SendModal').bind("click", function () {
    var error = $('.Error');   
    var Name    = $("#request-name").val();
    var Email   = $("#request-email").val();
    var Comment = $("#request-comment").val();
    var Reg = /\w+@\w+\.\w+/;
    error.text("");
    if (Name == "" || (Name.length < 3)) {
        error.text("Введіть ваше ім'я");
        return false;
    }
    else if (Email == "" || !(Reg.test(Email)) || (Email.length < 5)) {
        error.text("Введіть вашу пошту");
        return false;
    }
    else if (Comment == "" || Comment.lenght>500) {
        error.text("Введіть повідомлення");
        return false;
    }
    error.text("");
    $.ajax({
        url: "PHP/Feedback.php",
        type: "POST",
        dataType: "text",
        data: {
            'name': Name,
            'email': Email,
            'comment': Comment
        },
        beforeSend: function () {
            $('.SendModal').prop("disabled", true);
            error.text("");
        },
        success(data) {
                error.text(data.message);
                $('.modal-form').hide();

        }
    });
});