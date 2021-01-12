<?php

for ($i=1;$i<9;$i++)  
{
    $tab[]=$i;
    $tab[]=$i;
  
} 

for ($i = 1; $i < 5; $i++) {
   echo '<div class="espace"></div>';
    echo '<div class="ligne">';
    for ($j = 1; $j < 5; $j++) 
    {
        $key = array_rand($tab);
        $nb = $tab[$key];
        //on enlève la valeur du tableau
        array_splice($tab,$key,1);
        echo '<div class="espaceHor">
        </div><div class="case">
<img class="recto" src="images/plage.jpg" alt="">
<img class="verso" src="images/' . $nb . '.jpg" alt="">
<div class="espaceHor"></div>
</div>';
    }
   echo '</div>';

}

?>
