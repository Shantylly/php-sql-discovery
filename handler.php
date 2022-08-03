<html>
    <head>
    <title>Profil</title>
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
            echo 'Votre nom est '.$_POST['nom'].' et votre fonction est '.$_POST['fonction'];
        }
    ?>
    </body>
</html>