<?php 

class Model_author extends CI_Model{
	public function tampil_data(){
		return $this->db->get('post');
	}

	public function tambah_content($data,$table){
		$this->db->insert($table,$data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function edit_content($where,$table){
		return $this->db->get_where($table,$where);

	}

	public function update_data($where,$data,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	

	

	}


 ?>