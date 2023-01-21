<?php

$temp = explode("-",$_GET["data"]);

$temperature = $temp[1]; //$_GET["temperature"];
$tension  = $temp[3];//$_GET["tension"];
$ampere = $temp[2];//$_GET["ampere"];
$vibration = $temp[4];//$_GET["vibration"];
$vitesse = $temp[0];//$_GET["vitesse"];
$longitude = $temp[5];//$_GET["longitude"];
$latitude = $temp[6];//$_GET["latitude"];

//mettre un indice factice et la date


require_once("connect.php");
date_default_timezone_set('Europe/Paris');
setlocale(LC_TIME, "fr_FR");
$now = DateTime::createFromFormat('U.u', microtime(true));

$req = $bdd->query("SELECT * FROM `statistique` WHERE 1 ORDER BY `Date` DESC");
$req = $req->fetchAll();

$id = 0;

if (empty($req)) {
	$sql_run = "INSERT INTO `run`(`id`, `Date`) VALUES ('".$id."','".microtime(true)."');";
   	$bdd->exec($sql_run);
} else {



	foreach($req as $value) {
    	$id = $value["id"];
    	$time1 = $value["Date"];

    	echo $time1;
    	echo " - ";
    	echo microtime(true);
    	if(microtime(true) > ($time1 +10.0))
   	{ 
    	    $id++;
        	$sql_run = "INSERT INTO `run`(`id`, `Date`) VALUES ('".$id."','".microtime(true)."');";
        	$bdd->exec($sql_run);
    	echo "OUIIII";
   	}

    	break;
}
}

//On ecrit la requete pour statistique
$sql_statistique = "INSERT INTO `statistique`(`id`, `Date`, `Vitesse`, `Temperature_moteur`, `Consommation_ampere`, `Tension_batterie`, `Vibration`, `Longitude`, `Latitude`) VALUES ('".$id."','".microtime(true)."','".$vitesse."','".$temperature."','".$ampere."','".$tension."','".$vibration."','".$longitude."', '".$latitude."');";
$bdd->exec($sql_statistique);
print($sql_statistique);
print($sql_run);
//OK10572522.30228618872149448.855248475392756INSERT INTO `statistique`(`id`, `Date`, `Vitesse`, `Temperature_moteur`, `Consommation_ampere`, `Tension_batterie`, `Vibration`, `Longitude`, `Latitude`) VALUES ('10','2023-01-19 12:33:04.255400','2','10','7','5','25','2.302286188721494', '48.855248475392756');INSERT INTO `run`(`id`, `Date`) VALUES ('10','2023-01-19 12:33:04.255400');

// On execute la requete
//$requete = $bdd->query($sql);

// On recupere les donnees
//$articles = $requete->fetchAll();

 ?>
