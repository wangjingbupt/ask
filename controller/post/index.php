<?php
include(CONTROLLER."/control.php");
include(MODEL_POST."/PostModel.php");


function postDispatch()
{
	$ac = $GLOBALS['URL_PATH'][0];

	switch ($ac){
		//case 'list':
		case 'notice':
			$className = 'PostNotice';
			include(CONTROLLER_POST."/notice.php");
			break;
		case 'delivery':
			$className = 'PostDelivery';
			include(CONTROLLER_POST."/delivery.php");
			break;
		default: 
			$className = 'PostList';
			include(CONTROLLER_POST."/list.php");
			break;
			/*
		default: 
			$className = 'PostAsk';
			include(CONTROLLER_POST."/ask.php");
			break;
			*/

	}
new $className();
}

postDispatch();

?>
