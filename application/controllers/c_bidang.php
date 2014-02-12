<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_bidang extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model(array('m_kabupaten','m_provinsi','m_instansi','m_bidang'));
	}
	
	public function simpan()
	{
		$kode_pro = $this->input->post('kdprov');
		$kode_kab = $this->input->post('kdkab');
		$kode_ins = $this->input->post('kdins');		
		$kode_bid = $this->input->post('kdbid');
		$nama_bid = $this->input->post('namabid');
		
		$data = array (
				"kd_prov" => $kode_pro,
				"kd_kab" => $kode_kab,
				"kd_instansi" => $kode_ins,
				"kd_bidang" => $kode_bid,				
				"nama_bidang" => $nama_bid,
		);
		
		$simpanData = $this->m_bidang->save($data);
		if ($simpanData){
			echo 'Data berhasil disimpan';
		} else {
			echo 'Data gagal disimpan';
		}
	}

}