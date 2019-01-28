<?php
use author\authorId\{authorAvatarUrl};


//grab the class we want to take a look at

require_once(dirname(__DIR__) . "/classes/autoload.php");
require_once("uuid.php");

require_once("uuid.php");
$pdo = connectToEncryptedMySQL("/etc/apache2/capstone-mysql/nerdnook.ini");


$category = new authorAvatarUrl(generateUuidV4(), "http://www.fakethings.com/", "http://www.RonLunathegamer.com/");
$category->insert($pdo);
echo "first category";