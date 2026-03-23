<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Recherche Enseignant</title>
<link rel="stylesheet" href="../css/style.css">
</head>
 <?php include ("../include/header.php"); ?>
<body>
<div class="container">

    <h2>Recherche un Enseignant</h2>

    <!-- BARRE RECHERCHE -->
    <div class="search-box">
        <input type="text">
    </div>

    <!-- EXTERN -->
    <div class="section">
        <div class="header">Intervenant extern <span>▼</span></div>

        <div class="content">
            <table>
                <tr>
                    <th></th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Matière</th>
                </tr>
                <tr>
                    <td><div class="circle"></div></td>
                    <td>Durand</td>
                    <td>Paul</td>
                    <td>Réseaux</td>
                </tr>
            </table>
        </div>
    </div>

    <!-- INTERN -->
    <div class="section">
        <div class="header">Intervenant intern <span>▼</span></div>

        <div class="content">
            <table>
                <tr>
                    <th></th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Matière</th>
                </tr>
                <tr>
                    <td><div class="circle"></div></td>
                    <td>Martin</td>
                    <td>Claire</td>
                    <td>Dev Web</td>
                </tr>
                <tr>
                    <td><div class="circle"></div></td>
                    <td>Dupont</td>
                    <td>Jean</td>
                    <td>Reseaux</td>
                </tr>
            </table>
        </div>
    </div>

</div>

<equipe src="../js/equipe.js"></equipe>
</body>
<?php include ("../include/footer.php"); ?>
</html>