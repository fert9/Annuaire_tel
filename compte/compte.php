<?php
   session_start();
   try {
      $bdd = new PDO('mysql:host=localhost;dbname=contacts','root','');
    } catch (PDOException $e) {
      print "Erreur !: " . $e->getMessage() . "<br/>";
      die();
    }
    // if(!isset($_SESSION["nom"])){
	//  header("Location: connexion.php");
    // exit(); 
 	// }
 	
?>