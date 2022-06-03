// Personalizar brownie

function mostrarcombo() {

    var elementbaseChocolate = document.getElementById("Chocolate");
    var chkbaseChocolate = document.getElementById("checkChocolate");
 
    var elementMashmellow = document.getElementById("Mashmellow");
    var chkMashmellow = document.getElementById("checkMashmellow");
 
    var elementGrageas = document.getElementById("Grageas");
    var chkGrageas = document.getElementById("checkGrageas");
 
    var elementchochips = document.getElementById("chocochip");
    var chkChochips = document.getElementById("checkchochips");
 
    var elementGomitas = document.getElementById("Gomitas");
    var chkGomitas = document.getElementById("checkGomitas");
 
    var elementChispitas = document.getElementById("chispitas");
    var chkChispitas = document.getElementById("checkChispitas");
 
    //(Condicion) ? True : False;
    chkbaseChocolate.checked ? elementbaseChocolate.style.display = "block" : elementbaseChocolate.style.display = "none";
    chkMashmellow.checked ? elementMashmellow.style.display = "block" : elementMashmellow.style.display = "none";
    chkGrageas.checked ? elementGrageas.style.display = "block" : elementGrageas.style.display = "none";
    chkChochips.checked ? elementchochips.style.display = "block" : elementchochips.style.display = "none";
    chkGomitas.checked ? elementGomitas.style.display = "block" : elementGomitas.style.display = "none";
    chkChispitas.checked ? elementChispitas.style.display = "block" : elementChispitas.style.display = "none";
 
 
 }