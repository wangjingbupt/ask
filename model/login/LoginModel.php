<?php
class LoginModel{

	public function __construct() {
	}

	public function login($uname,$passwd)
	{
		if( $uname == "" || $passwd == "")
		{
			return false;
		}
		$token = md5($uname.date('Y-m-d').$passwd);

		return Login::doLoginLocal($token);
	}	
}




?>
