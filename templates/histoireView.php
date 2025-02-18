<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title><?php echo "$_title" ?></title>
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
        <div class="img-container">
            <img src="img/flag.jfif" alt="american flag pic">
            <img src="img/lunch.jfif" alt="">
            <img src="" alt="">
        </div>
    </main>
    <footer>
        <?php
        include "inc/footerIncView.php";
        ?>
    </footer>
</body>
</html>