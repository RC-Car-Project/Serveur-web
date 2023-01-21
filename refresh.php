<?php
header('Content-Type: application/json; charset=utf-8');
if (!isset($_GET["id"]) || empty($_GET["id"])) {
    // Dans le cas ou nous n'en avons pas
    header("Location: statistiques.php");
    exit;
  }

  // On recupere l'id
  $id = htmlspecialchars($_GET["id"]);

  // On va chercher les erreurs dans la BDD mais tout d'abbord on s'y connecter
  require_once("connect.php");

  // ecriture de la requete
  $sql = "SELECT * FROM statistique WHERE id=:id";

  //on la prepare
  $requete = $bdd->prepare($sql);

  //On injecte les parametres
  //$requete->bindValue(":id", $id, PDO::PARAM_INT);

  // On execute la requete
  $requete->execute(array("id" => $id));

  // On recupere l'erreur
  $article = $requete->fetchAll(PDO::FETCH_ASSOC);

	/*
	$time = array();

	foreach($article as $value) {
    	array_push($time, $value["Date"]);
    
    }*/

	echo json_encode($article);
/*
    foreach($requete as $data)
  {
    $time[] = $data['Date'];
    $date = $data['Date']; $date_1 = explode(".", $date); $date_3 = date("d-m-Y H:i:s", intval($date_1[0])).".".$date_1[1];
    $time2[] = $date_3;
    $speed[] = $data['Vitesse'];
    $temp_motor[] = $data['Temperature_moteur'];
    $ampere[] = $data['Consommation_ampere'];
    $tension[] = $data['Tension_batterie'];
    $vibration[] = $data['Vibration'];
    $longitude[] = $data['Longitude'];
    $latitude[] = $data['Latitude'];
    $coordinates[] = 'new google.maps.LatLng(' . $data['Latitude'] .','. $data['Longitude'] .'),';
  }*/


?>

