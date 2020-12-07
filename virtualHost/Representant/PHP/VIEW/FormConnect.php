<article>
      <form action="Index.php?codePage=actionConnect&mode=connect" method="POST">
        <div><label for="emailUtilisateur">E-mail</label></div>
        <div>
          <input
            type="text"
            name="emailUtilisateur"
            placeholder="E-mail"
            required
          />
        </div>
        <div><label for="mdpUtilisateur">Mot de passe</label></div>
        <div>
          <input
            type="password"
            name="mdpUtilisateur"
            placeholder="Mot de passe"
            required
          />
        </div>

        <div>
          <div></div>
          <button><a href="index.php?page=accueil">Accueil</a></button>
          <div></div>
          <button type="submit">Connexion</button>
          <div></div>
        </div>
        <div >
            Nouvel utilisateur ?<a href="index.php?codePage=formInscript">Inscrivez vous</a>
        </div>
      </form>
    </article>