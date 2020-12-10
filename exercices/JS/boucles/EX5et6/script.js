var _nb = parseInt(prompt('saisissez un nombre'));

var _compt = 0;
var _tot = 0;
var _nbMax = 0;
var _nbMin = _nb;


while (_nb != 0)
{

    var _nb = parseInt(prompt('saisissez un nombre'));
    _compt++

    _tot = _tot+_nb;

    if (_nbMin>_nb && _nb!=0)
    {
        _nbMin = _nb;
    }
    if(_nbMax<_nb)
    {
        _nbMax = _nb;
    }
}

console.log('le plus petit nombre est '+_nbMin);
console.log('le plus grand nombre est '+_nbMax);

console.log('le total est de '+_tot);
console.log('la moyenne est de '+_tot/_compt);

