<?php
$titrePage="Accueil";

include "php/head.php";
include "php/header.php";
include "php/listePersonne.php";


echo '<div class="espaceHor"></div>
<section>
    <div class="espace"></div>
    <div class="tableau colonne">
        <div class="entete">
            <div class="sousTitre  centre">Nom</div>
            <div class="sousTitre  centre">Prenom</div>
            <div class="sousTitre  centre">Age</div>
        </div>';
for ($i=0;$i<count($personnes);$i++)
{
       echo '<a href="php/detail.php?id='.$personnes[$i]->getIdPersonne().'"><div class="ligne">
       <div class=" cache">'.$personnes[$i]->getIdPersonne().'</div>
            <div class=" centre">'.$personnes[$i]->getNom().'</div>
            <div class=" centre">'.$personnes[$i]->getPrenom().'</div>
            <div class="centre">'.$personnes[$i]->getAge().'</div>
        </div></a>';
}
    echo '<div class="espace"></div></div>
    <div class="espace"></div>
</section>
</main>

</body>

</html>';