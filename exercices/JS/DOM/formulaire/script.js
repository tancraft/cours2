// var inputs = document.getAttribute("required");

// for (var i = 0; i<inputs.length-1; i++)
// {
//     var toto = inputs[i]['required'=" "];
//     console.log(toto);
// }


// console.log(inputs);

// document.forms[0].addEventListener('submit', function(){
// if(toto.value == "ok"){
//     alert("toto");
// }

// });

var aide = document.getElementsByClassName('aide');
for (let i = 0; i<aide.length;i++)
{
    var uneAide = aide[i];
    console.log(uneAide);
}
var imgHelp = document.getElementsByClassName('help');
for (let i = 0; i<imgHelp.length;i++)
{
    var uneImg = imgHelp[i];
    console.log(uneImg );
}


uneImg.addEventListener('mouseover', function () {

    uneAide.style.display = "flex";

});

uneImg.addEventListener('mouseout', function () {

    uneAide.style.display = "none";

});

