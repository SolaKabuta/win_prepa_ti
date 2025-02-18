<?php
#
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?=$title?></title>
</head>
<body>
    <header>
        <nav>
            <?php
            include "inc/navIncView.php";
            ?>
        </nav>
    </header>
    <main>
        <h1>
            Hello World ! Ca fonctionne !
        </h1>
    </main>
    <footer>
        <?php
        include "inc/footerIncView.php";
        ?>
    </footer>
</body>
</html>