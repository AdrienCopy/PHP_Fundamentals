<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/picture/favicon_io/favicon.ico" type="image/x-icon">
    <link rel="icon" href="assets/picture/favicon_io/favicon-32x32.png" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <title>Document</title>
</head>

<body>
    <header>
        <section>
        <img src="assets/picture/logo.jpeg" alt="">
        <h1>Petit mots d’excuses</h1>
        </section>
    </header>
    <main>
        <section>
        <h2>Formulaire d'absence</h2>
        <form method="get" action="">
            <label for="nom_enfant">Nom de l'enfant :</label><br>
            <input type="text" id="nom_enfant" name="nom_enfant" required><br><br>

            <label>Sexe de l'enfant :</label><br>
            <input type="radio" id="fille" name="gender" value="fille">
            <label for="fille">Fille</label><br>
            <input type="radio" id="garcon" name="gender" value="garcon">
            <label for="garcon">Garçon</label><br><br>

            <label for="nom_professeur">Nom du professeur :</label><br>
            <input type="text" id="nom_professeur" name="nom_professeur" required><br><br>

            <label>Motif d'absence :</label><br>
            <input type="radio" id="maladie" name="motif_absence" value="maladie">
            <label for="maladie">Maladie</label><br>
            <input type="radio" id="deces" name="motif_absence" value="deces">
            <label for="deces">Décès de l'animal (ou d'un membre de la famille)</label><br>
            <input type="radio" id="activite" name="motif_absence" value="activite">
            <label for="activite">Activité extrascolaire importante</label><br>
            <input type="radio" id="autre" name="motif_absence" value="autre">
            <label for="autre">Random sur un des trois premier.</label><br><br>

            <input type="submit" value="Envoyer">
        </form>
        </section>
        <?php include("excuse.php"); ?>


    </main>

    <footer>


    </footer>

    
</body>

</html>