<?php 

class Model_auth extends CI_Model{


	public function cek_login()
	{
		$username  	  	  = set_value('username');
		$password  	  	  = set_value('password');

		$result	   = $this->db->where('username',$username)
							  ->where('password',$password)
							  ->limit(1)
							  ->get('account');
		if($result->num_rows() > 0){
			return $result->row();
		}else{
			return array();
		}



	}


	 public function update($q, $id, $table, $data)
    {
    
        $this->db->where($q, $id);
        $this->db->update($table, $data);
    
    }

}



 ?>