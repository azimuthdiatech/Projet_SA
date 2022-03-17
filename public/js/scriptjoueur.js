
const statut = document.getElementById('nom_img');
const img = document.getElementById('img_ins_avatar');
if (window.FileList && window.File && window.FileReader) {
    document.getElementById('file_ins').addEventListener('change', event => {
        img.src = '';
        statut.textContent = '';
        const file = event.target.files[0];
        if (!file.type) {
            statut.textContent = 'Error:le type de fichier est non supporte';
            return;
        }
        if (!file.type.match('image.*')) {
            statut.textContent = 'Error: seul les images sont accepter.';
            return;
        }
        const reader = new FileReader();
        reader.addEventListener('load', event => {
            img.src = event.target.result;
            statut.innerText = `${file.name}`;
        });
        reader.readAsDataURL(file);
    });
}

const form=document.getElementById("form_ins");
const formpwd=document.getElementById("password_ins_ad");
const formlog=document.getElementById("login_ins_ad");
const error_log=document.getElementById("error_log");
const er=document.getElementById("error");
const error_pwd=document.getElementById("error_pwd");
const error_pwd2=document.getElementById("error_pwd2");


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
    var str = document.getElementById("password_ins_ad").value; 
    if (str.match( /[0-9]/g) && 
            str.match( /[A-Z]/g) ||
            str.match(/[a-z]/g) && 
            str.length >= 5) {
               msg = "<p style='color:green'>Mot de passe fort.</p>"; 
    
            }else{
                msg = "<p style='color:red'>Mot de passe faible.</p>"; 
        er.innerHTML= msg;
            }
});











// const inputs=document.getElementsByTagName("input");
// for(input of inputs){
//     input.addEventListener("keyup",function(e){
//         if(e.target.hasAttribute("error")){
//             var idDivError=e.target.getAttribute("error");
//             document.getElementById("idDivError").innerText="";
//         }
//     });
// }

// document.getElementById("form_ins").addEventListener("submit",function(e){
//     var inp=document.getElementsByClassName("con_ins_j");
//     const inputs=document.getElementsByTagName("input");
//     var error=false;
//         for(inp of inputs){
//             if(inp.hasAttribute("error")){
//                 var idDivError=input.getAttribute("error");
//                     if(!input.value){
//                         alert("ok");
//                         document.getElementById("idDivError").innerText="Ce champ est obligatoire";
//                     }
//                 error=true;
//             }
//         }
//     if(error){
//         e.preventDefault();
//         return false;
//     }
// })

