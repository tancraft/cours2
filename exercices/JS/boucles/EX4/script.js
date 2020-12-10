var _nb1 = parseInt(prompt('saisissez un nombre'));
var _nb2 = parseInt(prompt('saisissez un autre nombre'));

var _tot = _nb1;
for (_i=_nb1+1;_i<_nb2;_i++)
{
    _tot = _tot+_i;
    console.log(_tot);
}