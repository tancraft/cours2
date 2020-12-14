function GetInteger()
{
    var int = parseInt(prompt("entrer la taille du tableau"));
    console.log(int);
}

function SaisieTab(nb)
{
    var nb =GetInteger();

    for(i=0; i<nb; i++)
    {
    tab[i] = prompt("Entrer les valeur du tableau");
    }
    return tab;
}

function AfficheTab(tab)
{
    for (var i = 0; i < tab.length; i++) 
    { 
        console.log(tab[i]); 
    }
}

function RechercheTab(tab, nb)
{
    var tab = Saisietab();
    do
    {
        var nb = GetInteger();
    }while(nb> tab.length);
    alert(tab[nb]);
}

function InfoTab(tab)
{
    var tab = SaisieTab();
    var max = 0;
    var somme = 0;
    var moyenne;
    for(i=0; i< tab.length; i++)
    {
        if(tab[i+1]>tab[i])
        {
            max = tab[+1];

        }
        somme = somme +tab[i];
    }
    moyenne = somme /tab.length;
    alert(max+"\n"+moyenne);
}

nb = GetInteger()

var tab =SaisieTab(nb);

AfficheTab(tab);


InfoTab();

//fonctionne pas a reprendre

