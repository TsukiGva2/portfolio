<?php
    require_once  "./core/Core.php";

    $inc_files = glob("_app/*.inc.php") + glob("classes/*.inc.php");

    $_app = new Core();
    $_app::_inc($inc_files);
    $_app::run("views/", "home");


    