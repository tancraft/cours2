var cartes = document.querySelectorAll('.carte');

cartes.forEach(function (elt) {
    var uneCarte = elt;
    uneCarte.classList.add("verso");
    uneCarte.src = "IMG/verso.jpg";
    uneCarte.setAttribute('alt', 'carte a l envers');
});


document.addEventListener("click", (e) => {
    e.target.parentNode.getElementsByClassName("verso")[0].changeCoter();

});


function changeCoter() {

    if (classes.classList.contains("verso")) {
        classes.src = "IMG/recto1.jpg";
        classes.classList.remove("verso");
        classes.classList.add("recto");
        setTimeout(changeCoter, 3000);

    }
    else {
        classes.src = "IMG/verso.jpg";
        classes.classList.remove("recto");
        classes.classList.add("verso");
    }
}

// var listeMurs = document.querySelectorAll('.mur');

// for ($i=1;$i<9;$i++)  
// {
//     $tab[]=$i;
//     $tab[]=$i;

// } 

// for ($i = 1; $i < 5; $i++) {
//    echo '<div class="espace"></div>';
//     echo '<div class="ligne">';
//     for ($j = 1; $j < 5; $j++) 
//     {
//         $key = array_rand($tab);
//         $nb = $tab[$key];
//         //on enlève la valeur du tableau
//         array_splice($tab,$key,1);
//         echo '<div class="espaceHor">
//         </div><div class="case">
// <img class="recto" src="images/plage.jpg" alt="">
// <img class="verso" src="images/' . $nb . '.jpg" alt="">
// <div class="espaceHor"></div>
// </div>';
//     }
//    echo '</div>';

// }

