<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_provinsi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_provinsi');
	}
	
	public function simpan()
	{
		$kode_prov = $this->input->post('prov');
		$nama_prov = $this->input->post('namaprov');
		
		$data = array (
			"kode_prov" => $kode_prov,
			"nama_prov" => $nama_prov
		);
		
		$simpanData = $this->m_provinsi->save($data);
		if ($simpanData){
			echo 'Data berhasil disimpan';
		} else {
			echo 'Data gagal disimpan';
		}
	}

}