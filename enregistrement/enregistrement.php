<?php
session_start();
try {
   $bdd = new PDO('mysql:host=localhost;dbname=contacts','root','');
 } catch (PDOException $e) {
   print "Erreur !: " . $e->getMessage() . "<br/>";
   die();
 }
if(isset($_POST['formregister']))
{   
    if(!empty($_POST['nom']) AND !empty($_POST['email'])AND !empty($_POST['mdp'])AND !empty($_POST['mdp2']))
    {
        $nom = htmlspecialchars($_POST['nom']);
        $email= htmlspecialchars($_POST['email']);
        $mdp= sha1($_POST['mdp']);
        $mdp2= sha1($_POST['mdp2']);
        if(isset($nom))
        {   $req = $bdd->prepare ("SELECT * FROM users WHERE nom ='".$nom."'");
            $req->execute(array(".$nom."));
			$nomexist = $req->rowCount();
			if( $nomexist >= 1){
				$userinfos = $req->fetch();
				$_SESSION['nom'] = $userinfos['nom'];
				$message = "Ce nom existe déjà!";
			}else{
				if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                        $req2 = $bdd->prepare (" SELECT * FROM users WHERE email= '".$email."'");
                        $req2->execute(array(".$email."));
						$emailexist = $req2->rowCount();
							if($emailexist >= 1)
							{
								$userinfo = $req2->fetch();
								$_SESSION['email'] = $userinfo['email'];
								$message = "Ce email existe déjà!";
							}else{
								if($mdp == $mdp2){
									if(strlen($mdp)>8){ 
											$insertmbr = $bdd->prepare("INSERT INTO users VALUES (".$nom.",".$email.",".$mdp.")"); 
											$insertmbr->execute(array(".$nom.", ".$email.", ".$mdp."));
											header('Location: ../compte/compteView.php');		
									}else{
										
										$message='Le mot de passe doit dépasser au moins 7caractères';
									}
									
								}else{
									$message = "Mot de passe non conformes !";
								}
							}

                }else{
                    $message = "Mails non valides!";
                }
			}
        }else{
            $message ="Votre pseudo  doit pas dépasser aumoins 7 caractères!";
        }
    }else{
        $message="Tous les champs doivent etre remplis!";
    }
}
?>