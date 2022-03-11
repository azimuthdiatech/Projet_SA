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
            // if(error1 || error2){
            //     e.preventDefault();
            //     er.innerText="login ou mot de passe incorrect";
            // }
            alert("edrf");
 });

//  charger une image
imgfile.onchange = evt => {
    const [file] = imgfile.files
    if (file) {
        divfile.src = URL.createObjectURL(file)
    }
  }







        // formpwd.onkeyup= function(e){
            //     if(formpwd.value===""){
                //         formpwd.style.border="0.5vh solid red";
                //     }
                // }
                // function obligatorPassword(formpwd) {
                    //     if(formpwd.value==""){
                        //         error_pwd.innerText="Le champ est vide";
                        //         return true;
                        //     }
                        // }
                        // form.addEventListener('submit',function(){
                            //     if(obligatorPassword(formpwd)){} ;
                            // });
                            
                            //page d'inscription joueur
                            // const form_ins=document.getElementById("form");
                            // const ins_nom=document.getElementById("prenom_ins_ad");
                            // const ins_prenom=document.getElementById("nom_ins_ad");
                            // const ins_login=document.getElementById("login_ins_ad");
    // const ins_password=document.getElementById("password_ins_ad");
    // const ins_password2=document.getElementById("password2_ins_ad");
    // const ins_file=document.getElementById("file_ins");
    
    
    // formpwd.addEventListener("keyup", function(e){
        //     formpwd.style.border="5px solid red";
        //     if(formpwd > 6){
            //         formpwd.style.border="5px solid green";
            //         error2=false;
            //     }
            // });
    
    //////////////////////////////
    // function isValidEmail(ins_login) {//Tester si l'email est valide
    //     const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    //     if( re.test(ins_login.value.trim().toLowerCase())){
        //         return true;
        //     }
        // }
        // ins_login.onkeyup= function(e){
            //     if(isValidEmail(ins_login)){
                //         ins_login.style.border="0.5vh solid green";
                //         error=false;
                //     }
                // }
                // ins_nom.onkeyup= function(e){
                    //     if(ins_nom.value===""){
                        //         ins_nom.style.border="0.5vh solid red";
                        //     }
                        // }
                        // form_ins.addEventListener('submit',function(){
//     if(obligatorPassword(ins_login)){} ;
// });