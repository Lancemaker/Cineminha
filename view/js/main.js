/**
 * transição da tela de login
 */
var btnSignin = document.querySelector("#signin");
var btnSignup = document.querySelector("#signup");

btnSignin.addEventListener("click", function(){
    body.className = "sign-in-js";
});

btnSignup.addEventListener("click", function(){
    body.className = "sign-up-js";
});


var body = document.querySelector("body");

/**
 * Cadastro
 */
function mascara(i,t){
   
    var v = i.value;
    
    if(isNaN(v[v.length-1])){
       i.value = v.substring(0, v.length-1);
       return;
    }
    
    if(t == "data"){
       i.setAttribute("maxlength", "10");
       if (v.length == 2 || v.length == 5) i.value += "/";
    }

    if(t == "tel"){
       if(v[0] == 9){
          i.setAttribute("maxlength", "10");
          if (v.length == 5) i.value += "-";
       }else{
          i.setAttribute("maxlength", "9");
          if (v.length == 4) i.value += "-";
       }
    }
 }