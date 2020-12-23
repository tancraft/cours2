
//creation du plateau de jeu
var cases = document.querySelectorAll('.case');
var j = 0;

var tab1 = [1, 2, 3, 4, 5, 6, 7, 8];
var tab2 = new Array;

for (let i = 0; i < tab1.length; i++) {
    tab2[i] = [tab1[i], Math.floor(Math.random() * 100)]
}
tab2.sort((a, b) => a[1] - b[1]);

for (let i = 0; i < tab1.length; i++) {
    tab1[i] = tab2[i][0];
}

var valeur = parseInt(tab1.length);
tab1[valeur] = "vide";


do {
    let nb = tab1[j];
    cases[j].setAttribute('id', nb);
    if(j == valeur)
    {
        cases[j].textContent = "";
    }
    else
    {
        cases[j].textContent = nb;
    }
    
    j++
} while (j < cases.length);

//videX.videY

// xc = e.target.getAttribute("x");
// yc = e.target.getAttribute("y");

// 1-2=1
// videx-videy ==1 xor vidx-clicy==1


