<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="fr" />
  <link rel="stylesheet" href="style.css"/>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <title>Accueil</title>
</head>
<body>
  <form action="filtres.php" method="post">
    <h3>Filtres:</h3>
    <ul>
      <li> <select name="poste">
            <option value="">poste</option>
            <option value="Webdesigner">Webdesigner</option>
            <option value="developpeur web">Développeur web</option>
          </select>
      </li>
    </ul>
    <input name="envoyer" id="envoyer" value="Filtrer" type="submit">
  </form>
</body>
</html>
