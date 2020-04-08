var btnSignin = document.querySelector("#signin");
var btnSignup = document.querySelector("#signup");

btnSignin.addEventListener("click", function(){
    body.className = "sign-in-js";
});

btnSignup.addEventListener("click", function(){
    body.className = "sign-up-js";
});


var body = document.querySelector("body");