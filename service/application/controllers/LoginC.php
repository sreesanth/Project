<?php
/**
* 
*/
class LoginC extends CI_Controller
{
	
	public function loginControl()
	{
		$user['vchr_user_email']=$this->input->get_post('email');
		$user['vchr_user_password']=$this->input->get_post('password');
		// print_r($user);
		$this->load->model('LoginM');
		$this->LoginM->loginModel($user);
	}
}
?>