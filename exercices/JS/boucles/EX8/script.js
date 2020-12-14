var str = prompt('ecrire une chaine');

var depart = 0;

var compteur = 0;

while (str.length == 1) {
    var check = ['a', 'e', 'i', 'o', 'u', 'y'];
    for (j = 0; j< check.length;)
    for (i = depart; i < str.length; i++) {
        
        var lettre = str.substring(depart, str.length)
        if (check[i] == lettre) {
            compteur++;
        }
    }
}

console.log(compteur);