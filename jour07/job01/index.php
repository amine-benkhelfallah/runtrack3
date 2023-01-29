<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>jour07 job01</title>
   <!-- <script src="https://cdn.tailwindcss.com"></script>-->
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="index.php">Inscription</a></li>
          <li><a href="index.php">Connexion</a></li>
          <li><a href="index.php">Rechercher</a></li>
        </ul>
      </nav>
    </header>
    <section>
      <form>
        <p>Civilité:</p>
        <input type="radio" id="homme" name="civilité" value="homme">
        <label for="homme">Homme</label><br>
        <input type="radio" id="femme" name="civilité" value="femme">
        <label for="femme">Femme</label><br>
        <p>Prénom:</p>
        <input type="text" name="prenom"><br>
        <p>Nom:</p>
        <input type="text" name="nom"><br>
        <p>Adresse:</p>
        <input type="text" name="adresse"><br>
        <p>Adresse email:</p>
        <input type="email" name="email"><br>
        <p>Password:</p>
        <input type="password" name="password"><br>
        <p>Confirmez password:</p>
        <input type="password" name="confirmPassword"><br>
        <p>Centres d'intérêts:</p>
        <input type="checkbox" id="informatique" name="intérêts" value="informatique">
        <label for="informatique">Informatique</label><br>
        <input type="checkbox" id="voyages" name="intérêts" value="voyages">
        <label for="voyages">Voyages</label><br>
        <input type="checkbox" id="sport" name="intérêts" value="sport">
        <label for="sport">Sport</label><br>
        <input type="checkbox" id="lecture" name="intérêts" value="lecture">
        <label for="lecture">Lecture</label><br>
        <input type="submit" value="Valider">
      </form>
    </section>
    <footer>
    <nav>
        <ul>
          <li><a href="index.php">Accueil</a></li>
          <li><a href="index.php">Inscription</a></li>
          <li><a href="index.php">Connexion</a></li>
          <li><a href="index.php">Rechercher</a></li>
        </ul>
      </nav>
      <p>Copyright &copy; 2023</p>
    </footer>
  </body>
</html>