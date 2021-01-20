var capital = document.querySelector('#capital');
var calcul = document.querySelector('#calcul');
var taux = document.querySelector('#taux');
var duree = document.querySelector('#duree');

var mens = document.querySelector('#mens');
var cout = document.querySelector('#cout');

var msg = document.querySelectorAll('.message');



calcul.addEventListener("click", function(){
    var nbMois = duree.value*12;
    var result = (capital.value*taux.value/12)/(1-Math.pow(1+taux.value/12, -nbMois));
    mens.value = result;
    cout.value = mens.value*nbMois;
});


