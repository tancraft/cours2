<form action="Index.php?codePage=actionsConnect" method="post">

<div>
<label for="pseudo"><?php echo texte('pseudo'); ?></label>
<input type="text" name="pseudo" required />
</div>
<div>
<label for="motDePasse"><?php echo texte('mdp'); ?></label>
<input type="password" name="motDePasse" required />
</div>
<button type="submit"><?php echo texte('val'); ?></button>
</form>


