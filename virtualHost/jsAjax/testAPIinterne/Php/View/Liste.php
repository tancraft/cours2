<?php
$liste = PersonneManager::getList();
?>
<div class="espaceHorizon fondBlanc"></div>
<div id="contenu">
	<div id="crudBarreOutil">
    <a class=" crudBtn crudBtnOutil" href="/Commercial/PHP/Controller/Routes.php?mode=ajout" >Ajouter </a>
</div>
		<div id="crudTableau">
		<table id="crud" class="avectri">
			<thead class="crudEntete">
                <th class="crudColonne"  >Nom</th>
                <th class="crudColonne"  >Prenom</th>
			</thead>
			<?php foreach ($liste as $elt) {
    echo '<tr class="crudLigne">';

    echo '<td class="crudColonne nom"></td>';
    echo '<td class="crudColonne prenom"></td>';

    ?>
				<td class="crudColonneBtn">
                    <a class=" crudBtn crudBtnEdit" >Afficher </a>
				<a class=" crudBtn crudBtnModif" >Modifier</a>
				<a class=" crudBtn crudBtnSuppr" >Supprimer</a></td>
			</tr>
			<?php }?>
				<tr class="crudLigne">
				<td>total : </td>	
					<td id="total"></td>
				</tr>
		</table>

		
	</div>


</div>
<div class="espaceHorizon fondBlanc"></div>