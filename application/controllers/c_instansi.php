<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_instansi extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model(array('m_provinsi','m_kabupaten','m_instansi'));
	}
	
	public function simpan()
	{
		$kode_pro = $this->input->post('kdprov');
		$kode_kab = $this->input->post('kdkab');
		$kode_ins = $this->input->post('kdins');
		$nama_ins = $this->input->post('namains');
		
		$data = array (
			"kd_prov" => $kode_pro,
			"kd_kab" => $kode_kab,
			"kd_instansi" => $kode_ins,
			"nama_instansi" => $nama_ins
		);
		
		$simpanData = $this->m_instansi->save($data);
		if ($simpanData){
			echo 'Data berhasil disimpan';
		} else {
			echo 'Data gagal disimpan';
		}
	}

}