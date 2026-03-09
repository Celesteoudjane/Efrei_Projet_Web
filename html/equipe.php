<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Equipe Enseignante</title>
    <link href="../css/style.css" rel="stylesheet" />
</head>    
    <?php include ("../include/header.php"); ?>
    <body>

<main class="page">

    <!-- TITRE -->
    <h1>Recherche un Enseignant</h1>

    <!-- BARRE DE RECHERCHE -->
    <div class="search-box">
        <input type="text" placeholder="">
        <span class="search-icon">🔍</span>
    </div>

    <!-- BLOCS INTERVENANTS -->
    <div class="dropdown">
        <span>Intervenant extern</span>
        <span class="arrow">V</span>
    </div>

    <div class="dropdown">
        <span>Intervenant intern</span>
        <span class="arrow">V</span>
    </div>

    <!-- TABLEAU -->
    <div class="table">

        <div class="row header">
            <span class="circle"></span>
            <span>Nom</span>
            <span>Prénom</span>
            <span>Matière</span>
        </div>

        <div class="row">
            <span class="circle"></span>
        </div>

        <div class="row">
            <span class="circle"></span>
        </div>

        <div class="row">
            <span class="circle"></span>
        </div>

    </div>

</main>

</body>
<?php include ("../include/footer.php"); ?>
</html>
