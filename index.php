<!doctype html>

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
        <div class="block1">
            <?php
                $user = $_SERVER['HTTP_USER_AGENT'];
                $host = $_SERVER['HTTP_HOST'];
                $day = date ("d-m-Y");
                $hour = date ("H:i");
                echo 'Mon premier script en PHP <br/>';
                echo 'Nous sommes le ', $day, ', et il est ', $hour, '<br/>';
                echo 'Adresse du site : ', $host, '<br/>';
                preg_match('/Mozilla|MSIE|Opera|Trident|Chrome|Safari/', $user, $match);
                if (empty($match))
                    echo 'Navigateur non reconnu <br/>';
                else
                    echo 'Navigateur: ', $match[0], '<br/>';
            ?>
        </div>
        <div class="block1">
            <?php
            /*
                Base de données composées d'une table de 3 éléments : id / username / phone
            */
                require_once('data.php');
                $conn = mysqli_connect($servername, $username, $password, $database);
                if ($conn->connect_error) {
                    die("Connection failed: ". $conn->connect_error. '<br/>');
                }
                echo 'Connected successfully to database! <br/>';
                $sql = "SELECT id, username, phone FROM user_list";
                $result = mysqli_query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->mysqli_fetch_assoc()) {
                        echo "id: ", $row["id"], " - Pseudo: ", $row["username"], " - Phone: ", $row["phone"], "<br/>";
                    }
                } else {
                    echo "0 results";
                }
                mysqli_close($conn);                
            ?>
        </div>
        <div class="block2">
            <form action = "src/handler.php" method="post" enctype="multipart/form-data">
                Votre nom : <input type = "text" name = "nom" autocomplete="nom"> <br/>
                Votre fonction : <input type = "text" name = "fonction" autocomplete="fonction"> <br/>
                Votre fichier : <input type = "file" name = "my_file"> <br/>
                <input type = "hidden" name="MAX_FILE_SIZE" value="20000">
                <input type = "submit" value = "Envoyer">
            </form>
        </div>
        <section class = main, id = text>
            <div class="block1">
                <?php
                    $fp = fopen ("src/counter.txt", "r+");
                    $nb_visites = fgets ($fp, 9);
                    $nb_visites = $nb_visites + 1;
                    fseek ($fp, 0);
                    fputs ($fp, $nb_visites);
                    fclose ($fp);
                    echo 'Ce site a été ouvert, vu et revu ',$nb_visites,' fois !';
                    ?>
            </div>
        </section>
    </body>
    <footer>
        <p class = center id="contact">Contact : 06 66 66 66 66 | &copy; 2022, Shanty.</p>
    </footer>
</html>