<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="src/style.css">
        <title> PhP test </title>
    </head>
    <body>
        <nav class="center">
            <h1> Site test for PhP & MySQL </h1>
            <div>
                <a href="/">Home</a>
                <a href="text">Traitement de fichier</a>
                <a href="sql">MySQL</a>
                <a href="dolibarr">Dolibarr</a>
            </div>
        </nav>
    <?php
        if (isset($_POST['nom']) && isset($_POST['fonction'])) {
            echo 'Votre nom est ', $_POST['nom'], ' et votre fonction est ', $_POST['fonction'], '<br/>';
        }
        else {
            echo 'Erreur : ', $_POST['nom']['error'], '<br/>';
        }
        if (isset($_FILES['my_file'])) {
            echo $_FILES['my_file']['name'], '<br/>';
            echo $_FILES['my_file']['tmp_name'], '<br/>';
            echo $_FILES['my_file']['name'], '<br/>';
            echo $_FILES['my_file']['type'], '<br/>';
            echo $_FILES['my_file']['size'], '<br/>';
        }
        else {
            echo 'Erreur : ', $_FILES['my_file']['error'], '<br/>';
        }
    ?>
    </body>
</html>