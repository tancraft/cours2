var tab = [];

var nb = parseInt(prompt('entrer un nombre pour taille tableau'));

for (i = 0; i<nb;i++)
{
    tab[i] = prompt('entrer une valeur');
}

for (var i = 0; i < tab.length; i++) 
{ 
    console.log(tab[i]); 
}

