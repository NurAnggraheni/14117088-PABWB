<?php
class m_barang extends CI_Model{

	function buku_list(){
		$hasil=$this->db->query("SELECT * FROM tb_buku");
		return $hasil->result();
	}

	function simpan_buku($nama,$nomer,$alamat,$pict){
		$hasil=$this->db->query("INSERT INTO tb_buku(nama, no_telp,alamat, pict  )VALUES('$nama','$nomer','$alamat','$pict)");
		return $hasil;
	}

	function get_data_by_nomer($nomer){
		$hsl=$this->db->query("SELECT * FROM tb_buku WHERE no_telp='$nomer'");
		if($hsl->num_rows()>0){
			foreach ($hsl->result() as $data) {
				$hasil=array(
					'nama' => $data->nama,
					'no_telp' => $data->nomer,
					'alamat' => $data->alamat,
					'pict' => $data->pict,
					);
			}
		}
		return $hasil;
	}

	function update_list($nama,$nomer,$alamat,$pict){
		$hasil=$this->db->query("UPDATE tb_buku SET nama='$nama',no_telp='$nomer' WHERE no_telp='$nomer'");
		return $hasil;
	}

	function hapus_list($nomer){
		$hasil=$this->db->query("DELETE FROM tb_buku WHERE no_telp='$nomer'");
		return $hasil;
	}
	
}