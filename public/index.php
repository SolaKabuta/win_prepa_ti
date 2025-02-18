<?php
# win_prepa_ti\public\index.phpwin_prepa_ti\public

# frontal controller

if(isset($_GET['p'])){

    switch($_GET['p']){
        case "apropos":
            $title = "apropos";
            include "../view/aproposView.php";
            break;
        case "histoire":
            $title = "histoire";
            include "../view/histoireView.php";
            break;
        case "contact":
            $title = "contact";
            include "../view/contactView.php";
            break;
        default:
            $title = "error404";
            include "../view/erreur404View.php";
    }
}else {
    include "../view/accueilView.php";
}