var metaChar = false;
var toucheExemple = 16;

var compteur = 0;
var konami ="";


function keyEvent(event) {
  var key = event.keyCode || event.which; // une autre syntaxe que l'opérateur ternaire s'il n'y a pas de keyCode
  var keychar = String.fromCharCode(key);
  if (key == toucheExemple) {
    metaChar = true;
  }
  if (key != toucheExemple) {
     if (metaChar) {
        alert("Combinaison de la touche meta et de " + keychar)
        metaChar = false;
     } else {
       konami=konami+key;
       compteur++;
     }
  }
  if(konami=="38384040373937396665"){
    alert("konami");
  }

  if(compteur==10){
    compteur=0;
    konami="";
  }

}


function metaKeyUp(event) {
  var key = event.keyCode || event.which;
  if (key == toucheExemple) { metaChar = false; }
}
