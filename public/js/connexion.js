const form=document.getElementById("forme");
const formpwd=document.getElementById("con_pwd");
const formlog=document.getElementById("con_log");
const error_log=document.getElementById("error_log");
const er=document.getElementById("error");
const error_pwd=document.getElementById("error_pwd");
var error1=true;
var error2=true;

function isValidEmail(formlog) {
    //Tester si l'email est valide
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if( re.test(formlog.value.trim().toLowerCase())){
        return true;
    }
}
formlog.addEventListener("keyup", function(){
    formlog.style.border="5px solid red";
    if(isValidEmail(formlog)){
        formlog.style.border="5px solid green";
        error1=false;
    }
});
formpwd.addEventListener('keyup',function(){
    var msg; 
    var str = document.getElementById("con_pwd").value; 
    if (str.match( /[0-9]/g) && 
            str.match( /[A-Z]/g) ||
            str.match(/[a-z]/g) && 
            str.length >= 5) 
        msg = "<p style='color:green'>Mot de passe fort.</p>"; 
    else 
        msg = "<p style='color:red'>Mot de passe faible.</p>"; 
        er.innerHTML= msg; 

    // formpwd.style.border="5px solid red";
    // if( pass.len){
    //     formpwd.style.border="5px solid green";
    // }
});

form.addEventListener('submit',function(e){
            // if(error1 || error2){
            //     e.preventDefault();
            // }
          if(er.value){
            e.preventDefault();
            er.innerText="login ou mot de passe incorrect";
          }
 });

 const formpass=document.getElementById("con_pwd");
 const affichpwd=document.getElementById("affichpwd");
 const maskpwd=document.getElementById("maskpwd");
 
 affichpwd.addEventListener("click", function(){
    affichpwd.style.display ="none";
    maskpwd.style.display ="block";
    formpass.type = "text";
 });

 maskpwd.addEventListener("click", function(){
    maskpwd.style.display ="none";
    affichpwd.style.display ="block";
    formpass.type = "password";
 });
 