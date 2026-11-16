<?php

$action = $_POST['action'];
switch ($action) {
    case "carousel":
        $dirs = scandir(__DIR__."/media_files/carousel");
        var_dump($dirs);
        break;
}
?>