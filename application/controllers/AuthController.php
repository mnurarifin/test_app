<?php

class AuthController extends CI_Controller{

    
	public function index()
	{

		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if ($this->form_validation->run() == FALSE)
		{
            $this->load->view('login/header');
			$this->load->view('form_login');
            $this->load->view('login/footer');

		}else {
			$auth = $this->model_auth->cek_login();

			if($auth == FALSE)
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger 
					alert-dismissible fade show" role="alert">
  <strong>Maaf,</strong> Username atau Password Anda Salah !
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>');
				redirect('auth/login');
			}else {

				$this->session->set_userdata('username',$auth
					->username);
				$this->session->set_userdata('role',$auth
					->role);

				switch($auth->role){
					case 1	 : redirect('ContentController');
								 break;
					case 2 	 : redirect('ContentController');
								 break;
					default  : break;
					
				}

			
			} 

		}

			$this->session->sess_destroy();
	}

	public function logout()
	{
    $username = $this->session->userdata('username');
	$status = $this->session->userdata('role');
    if($status === '0') {

    	 $data =array(

			'role'   => '2'
			
			);


		$this->model_auth->update('username', $username, 'pemilih', $data);
            redirect('auth/terimakasih');
		}else {
			echo "Maaf, Vote Anda Gagal diproses";
		}

		$this->session->sess_destroy();
	}



}



  ?>