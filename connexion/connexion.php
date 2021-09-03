<?php
session_start();
 try {
	$bdd = new PDO('mysql:host=localhost;dbname=contacts','root','');
  } catch (PDOException $e) {
	print "Erreur !: " . $e->getMessage() . "<br/>";
	die();
  }
if(isset($_POST['formconnexion']))
{   
		$email = htmlspecialchars($_POST['email']);
		$mdp= sha1($_POST['mdp']);

    if(isset($_POST['email']) && isset($_POST['mdp']) )
    {  
        $requser =$bdd->prepare("SELECT * FROM users WHERE email= '".$email."' and mdp = '".$mdp."'");
        $requser->execute(array(".$email.",".$mdp."));
        $userexist = $requser->rowCount();
        if($userexist = 1){
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['email'] = $userinfo['email'];
			$_SESSION['nom'] = $userinfo['nom'];
			
            header("Location:../compte/compteView.php");
        }else{
            $message="Mauvais mot de passe ou identifiant!";
        }
    }
    else
    {
        $message="Tous les champs doivent etre remplis !"; 
    }
}
?>