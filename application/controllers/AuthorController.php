<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthorController extends CI_Controller {

	public function index()
	{
		$data['post'] = $this->model_author->tampil_data()->result();
		$this->load->view('tamplate/header');
		$this->load->view('vContent',$data);
	}
}
