var _dateN = new Date();
var _dateB = prompt("entrer une date");
var _age = _dateN.getFullYear() - _dateB;

if(_age > 18)
{
    console.log("vous ete majeur");
}
else
{
    console.log("vous ete mineur");
}