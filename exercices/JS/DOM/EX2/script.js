var date = new Date();

var jour = date.getDate() + '/' + (date.getMonth()) + '/' + date.getFullYear();
var heure = date.getHours() + ' H ' + date.getMinutes() + ' Min ' + date.getSeconds() + ' Sec ';

var boutons = document.getElementsByTagName("button");

for (let i = 0; i < boutons.length; i++) {
    val = boutons[i].getAttribute('value');
    if (val == "jours") {
        boutons[i].addEventListener("click", function(){

            document.getElementById("day").setAttribute('value', jour);
        
        });
    }
    else {
        boutons[i].addEventListener("click", function(){
            document.getElementById("hour").setAttribute('value', heure);
        });
    }
}

