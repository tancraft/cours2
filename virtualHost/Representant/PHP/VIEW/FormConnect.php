<article>
      <form action="Index.php?codePage=actionConnect&mode=connect" method="POST">
        <div><label for="EmailUtilisateur">E-mail</label></div>
        <div>
          <input
            type="text" name="EmailUtilisateur" placeholder="E-mail" required
          />
        </div>
        <div><label for="MotDePasseUtilisateur">Mot de passe</label></div>
        <div>
          <input type="password" name="MotDePasseUtilisateur" placeholder="Mot de passe" required />
        </div>

        <div>

          <button><a href="index.php?codePage=accueil">Accueil</a></button>

          <button type="submit">Connexion</button>

        </div>
        <div >
            Nouvel utilisateur ?<a href="index.php?codePage=formInscript">Inscrivez vous</a>
        </div>
      </form>
    </article>