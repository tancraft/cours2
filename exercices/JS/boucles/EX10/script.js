var nb = parseInt(prompt('entrer un chiffre'));

i = 2;

while (i*i<=nb && nb%i != 0)
{
    i++;
}

if (i*i>nb)
{
    alert(nb+' est premier');
}
else
{
    alert(nb+' n est pas premier');
}

/*avec le math sqrt sa sortait que des chiffres a virgules donc sa fonctionnait
 pas du coup en testant la racine carre du premier chiffre par rapport au nb et la diffference avec le modulo 
 plutot que l egalite on se retrouvait a seulement tester que le carre du chiffre est bien superieur au nb */
