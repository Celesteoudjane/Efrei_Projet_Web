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
      <th scope="col">Intervenant</th>
      <th scope="col">Niveau</th>
      <th scope="col">Nom du cours</th>
      <th scope="col">Salle</th>
      <th scope="col">Modalité</th>

      
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">KMIMECH Mourad</th>
      <td><span class="bagde-niveau b2">B2</span></td>
      <td>Gestion de versions</td>
      <td>H112</td>
      <td>Présentiel</td>
    
    </tr>
    <tr>
      <th scope="row">Chachoui Amir</th>
      <td><span class="badge-niveau b1">B1</span></td>
      <td>Base de données 1 : Concepts de base</td>
      <td>B107</td>
      <td>Présentiel</td>
    
    </tr>
    <tr>
      <th scope="row">BRESSON <Jean-Philippe></Jean-Philippe></th>
      <td><span class="badge-niveau b3">B3</span></td>
      <td>Droit</td>
      <td>none</td>
      <td>Distanciel</td>

    
    </tr>
  </tbody>
</table>

<div class="btn-wrapper">
                  <button type="submit" class="btnextern">Ajouter un cours</button>
</div>

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
                      <option value="" disabled selected hidden>Choix niveau</option>
                        <option>B1</option>
                        <option>B2</option>
                        <option>B3</option>
                        </select>
                </div>

                <div>
                    <label for="level">Modalité :</label><br>
                    <select type="level" id="level" name="user_level" required >
                      <option value="" disabled selected hidden>Choix Modalité</option>
                        <option>Présentiel</option>
                        <option>Distanciel</option>
                        </select>
                </div>

                <div class="salle-container">
    <label for="salle">Salle :</label><br>
    <div class="salle-input-group">
        <input type="text" id="salle" name="user_salle" placeholder="Ex: H112">
        <label class="checkbox-label">
            <input type="checkbox" id="no_salle" name="no_salle" value="none"> None
        </label>
    </div>
</div>

              

                <div>
                    <label for="name_course">Nom du cours :</label><br>
                    <textarea  type="name_course"  id="name_course" name="user_course"></textarea>
                </div>

                <button type="submit" class="btnextern" id="messcontact" >Ajouter</button>
            </form>
</div>
</div>

<script src="../js/cours.js"></script>
    </body>