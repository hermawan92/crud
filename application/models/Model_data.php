<?php
//Model_data.php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Model_data extends CI_Model{

	public function load_karyawan(){
		$sql = $this->db->query("SELECT * FROM tb_karyawan WHERE flag = 1");
		return $sql->result_array();
	}

	public function simpan($post){
		//pastikan nama index post yang dipanggil sama seperti di form input
		$nama = $this->db->escape($post['nama']);
		$alamat = $this->db->escape($post['alamat']);
		$email = $this->db->escape($post['email']);
		$jabatan = $this->db->escape($post['jabatan']);


		$sql = $this->db->query("INSERT INTO tb_karyawan VALUES (NULL, $nama, $alamat, $email,$jabatan, 1)");
		if($sql)
			return true;
		return false;
	}

	public function get_default($id){
		$sql = $this->db->query("SELECT * FROM tb_karyawan WHERE id = ".intval($id));
		if($sql->num_rows() > 0)
			return $sql->row_array();
		return false;
	}

	public function update($post, $id){
		//parameter $id wajib digunakan agar program tahu ID mana yang ingin diubah datanya.
		$nama = $this->db->escape($post['nama']);
		$alamat = $this->db->escape($post['alamat']);
		$email = $this->db->escape($post['email']);
		$jabatan = $this->db->escape($post['jabatan']);

		$sql = $this->db->query("UPDATE tb_karyawan SET name = $nama, alamat = $alamat, email = $email, jabatan = $jabatan WHERE id = ".intval($id));

		return true;
	}

	public function hapus($id){
		$sql = $this->db->query("UPDATE tb_karyawan SET flag = 0 WHERE id = ".intval($id));
	}	

}