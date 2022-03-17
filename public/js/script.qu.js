const plus=document.getElementById("plus");
const nbr=document.getElementById("nbr_point");
const moins=document.getElementById("moins");

let a = 1;
plus.addEventListener("click",function(){
    a++;
    a = (a < 10) ? "0" + a : a;
    nbr.innerText = a;

});

moins.addEventListener("click",function(){
    if(a > 1){
        a--;
        a = (a < 10) ? "0" + a : a;
    nbr.innerText = a;
    }  
});

let select=document.getElementById("type_reponse_q");
let mytarea=document.getElementById("tarea").value;
let myrep_uni=document.getElementById("rep_uni").value;
let mychoix_mult=document.getElementById("choix_mult").value;
let myadd_q=document.getElementById("add_q");

//div conteneur
let mytype_rep=document.getElementById("type_rep");

function createChamp(){
    //div contenant les boutons textarea checkbox radio suppr
  var mydtcrs=document.createElement("div");
  mydtcrs.setAttribute("id","dtcrs");
  
    // function my_p(){
    //     var n=0;
    //     if(n < 1){
    //         n++;
    //         let p=document.createElement("p");
    //         p.innerText="Réponse " +n;
    //     }
    //     return p;
    // }

    // mydtcrs.appendChild(my_p());
    

  var tarea=document.createElement("textarea");
  tarea.setAttribute("id","btntarea");
  tarea.setAttribute("rows",30); tarea.setAttribute("cols",30);
  mydtcrs.appendChild(tarea);

  if(select.value==="checkbox"){
    // création du bouton checkbox
  var cbox=document.createElement("input");
  cbox.setAttribute("id","btncheck");
  cbox.setAttribute("type","checkbox");
  mydtcrs.appendChild(cbox);
  }
  if(select.value==="radio"){
      // création du bouton radio
  var radio=document.createElement("input");
  radio.setAttribute("id","btnradio");
  radio.setAttribute("type","radio");
  radio.setAttribute("name","radio");
  mydtcrs.appendChild(radio);
  }
 
 // création du bouton suppr
  var suppr=document.createElement("button");
  suppr.setAttribute("id","btnsuppr");
  suppr.addEventListener("click",function(){
    mydtcrs.remove();
  });
  mydtcrs.appendChild(suppr);

  mytype_rep.appendChild(mydtcrs);
  
}
myadd_q.addEventListener("click",createChamp);
