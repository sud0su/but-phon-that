<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_jenisdata extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_jenisdata');
	}
	
	public function simpan()
	{
		$kode_jenis = $this->input->post('kdjns');
		$nama_data  = $this->input->post('namadata');
		
		$data = array (
			"kd_jns" => $kode_jenis,
			"nama_data" => $nama_data
		);
		
		$simpanData = $this->m_jenisdata->save($data);
		if ($simpanData){
			echo 'Data berhasil disimpan';
		} else {
			echo 'Data gagal disimpan';
		}
	}

}