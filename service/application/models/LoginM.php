<?php 
/**
* 
*/
class LoginM extends CI_Model
{
	
	public function loginModel($user)
	{
		 // print_r($user);
		$query = $this -> db
			           ->select('*')
			           ->from('user')
			           ->where($user)
			           ->get();
        $result=$query->result_array();
        if ($query->num_rows()>0) {
        	// print_r($result);
        	$json = array('ResponseCode' => 200,'Message'=>'Success','id'=>$result[0]['pk_int_user_id'],'fname'=>$result[0]['vchr_user_fname'],'lname'=>$result[0]['vchr_user_lname'],'photo'=>$result[0]['vchr_user_photo']);
        	echo json_encode($json);
        }
        else
        {
        	$query = $this -> db
			           ->select('*')
			           ->from('user')
			           ->where('vchr_user_email',$user['vchr_user_email'])
			           ->get();
        $result=$query->result_array();
        if ($query->num_rows()>0) {
        	// print_r($result);
        	$json = array('ResponseCode' => 404,'Message'=>'username incorrect','id'=>$result[0]['pk_int_user_id'],'fname'=>$result[0]['vchr_user_fname'],'lname'=>$result[0]['vchr_user_lname'],'photo'=>$result[0]['vchr_user_photo']);
        	echo json_encode($json);

        }
        else
        {
        	$json = array('ResponseCode' => 500,'Message'=>'username incorrect and password incorrect');
        	echo json_encode($json);
        }

	}
}
}
 ?>