<?php
use author\authorId\{authorAvatarUrl\authorActivationToken\authorEmail\authorUsername};


//grab the class we want to take a look at

require_once(dirname(__DIR__) . "/classes/autoload.php");
require_once("uuid.php");

require_once("uuid.php");
$pdo = connectToEncryptedMySQL("/etc/apache2/object-oriented1/github.com/RonL1985/object-oriented1");


$author = new authorAvatarUrl(generateUuidV4(), "http://www.fakethings.com/", "http://www.RonLunathegamer.com/");
$author->insert($pdo);
echo "first author";

$author = new authorActivationToken(generateUuidV4(), "worldWideWeb", "internet");
$author->insert($pdo);
echo "second author";

$author = new authorEmail(generateUuidV4(), "ronaldluna1@gmail.com/", "google.com");
$author->insert($pdo);
echo "third author";

$author = new authorUsername(generateUuidV4(), "RonL1985", "github.com");
$author->insert($pdo);
echo "fourth author";