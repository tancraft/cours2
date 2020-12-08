<form action="index.php?codePage=actionInscript" method="POST">
<div>
    <label for="NomUtilisateur">Nom</label>
    <input type="text"  name="NomUtilisateur" required />
</div>
<div>
    <label for="PrenomUtilisateur">Prenom</label>
    <input type="text" name="PrenomUtilisateur" required />
</div>
<div>
    <label for="PseudoUtilisateur">Pseudo</label>
    <input type="text" name="PseudoUtilisateur" required />
</div>
<div>
    <label for="EmailUtilisateur">E mail</label>
    <input type="text" name="EmailUtilisateur" required />
</div>
<div>
    <label for="MotDePasseUtilisateur">mot De Passe</label>
    <input type="password" name="MotDePasseUtilisateur" required />
</div>
<div>
    <label for="confirmation">Confirmation du mot de passe</label>
    <input type="password" name="confirmation" required />
</div>
<div>
    <label for="IdRole">Role (1 admin 2 user)</label>
    <input type="text" name="IdRole" required />
</div>
<button type="submit">Valider</button>
<button><a href="index.php?codePage=accueil">Accueil</a></button>
</form>