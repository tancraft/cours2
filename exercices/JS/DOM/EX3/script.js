
var boutons = document.getElementsByTagName("button");
for(let i=0;i<boutons.length;i++)
{
    boutons[i].addEventListener("click",changeAmpoule);
}
function changeAmpoule()
{   
    var amp = document.getElementById("ampoule");
    if (amp.getAttribute("interr")=="off")
    {
        amp.src = "AmpouleOK.gif";
        amp.setAttribute("interr","on");
    }
    else{
        amp.src = "AmpouleHS.gif";
        amp.setAttribute("interr","off");
    }
}
