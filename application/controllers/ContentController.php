<?php 

class ContentController extends CI_Controller{

	

	public function index()
	{
		$data['post'] = $this->model_content->tampil_data()->result();
		$this->load->view('login/header');
		$this->load->view('login/sidebar');

		$this->load->view('admin/vContent', $data);
		$this->load->view('login/footer');

		}

		public function tambah_content()
	{
		
		$this->load->view('login/header');
		$this->load->view('login/sidebar');
		$this->load->view('admin/vFormContent');
		$this->load->view('login/footer');
	}

	public function tambah_aksi()
	{

		$this->_rules();

		if($this->form_validation->run() == FALSE) {
			$this->tambah_content();
		}else{

		$title  			= $this->input->post('title');
		$content			= $this->input->post('content');
		$date				= $this->input->post('date');
		$username			= $this->session->userdata('username');

			$data = array(

			'title' 			=>$title,
			'content' 			=>$content,
			'date' 				=>  $date,
			'username' 			=> $username

			);

			$this->model_content->tambah_content($data, 'post');
			$this->session->set_flashdata('pesan','<div class="alert alert-danger 
					alert-dismissible fade show" role="alert">
					  Berhasil Ditambahkan !!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
		redirect('ContentController');
	}
	}

		public function _rules()
	{
		$this->form_validation->set_rules('title','title','required',[
				'required' => 'Title wajib diisi!'
			]);
		$this->form_validation->set_rules('content','Content','required',[
				'required' => 'Content wajib diisi!'
			]);
		$this->form_validation->set_rules('date','date','required',[
				'required' => 'Tanggal wajib diisi!'
			]);
		
	}

	public function hapus ($no)
	{
		$where=array('idpost' => $no);
		$this->model_content->hapus_data($where, 'post');
		redirect('ContentController');
	}

	public function edit($no)
	{
		$where = array('idpost' =>$no);
		$data['kandidat'] = $this->model_content->edit_content($where, 'post')->result();
		$this->load->view('login/header');

		$this->load->view('login/sidebar');
		$this->load->view('admin/vEdit', $data);
		$this->load->view('login/footer');
	}

	public function update(){

		$idpost  			= $this->input->post('idpost');
		$title  			= $this->input->post('title');
		$content			= $this->input->post('content');
		$date				= $this->input->post('date');
		$username			= $this->session->userdata('username');

		$data =array(

			'title' 			=>$title,
			'content' 			=>$content,
			'date' 				=>  $date,
			'username' 			=> $username

			);

		$where = array(
			'idpost' => $idpost
			);

		$this->model_content->update_data($where,$data,'post');
		redirect('ContentController');
	}	

	

}

 ?>