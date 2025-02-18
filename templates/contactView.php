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
            Hello World ! Contact !
        </h1>
        <form action="" method="get" class="form-example">
  <div class="form-example">
    <label for="name">Enter your name: </label>
    <input type="text" name="name" id="name" required />
  </div>
  <div class="form-example">
    <label for="email">Enter your email: </label>
    <input type="email" name="email" id="email" required />
  </div>
  <div class="form-example">
    <input type="submit" value="Subscribe!" />
  </div>
</form>
    </main>
    <footer>
        <?php
        include "inc/footerIncView.php";
        ?>
    </footer>
</body>
</html>