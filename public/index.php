<?php
# win_prepa_ti\public\index.phpwin_prepa_ti\public

# frontal controller

if(isset($_GET['p'])){

    switch($_GET['p']){
        case "apropos":
            $title = "apropos";
            include "../templates/aproposView.php";
            break;
        case "histoire":
            $title = "histoire";
            include "../templates/histoireView.php";
            break;
        case "contact":
            $title = "contact";
            include "../templates/contactView.php";
            break;
        default:
            $title = "error404";
            include "../templates/erreur404View.php";
    }
}else {
    include "../templates/accueilView.php";
}