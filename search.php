<?php
//Connexion à la base
$servername = "localhost";
$username = "root";
$password = "";

try{
	$conn = new
	PDO("mysql:host=$servername;dbname=mini-site", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
	//set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Connected successfully <br>";
}
catch(PDOException $e){
	echo "Connection failed";
}

$competences_array = array();

$reqSQL = $conn->prepare("SELECT intitule_competences FROM competences");
	$reqSQL->execute();

while($row= $reqSQL-> fetch(PDO::FETCH_ASSOC)){
  if((in_array($row['intitule_competences'], $competences_array) == false)) {
    $competences_array[] = $row['intitule_competences'];
  }
}

$formations_array = array();

$reqSQL = $conn->prepare("SELECT intitule FROM formations");
	$reqSQL->execute();

while($row= $reqSQL-> fetch(PDO::FETCH_ASSOC)){
  if((in_array($row['intitule'], $formations_array) == false)) {
    $formations_array[] = $row['intitule'];
  }
}

$postes_array = array();

$reqSQL = $conn->prepare("SELECT poste FROM experiences");
	$reqSQL->execute();

while($row= $reqSQL-> fetch(PDO::FETCH_ASSOC)){
  if((in_array($row['poste'], $postes_array) == false)) {
    $postes_array[] = $row['poste'];
  }
}

print_r(array_values($competences_array));
print_r(array_values($formations_array));
print_r(array_values($postes_array));

$array_count = array_count_values($postes_array)

// Close connexion
// $reqSQL = null;
// $conn = null;
 ?>

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
              <?php
              foreach($postes_array as $key => $value):
              echo '<option value="'.$value.'">'.$value.'</option>';
              endforeach;
              ?>
          </select>
      </li>
    </ul>
    <ul>
      <li> <select name="competences">
              <option value="">competences</option>
              <?php
              foreach($competences_array as $key => $value):
              echo '<option value="'.$value.'">'.$value.'</option>';
              endforeach;
              ?>
          </select>
      </li>
    </ul>
    <ul>
      <li> <select name="formations">
              <option value="">formations</option>
              <?php
              foreach($formations_array as $key => $value):
              echo '<option value="'.$value.'">'.$value.'</option>';
              endforeach;
              ?>
          </select>
      </li>
    </ul>
    <input name="envoyer" id="envoyer" value="Filtrer" type="submit">
  </form>
</body>
</html>
