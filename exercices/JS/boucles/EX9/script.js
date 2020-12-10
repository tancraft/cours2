
    var comptj = 0;
    var comptv = 0;
    var comptm = 0;

do
{


    nb = parseInt(prompt('entrer un age'));
    if (nb>=20 && nb<=40)
    {
        comptm++;
    }
    else if (nb<20)
    {
        comptj++;
    }
    else
    {
        comptv++;
    }


}while (nb <100)

alert('il y a '+comptv+' vieux\nil y a '+comptj+' jeunes\nil y a '+comptm+' dans la moyenne.');
