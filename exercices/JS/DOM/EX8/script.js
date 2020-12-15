

// On utilise 2 images, 1 representant le recto et l'autre le verso
// Ecrire une page HTML affichant le verso
// 1. Ecrire le javascript permettant d'afficher le recto lorsque l'on clique sur l'image ok
// 2. Modifier le script pour que l'image se retourne une nouvelle fois, lorsque l'on reclique ok
// 3. Modifier le script pour que l'image se retourne au bout de 3 secondes ok
var image = document.getElementById("carte");

image.addEventListener("click", changeCoter);

function changeCoter() 
{
    var tourne = document.getElementById("carte");
    if (tourne.getAttribute("change") == "verso") 
    {
        image.src = "recto.jpg";
        tourne.setAttribute("change", "recto");
        setTimeout(changeCoter, 3000);

    }
    else {
        image.src = "verso.jpg";
        tourne.setAttribute("change", "verso");
    }
}
