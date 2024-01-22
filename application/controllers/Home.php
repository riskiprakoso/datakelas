<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$this->db->select('tabel_kelas.Nama_Siswa, tabel_kelas.Gender, tabel_kelas.Alamat, tabel_2.Nama_kelas');
		$this->db->from('tabel_kelas');
		$this->db->join('tabel_2', 'tabel_kelas.ID_Kelas = tabel_2.ID_Kelas', 'inner');
			
		$query = $this->db->get();
		$data["datakelas"] = $query->result_array();

		$this->load->view('templates/header');
		$this->load->view('home/index', $data);
		$this->load->view('templates/footer');
	}
}