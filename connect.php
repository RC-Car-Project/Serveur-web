<?php
	
 try{
            $bdd = new PDO('mysql:host=localhost;dbname=DBNAME;port=Port', "user", "mdp");
        }catch(PDOException $ex){
            throw new ErrorException("Impossible de se connecter à la base de donné: ".$ex->getMessage(), 1);
            exit();
        }
  // Nous somme bel et bien connecte
 ?>