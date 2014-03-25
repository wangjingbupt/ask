<?php

class PostDelivery extends control{


	public function checkPara(){
		
		return true;

	}

	public function action(){

		$this->format($datas);

	}


	public function includeFiles()
	{

		include(VIEW.'/delivery.php');

	}
	
	public function format($datas)
	{
		$data['activeDelivery'] = 'class="active"';
		
		$GLOBALS['DATA'] = $data;
		ViewDelivery::render($datas);
		
		
		
		//print_r($datas);
	}

}

?>
