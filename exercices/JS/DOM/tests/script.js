
var image = document.getElementsByClassName("carte");
for (var i = 0; i < image.length; i++) {
    image[i].addEventListener("mouseover", function()    {for (var i = 0; i < image.length; i++) {
        image[i].src = "recto.jpg";
        }});

    image[i].addEventListener("mouseout", function() {    for (var i = 0; i < image.length; i++) {
        image[i].src = "verso.jpg";
        }});
}


