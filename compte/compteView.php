<?php include("compte.php")?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Compte</title>
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
                             <?php
                                if(isset ($_SESSION['nom'])){
                                    $nom = $_SESSION['nom'];
                                }
                                else{
                                    echo 'vide';
                                }
                                echo $_SESSION['nom'];		 
                             ?> 
                </div>
            </nav>
        </section>
        
        <!-- HOME -->
      
        <section class="home">
            
        </section>

        <!-- ABOUT -->
        
        <!-- FOOTER -->
        <section class="footer">

        </section>
        
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script src="../js/bootstrap4/bootstrap.min.js"></script> 
    </body>
</html>

