function retour() 
{
    for (var i = 0; i < image.length; i++) {
    image[i].src = "recto.jpg";
    }
}

function verso() 
{
    for (var i = 0; i < image.length; i++) {
    image[i].src = "verso.jpg";
    }
}

function color() 
{
    for (var i = 0; i < image.length; i++) {
    appuie[i].style.backgroundColor = "pink";
    }
}

var image = document.getElementsByClassName("carte");
for (var i = 0; i < image.length; i++) {
    image[i].addEventListener("mouseover", retour);
    image[i].addEventListener("mouseout", verso);
}

var appuie = document.getElementsByClassName("bouton");
for (var i = 0; i < image.length; i++) {
    appuie[i].addEventListener("click", color);
}

