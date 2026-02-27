<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Cours et formations</title>
    <link href="../css/style.css" rel="stylesheet" />
</head>    
    <?php include ("../include/header.php"); ?>

    <body>
        <table>
  <thead>
    <tr>
      <th scope="col">Nom du cour</th>
      <th scope="col">Niveau</th>
      <th scope="col">Intervenant</th>
      <th scope="col">Salle</th>
      <th scope="col">Modalité</th>

      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">KMIMECH Mourad</th>
      <td>B1</td>
      <td>Gestion de versions</td>
      <td>H112</td>
      <td>Présentiel</td>
    
    </tr>
    <tr>
      <th scope="row">Chachoui Amir</th>
      <td>B1</td>
      <td>Base de données 1 : Concepts de base</td>
      <td>B107</td>
      <td>Présentiel</td>
    
    </tr>
    <tr>
      <th scope="row">BRESSON <Jean-Philippe></Jean-Philippe></th>
      <td>B3</td>
      <td>Droit</td>
      <td>none</td>
      <td>Distanciel</td>

    
    </tr>
  </tbody>
</table>


                <button type="submit" class="btnextern">Ajouter un cours</button>


                 <div class="nvcours" >

         <div class="nvcours1">  
            
            <form action="formulaire.php" method="POST">
          
                <div>
                    <label for="nom">Intervenant :</label><br>
                    <input type="texte" id="nom" name="user_name" required >
                </div>

                <div>
                    <label for="level">Niveau :</label><br>
                    <select type="level" id="level" name="user_level" required >
                      <option value="" disabled selected hidden>Choisir classe</option>
                        <option>B1</option>
                        <option>B2</option>
                        <option>B3</option>
                        </select>
                </div>

              

                <div>
                    <label for="name_course">Nom du cours :</label><br>
                    <textarea  type="name_course"  id="name_course" name="user_course"></textarea>
                </div>

                <button type="submit" class="btnextern" id="messcontact" >Ajouter</button>
            </form>
</div>
</div>


    </body>