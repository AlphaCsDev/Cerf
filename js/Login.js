$(document).ready(function () {
 
var error = $('.Error');
error.text("");

$('#butSignUp').bind("click", (function () {
    error.text("");
    var name     = $("#sign-up-name")       .val();
    var surname  = $("#sign-up-surname")    .val();
    var nickname = $("#sign-up-nickname")   .val();
    var password = $("#sign-up-password")   .val();
    var email    = $("#sign-up-email")      .val();
    var Reg = /\w+@\w+\.\w+/;
    
    console.log(name.length);
    if (name == "" ||  (name.length<3) ) {
           error.text("Введіть ім'я довжиною від трьох символів");
           return false;
       }
    else if (surname == "" || (surname.length<3)) {
        error.text("Введіть прізвище довжиною від трьох символів");
           return false;
       }
    else if (nickname == "" || (nickname.length<3)) {
        error.text("Введіть нікнейм довжиною від трьох символів");
           return false;
       }
    else if (password == "" || (password.length<3)) {
        error.text("Введіть пароль довжиною від трьох символів");
           return false;
       }
    else if (email == "" || !(Reg.test(email)) || (email.length<5)) {
        error.text("Введіть пошту з символом @ та довжиною від п'яти символів");
           return false;
       }
    error.text("");

       $.ajax({
        url                 : "PHP/FormSignUp.php",
        type                : "POST",
        dataType            : "json",
        data: {
                'name'      : name,
                'surname'   : surname,
                'nickname'  : nickname,
                'password'  : password,
                'email'     : email
           },
           beforeSend:function() {
               $('.butSignUp').prop("disabled",true);
               error.text("");
           },         
           success (data) {
               if (!(data.status)) {
                   error.text(data.message);
                   $('.butSignUp').prop("disabled", true);
               }
               else{
               error.text(data.message);             
                $('.modal-sign-up').hide(200);
                $('.modal-sign-in').show(200);
                error.text("Увійдіть в аккаунт");                      
                return;                   
               }
           }
       });
}));
$('#butSignIn').bind("click", function () {
    error.text("");
    var login = $("#sign-in-nickname").val();
    var password = $("#sign-in-password").val();

    if (login == "") {
        error.text("Введіть нікнейм або пошту");
        return false;
    }
    else if (password == "") {
        error.text("Введіть пароль");
        return false;
    }
    error.text("");
    $.ajax({
        url: "PHP/FormSignIn.php",
        type: "POST",
        dataType: "json",
        data: {
            'nickname': login,
            'password': password
        },
        beforeSend: function () {
            $('.butSignIn').prop("disabled", true);
            error.text("");
        },
        success(data) {
            console.log(data);
            if(!(data.status)){
                error.text(data.message);                 
            }
            else{ 
            error.text(data.message);
            $('.butSignIn').prop("disabled", true);
            document.location.href="account.php";
            }

            

        } 
    });
});
});


