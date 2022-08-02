<!doctype html>

<html>
    <head>
        <meta charset="utf-8" />
        <title> PhP test </title>
    </head>
    <style>
        .block1 {
        width: 400px;
        padding: 10px;
        border: 5px solid gray;
        margin: 0;
        }
        .block2 {
        width: 400px;
        padding: 10px;
        border: 5px solid gray;
        margin: 0;
        }
    </style>
    <body>
        <h1> Site test for PhP & MySQL </h1>
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
    </body>
</html>