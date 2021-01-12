<form action="Index.php?codePage=actionInscription" method="POST">
<div>
    <label for="nom"><?php echo texte('nm'); ?></label>
    <input type="text"  name="nom" required />
</div>
<div>
    <label for="prenom"><?php echo texte('prn'); ?></label>
    <input type="text" name="prenom" required />
</div>
<div>
    <label for="motDePasse"><?php echo texte('mdp'); ?></label>
    <input type="password" name="motDePasse" required />
</div>
<div>
    <label for="confirmation"><?php echo texte('cmdp'); ?></label>
    <input type="password" name="confirmation" required />
</div>
<div>
    <label for="adresseMail"><?php echo texte('email'); ?></label>
    <input type="text" name="adresseMail" required />
</div>
<div>
    <label for="roleUser"><?php echo texte('role'); ?></label>
    <input type="text" name="roleUser" required />
</div>
<div>
    <label for="pseudo"><?php echo texte('pseudo'); ?></label>
    <input type="text" name="pseudo" required />
</div>
<button type="submit"><?php echo texte('val'); ?></button>
</form>