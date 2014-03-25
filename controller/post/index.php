<?php
include(CONTROLLER."/control.php");
include(MODEL_POST."/PostModel.php");


function postDispatch()
{
	$ac = $GLOBALS['URL_PATH'][0];

	switch ($ac){
		case 'list':
			$className = 'PostList';
			include(CONTROLLER_POST."/list.php");
			break;
		default: 
			$className = 'PostAsk';
			include(CONTROLLER_POST."/ask.php");
			break;

	}
new $className();
}

postDispatch();

?>
