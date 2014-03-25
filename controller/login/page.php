<?php

class LoginPage extends control{


	public function checkPara(){
		return true;
	}

	public function action(){
		$this->format($datas);
	}


	public function includeFiles()
	{
		include(VIEW.'/login.php');
	}
	
	public function format($datas)
	{
		ViewLogin::render($datas);
	}

}

?>
