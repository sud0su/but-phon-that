<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_kabupaten extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model(array('m_provinsi','m_kabupaten'));
	}
	
	public function simpan()
	{
		$kode_prov = $this->input->post('kdprov');
		$kode_kab = $this->input->post('kdkab');
		$nama_kab = $this->input->post('namakab');
		
		$data = array (
			"kd_prov" => $kode_prov,
			"kd_kab" => $kode_kab,
			"nama_kab" => $nama_kab
		);
		
		$simpanData = $this->m_kabupaten->save($data);
		if ($simpanData){
			echo 'Data berhasil disimpan';
		} else {
			echo 'Data gagal disimpan';
		}
	}

}