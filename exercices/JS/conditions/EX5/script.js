var _emp = prompt('entrer le nom de l employer');
var _salaire = parseInt(prompt('entrer le salaire'));

var _marie = prompt('est vous marie (o/n)');
var _enf = prompt('avez vous des enfants (o/n)');

if( _marie == 'o')
{
    var _participe = 25;
}
else
{
    var _participe = 20;
}

if(_salaire<1200)
{
    _participe +=10;
}


if(_enf == 'o')
{
    
    var _nbEnf = parseInt(prompt('combien d enfants avez vous'));
    var _totEnf = 10*_nbEnf;
    _participe +=_totEnf;

}

if(_participe>50)
{
    _participe =50;
}

console.log('la participation est de '+_participe+'%');
