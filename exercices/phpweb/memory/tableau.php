<?php

for ($i = 1; $i < 5; $i++) {
   echo '<div class="espace"></div>';
    echo '<div class="ligne">';
    for ($j = 1; $j < 5; $j++) 
    {
        $nb= rand(1,8);
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
