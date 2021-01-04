var inputs = document.getAttribute("required");

for (var i = 0; i<inputs.length-1; i++)
{
    var toto = inputs[i]['required'=" "];
    console.log(toto);
}


console.log(inputs);

document.forms[0].addEventListener('submit', function(){
if(toto.value == "ok"){
    alert("toto");
}

});

