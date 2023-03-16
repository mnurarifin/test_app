<?php 

class UserController extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role') != '1')
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger 
					alert-dismissible fade show" role="alert">
					  <strong>Maaf,</strong> Kok Anda Belum Login Ya ??!!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('AuthController');
		}
	}

	public function index()
	{
		$data['post'] = $this->model_user->tampil_data()->result();
		$this->load->view('login/header');
		$this->load->view('login/sidebar');

		$this->load->view('admin/user/vUser', $data);
		$this->load->view('login/footer');

		}

		public function tambah_user()
	{
		
		$this->load->view('login/header');
		$this->load->view('login/sidebar');
		$this->load->view('admin/user/vFormUser');
		$this->load->view('login/footer');
	}

	public function tambah_aksi()
	{

		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambah_user();
		}else{

			$username  			= $this->input->post('username');
			$password			= $this->input->post('password');
			$name				= $this->input->post('name');
			$role				= $this->input->post('role');
	
			$data =array(
	
				'username' 			=>$username,
				'password' 			=>$password,
				'name' 				=>  $name,
				'role' 				=> $role
	
				);

			$this->model_user->tambah_content($data, 'account');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger 
					alert-dismissible fade show" role="alert">
					  Berhasil Ditambahkan !!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('UserController');
	}
	}

		public function _rules()
	{
		$this->form_validation->set_rules('username','username','required',[
				'required' => 'username wajib diisi!'
			]);
		$this->form_validation->set_rules('password','password','required',[
				'required' => 'password wajib diisi!'
			]);
		$this->form_validation->set_rules('name','name','required',[
				'required' => 'Nama wajib diisi!'
			]);
		$this->form_validation->set_rules('role','role','required',[
				'required' => 'Role wajib diisi!'
			]);
		
	}

	public function hapus ($username)
	{
		$where=array('username' => $username);
		$this->model_user->hapus_data($where, 'account');
		redirect('UserController');
	}

	public function edit($username)
	{
		$where = array('username' =>$username);
		$data['usr'] = $this->model_user->edit_content($where, 'account')->result();
		$this->load->view('login/header');

		$this->load->view('login/sidebar');
		$this->load->view('admin/user/vEditUser', $data);
		$this->load->view('login/footer');
	}

	public function update(){
		$username  			= $this->input->post('username');
		$password			= $this->input->post('password');
		$name				= $this->input->post('name');
		$role				= $this->input->post('role');

		$data =array(

			'username' 			=>$username,
			'password' 			=>$password,
			'name' 				=>  $name,
			'role' 				=> $role

			);

		$where = array(
			'username' => $username
			);

		$this->model_user->update_data($where,$data,'account');
		redirect('UserController');
	}	

	

}

 ?>