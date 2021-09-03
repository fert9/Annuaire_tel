<?php include("connexion.php"); ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Connexion</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../js/bootstrap4/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../styles/index.css">  
    </head>
    <body>
        <!-- BARRE -->
        <section class="header">
            <nav class="navbar navbar-expand-lg navbar-light bg-light barre">
                <div class="container-fluid">

                    <div class="col-sm-7">
                        <h1>Contact_Benin</h1>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                  <a href="../" style="color:green">Retourner sur Accueil</a>

                </div>
            </nav>
        </section>
        <!-- HOME -->
        <section class="home">
            <div class="container">
            <h1 style="text-align:center;">Login</h1>
            <form class="formulaire" method="POST" action="">
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Password</label>
                        <input type="password" class="form-control"  name="mdp">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-success" name='formconnexion'>Se connecter</button>
                    </div>
                    <div class="col-12">
                        Nouveau ? <br><span><button type="submit" class="btn btn-success"><a href="../enregistrement/enregistrementView.php">Créer un Compte</a></button></span>
                        
                    </div>
                </div>

                <?php  
                if (! empty($message)) 
                    { 
                    ?>
                    <p>
                    <?php 
                    echo $message; 
                    }
                    ?>
                    </p>
                   
                
                </form>
            </div>
        </section>

        <!-- FOOTER -->
      
        <section class="footer">
           
        </section>
        
    <script src="./js/jquery-3.2.1.min.js"></script>
    <script src="./js/bootstrap4/bootstrap.min.js"></script> 
    </body>
</html>