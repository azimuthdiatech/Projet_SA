const form=document.getElementById("form");
const formlog=document.getElementById("con_log");
const formpwd=document.getElementById("con_pwd");
const error_log=document.getElementById("error_log");
const error_pwd=document.getElementById("error_pwd");
var error

function isValidEmail(formlog) {//Tester si l'email est valide
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if( re.test(formlog.value.trim().toLowerCase())){
        return true;
    }
}

formlog.onkeyup= function(e){
    
    if(isValidEmail(formlog)){
        formlog.style.border="0.5vh solid green";
        error=false;
    }
   
}
formpwd.onkeyup= function(e){
    if(formpwd.value===""){
        formpwd.style.border="0.5vh solid red";
    }
}

function obligatorPassword(formpwd) {
    if(formpwd.value==""){
        error_pwd.innerText="Le champ est vide";
        return true;
    }
}
form.addEventListener('submit',function(){
    if(obligatorPassword(formpwd)){} ;
});

