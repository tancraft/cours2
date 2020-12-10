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

if(_tot>200)
{
    var _rem = _tot*10/100;
}
else if (_tot<100)
{
    var _rem = 0;
}
else
{
    var _rem = _tot*5/100;
}

console.log('le total est '+_tot+' euros');
console.log('les frais de port sont de  '+_portot+' euros');
console.log('la remise est de  '+_rem+' euros');

var _coutTot = _tot+_portot+_rem;
console.log('le prix total est de  '+_coutTot+' euros');