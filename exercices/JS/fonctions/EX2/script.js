
function multiplie(nb) {
    for (i = 0; i <= 10; i++) {
        var som = i * nb;
        console.log(i + ' x ' + nb + ' = ' + som);
    }
}

var nb = parseInt(prompt('saisissez le molutiplicateur'));

multiplie(nb)