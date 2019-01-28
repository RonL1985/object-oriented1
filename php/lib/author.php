<?php
namespace RonL1985\object-oriented1;

require_once("../Classes/Author.php");
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
		generateUuidV4(),
		"www.Hogwarts.com/",
		"babababababababababababababababa",
		"professorSnape@gmail.com",
		"dsjflsjfheihgeukhfisnfsldhflkggsldfgehskdhgnsgukhsldhfkshglhseiugfsbdlkfahlfehldkjvhhgsjunslnjpodjw;jghgsknfnvslkng",
		"ProfessorSnape"
);
	//insert($snape);

	var_dump($snape);


	$spell = new author(
		generateUuidV4(),
		"www.spellcasting.com/",
		"hahahahahahahahahahahahahahahaha",
		"CastSpell@gmail.com",
		"jgeuhfvkkld;sljdjfiln;ledjavgtte74y4839y4ihtysih9405iowiehflksjguflwjdoilhw;ueotsigdihgw;sgiswohgoheifj",
		"BadSpell"
);
	//insert($spell);

	var_dump($spell);


	$rock = new author(
		generateUuidV4(),
		"www.hardrock.com/",
		"rockrockrockrockrockrockrockrockrockrockrockrockrockrockrockrock",
		"professorSnape@gmail.com",
		"aherihyh3230u4204082-0903902ty8hwgherghwihefiufhikhsoihg049-058309uoiejgslhgoidhslvkbklsdjlsjfghel;kshg;knkhdkfn",
		"DwayneTheRockJohnson"
);
	//insert($rock);

	var_dump($rock);