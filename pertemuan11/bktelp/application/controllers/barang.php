<?php
class Barang extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
	}
	function index(){
		$this->load->view('data_buku');
	}

	function data_buku(){
		$data=$this->m_barang->buku_list();
		echo json_encode($data);
	}

	function get_buku(){
		$kobar=$this->input->get('id');
		$data=$this->m_barang->get_barang_by_kode($kobar);
		echo json_encode($data);
	}

	function simpan_buku(){
		$nama=$this->input->post('nama');
		$nomer=$this->input->post('no_telpn');
		$alamat=$this->input->post('alamat');
		$pict=$this->input->post('pict');
		$data=$this->m_barang->simpan_barang($nama,$nomer,$alamat,$pict);
		echo json_encode($data);
	}

	function update_buku(){
		$nama=$this->input->post('nama');
		$nomer=$this->input->post('nomer');
		$alamat=$this->input->post('alamat');
		$pict=$this->input->post('pict');
		$data=$this->m_barang->update_barang($nama,$nomer,$alamat,$pict);
		echo json_encode($data);
	}

	function hapus_data(){
		$kobar=$this->input->post('no_telp');
		$data=$this->m_barang->hapus_data($nomer);
		echo json_encode($data);
	}

}