var valeurs = document.getElementsByTagName("button");

for (let i = 0; i < valeurs.length; i++) {
    valeurs[i].addEventListener("click", clickBouton);
}

var affiche = document.getElementById("ecran");


function clickBouton(e) {
    var btnClick = e.target;
    var val = btnClick.textContent;
    if (val == "=") {
        affiche.textContent = eval(affiche.textContent);
    }
    else if(val == "clear")
    {
        affiche.textContent = "";
    }
    else if(val == "suppr")
    {
        ecran = affiche.textContent;
        affiche.textContent = ecran.substring(0, ecran.length -1);
    }
    else {
        affiche.textContent += val;
    }
}
