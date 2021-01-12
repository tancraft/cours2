var helps = document.getElementsByClassName('help');

for (let i = 0; i<helps.length; i++)
{
    let help = helps[i];
    help.addEventListener('mouseover', function (evt) {
        let imgHelp = evt.target;
    
        let affiche = imgHelp.parentNode.nextSibling;
        affiche.style.display = "flex";
    
    });

    help.addEventListener('mouseout', function (evt) {
        let imgHelp = evt.target;
    
        let affiche = imgHelp.parentNode.nextSibling;
        affiche.style.display = "none";   
    });
}

/*toto */
function verifDessine(uneVerif)
{
    uneVerif.setAttribute("src","faux.png");
}

var verifs=document.getElementsByClassName("valid") /**Je te conseille de changer le nom de la variable qui récupère le tableau, vu qu'elle a le même nom que la classe récupérée**/

for (let i=0;i<verifs.length;i++)
{
    let uneVerif=verifs[i];
    verifDessine(uneVerif);
}
