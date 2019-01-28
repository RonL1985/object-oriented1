<?php
namespace RonL1985\ObjectOriented;

require_once("../Classes/author.php");
require_once("../Classes/autoload.php");
//	require_once("../classes/autoload.php");
//	require_once(dirname(__DIR__, 1) . "/classes/Author.php");
// use autoload via composer (PHP's package manager:
require_once(dirname(__DIR__, 2) . "/vendor/autoload.php");


/*
simplified attribute names:
	authorId
	authorAvatarUrl
	authorActivationToken
	authorEmail
	authorHash
	authorUsername
*/
/**
 * New Author Generator
 *
 * A new instance of the Author class with all of the attributes the database requires.
 *
 */
$snape = new author(
	"generateUuidV4",
	"www.Hogwarts.com/1",
	"babababababababababababababababa",
	"professorSnape@gmail.com",
	"babababababababababababababababababababababababababababababababababababababababababababababababa",
	"SirArthur"
);
//insert($snape);

var_dump($snape);