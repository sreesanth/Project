<?php
/**
* 
*/
class LoginC extends AnotherClass
{
	
	public function loginControl()
	{
		$user['email']=$this->input->get_post('email');
		$user['password']=$this->input->get_post('password');
		print_r($user);
	}
}
?>