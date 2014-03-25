<?php

class PostNotice extends control{


	public function checkPara(){
		
		return true;

	}

	public function action(){

		$this->format($datas);

	}


	public function includeFiles()
	{

		include(VIEW.'/notice.php');

	}
	
	public function format($datas)
	{
		$data['activeNotice'] = 'class="active"';
		
		$GLOBALS['DATA'] = $data;
		ViewNotice::render($datas);
		
		
		
		//print_r($datas);
	}

}

?>
