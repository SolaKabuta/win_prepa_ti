<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo "$title" ?></title>
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
            Hello, c'est moi ! (ou pas)
        </h1>
        <img src="img/avatar.webp" alt="avatar of Sola Kabuta the real one">
    </main>
    <footer>
        <?php
        include "inc/footerIncView.php";
        ?>
    </footer>
</body>
</html>