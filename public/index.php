<?php
# win_prepa_ti\public\index.phpwin_prepa_ti\public

# frontal controller

if(isset($_GET['p'])){

    switch($_GET['p']){
        case "projects":
            $title = "projects";
            include "../view/projectsView.php";
            break;
        case "about":
            $title = "about";
            include "../view/aboutView.php";
            break;
        case "contact":
            $title = "contact";
            include "../view/contactView.php";
            break;
        default:
            $title = "error404";
            include "../view/error404View.php";
    }
}else {
    include "../view/homepageView.php";
}