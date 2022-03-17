
const form=document.getElementById("forme");
const formpwd=document.getElementById("con_pwd");
const formlog=document.getElementById("con_log");
const error_log=document.getElementById("error_log");
const er=document.getElementById("error");
const error_pwd=document.getElementById("error_pwd");
var error1=true;
var error2=true;
const imgfile=document.getElementById("file_ins");
const divfile=document.getElementById("photo_ins");
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
    formpwd.style.border="5px solid red";
    if( formpwd.value!==""){
        formpwd.style.border="5px solid green";
    }
});

form.addEventListener('submit',function(e){
            if(error1 || error2){
                e.preventDefault();
                er.innerText="login ou mot de passe incorrect";
            }
           
 });

//  charger une image
imgfile.onchange = evt => {
    const [file] = imgfile.files
    if (file) {
        divfile.src = URL.createObjectURL(file)
    }
  }


