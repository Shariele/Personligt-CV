<?php

function changePagePhp(){
	$pageChoice = $_REQUEST['c'];

	switch ($pageChoice) {
		//Main pages
		case 'mainPage':
			include "main.php";
			include "footer.php";
		break;

		case 'projects':
			include "projects.php";
			include "footer.php";
		break;

		case 'myCv':
			include "myCv.php";
			include "footer.php";
		break;

		case 'wordpressPlugin':
			include "wordpressPlugin.php";
			include "footer.php";
		break;

		case 'webshop':
			include "webshop.php";
			include "footer.php";
		break;

		case 'blog':
			include "blog.php";
			include "footer.php";
		break;

		case 'pokemonKarlstad':
			include "pokemonKarlstad.php";
			include "footer.php";
		break;

		case 'yatzy':
			include "yatzy.php";
			include "footer.php";
		break;

		case 'memory':
			include "memory.php";
			include "footer.php";
		break;

		case 'breakout':
			include "breakout.php";
			include "footer.php";
		break;

		default:
			include "404.php";
			break;
	}
}

function changeForumPagePhp(){
	$categoryChoice = $_REQUEST['categoryId'];

	switch ($categoryChoice) {
		//Forum pages
		case '1': //General
			include "forumTopicsPage.php";
			include "footer.php";
		break;

		case '2': //Pokemon
			include "forumTopicsPage.php";
			include "footer.php";
		break;

		case '3': //News
			include "forumTopicsPage.php";
			include "footer.php";
		break;
		case '4': //valor
			include "forumTopicsPage.php";
			include "footer.php";
		break;
		case '5': //mystic
			include "forumTopicsPage.php";
			include "footer.php";
		break;
		case '6': //instinct
			include "forumTopicsPage.php";
			include "footer.php";
		break;

		case 'createForumTopic':
			include "createForumTopic.php";
			include "footer.php";
		break;

		default:
			# code...
			break;
	}
}

function changeForumTopicPagePhp($variable){
	$variableForTopicId = $variable;

	if($variable == "none"){
		//If not a newly created topic.
		include "forumTopicDetailed.php";
		include "footer.php";
	}else{
		//Newly created topic.
		include "forumTopicDetailed.php";
		include "footer.php";
	}
}

?>