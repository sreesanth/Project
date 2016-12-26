<?php 
	/**
	* 
	*/
	class LoginC extends CI_Controller
	{
        public function index()
        {
            $this->load->view('signup');
        }
        /////////// Call Login Service \\\\\\\\\\\\\\
		public function loginController()
		{
			$user['email']=$this->input->post("email");
            $user['password']=$this->input->post("password");
            $url='http://services.trainees.baabtra.com/service/index.php/LoginC/loginControl';
            $options = array(
    					'http' => array(
        					'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
        					'method'  => 'POST',
        					'content' => http_build_query($user),
    						),
    					);
            $context  = stream_context_create($options);
            $result = file_get_contents($url,false, $context);
            // print_r($result);
            $json=json_decode($result,true);
            print_r($json);
            if ($json['ResponseCode']==200) 
            {
            	$this->load->view('wlcm');
            }
            elseif ($json['ResponseCode']==500) 
            {
            	$this->load->view('usernameerr');
            }
            elseif ($json['ResponseCode']==404) 
            {
            	$this->load->view('passworderr');
            }
            
		}
	}

 ?>