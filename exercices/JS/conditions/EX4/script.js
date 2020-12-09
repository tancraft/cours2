var _pu = parseInt(prompt("entrez le prix unitaire"));

var _qtcom = parseInt(prompt("entrez la quantite"));

var _tot = _pu*_qtcom;

if (_tot>500)
{
    var _portot = 0
}
else
{
    var _por = _tot*2/100;
    if(_por >6)
    {
       var _portot = _rem;
    }
    else
    {
        var _portot = 6;
    }
}