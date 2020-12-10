
do {
    var magic = parseInt(Math.random() * 100);
    var nb = 0;

    do {

        nb = parseInt(prompt('entrez un nombre'));

        if (magic != nb) {
            if (magic < nb) {
                alert('plus petit');
            }
            else {
                alert('plus grand');
            }
        }

    } while (nb != magic)

    alert('enfin trouver');

    var conf = confirm('voulez vous rejouer ?');
} while (conf)

alert('au revoir');