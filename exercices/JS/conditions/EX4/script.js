var _pu = parseInt(prompt("entrez le prix unitaire"));

var _qtcom = parseInt(prompt("entrez la quantite"));

var _tot = _pu*_qtcom;

if (_tot>500)
{
    var _remtot = 0
}
else
{
    var _rem = _tot*2/100;
    if(_rem >6)
    {
       var _remtot = _rem;
    }
    else
    {
        var _remtot = 6;
    }
}