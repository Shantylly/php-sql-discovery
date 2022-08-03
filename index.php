<!doctype html>

<html>
    <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css">
        <title> PhP test </title>
    </head>
    <body>
        <nav class="center">
            <h1> Site test for PhP & MySQL </h1>
            <div>
                <a href="#">Home</a>
                <a href="#text">Traitement de fichier</a>
                <a href="#sql">MySQL</a>
                <a href="#dolibarr">Dolibarr</a>
            </div>
        </nav>
        <div class="block1">
            <?php
            $user = $_SERVER['HTTP_USER_AGENT'];
            $host = $_SERVER['HTTP_HOST'];
            $day = date ("d-m-Y");
            $hour = date ("H:i");
            echo 'Mon premier script en PHP <br />';
            echo 'Nous sommes le ', $day, ', et il est ', $hour, '<br /> ';
            echo 'Adresse du site : ', $host, '<br />';
            preg_match('/Mozilla|MSIE|Opera|Trident|Chrome|Safari/', $user, $match);
            if (empty($match))
                echo 'Navigateur non reconnu <br /> ';
            else
                echo 'Navigateur: ', $match[0], '<br /> ';
            ?>
        </div>
        <div class="block1">
            <?php
                    $fp = fopen ("exemple.txt", "r+");
                    $nb_visites = fgets ($fp, 9);
                    $nb_visites = $nb_visites + 1;
                    fseek ($fp, 0);
                    fputs ($fp, $nb_visites);
                    fclose ($fp);
                    echo 'Ce site a été ouvert, vu et revu '.$nb_visites.' fois !';
                ?>
        </div>
    </body>
</html>