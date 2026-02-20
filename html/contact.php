<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link href="../css/style.css" rel="stylesheet" />
</head>    
    <?php include ("../include/header.php"); ?>

    <body class="contact" >
        <!-- <img src="../img/fond_chine2.jpg" alt="fonc_chine2.jpg" class="imgfond" > -->


        <div class="formulaire" >
        <h1>Contact</h1>

         <div class="formulaire1">      
            <form action="formulaire.php" method="POST">
                <div>
                    <label for="nom">Nom :</label><br>
                    <input type="text" id="nom" name="user_name" required >
                </div>
                <div>
                    <label for="nom">Prénom :</label><br>
                    <input type="text" id="nom" name="user_fname" required >
                </div>
                
                <div>
                    <label for="email">Email :</label><br>
                    <input type="email" id="email" name="user_mail" required >
                </div>

                <div>
                    <label for="statut">Statut :</label><br>
                    <select type="statut" id="statut" name="user_statut" required >
                        <option>Intervenant Extern</option>
                        <option>Intervenant Intern</option>
                </div>

                <div>
                    <label for="message">Message :</label><br>
                    <textarea  type="message"  id="message" name="user_mess"></textarea>
                </div>

                <button type="submit" class="btnextern" >Envoyer</button>
            </form>
</div>
</div>


    </body>

    <!-- <?php include ("../include/footer.php"); ?> -->
