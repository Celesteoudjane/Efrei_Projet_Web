<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact</title>
    <link href="../css/style.css" rel="stylesheet" />
</head>    
    <?php include ("../include/header.php"); ?>

    <body>
        <img src="../img/fond_chine2.jpg" alt="fonc_chine2.jpg" class="imgfond" >

        <h1>Contact</h1>

         <div class="">
        <div class="">


        
            <h2>Envoyez-moi un message</h2>
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
                    <label for="email">Statut :</label><br>
                    <input type="statut" id="statut" name="user_statut" required >
                </div>

                <div style="margin-bottom: 15px;">
                    <label for="message">Message :</label><br>
                    <textarea id="message" name="user_mess" rows="5" ></textarea>
                </div>

                <button type="submit" class="btn" >Envoyer</button>
            </form>
        </div>
</div>


    </body>
    
    <?php include ("../include/footer.php"); ?>
