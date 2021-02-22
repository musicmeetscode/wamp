<?php
$name = $_POST['foldername'];
echo ($name);
$dirs = array('css', 'js', 'img', 'vendor');
if ($name != "") {
    mkdir($name, 0777);
    copy("template.php", $name . "/template.php");
    rename($name . "/template.php", $name . "/index.php");
    foreach ($dirs as $dir) {
        mkdir($name . "/" . $dir, 0777, true);
    }
}
header("Location: ./");
