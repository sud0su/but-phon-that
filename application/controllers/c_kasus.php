<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_kasus extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model(array('m_provinsi','m_kabupaten','m_instansi','m_semester','m_kasus'));
	}
	
	public function simpan()
	{
		$kode_pro = $this->input->post('kdprov');
		$kode_kab = $this->input->post('kdkab');
		$kode_ins = $this->input->post('kdins');
		$kode_kas = $this->input->post('kdkas');
		$semester = $this->input->post('semes');
		$tahun = $this->input->post('tahun');
		$nama_kas = $this->input->post('namakas');
		
		$data = array (
			"kd_prov" => $kode_pro,
			"kd_kab" => $kode_kab,
			"kd_instansi" => $kode_ins,
			"kd_kasus"=> $kode_kas,
			"kd_semester"=> $semester,
			"tahun"=> $tahun,
			"nama_kasus" => $nama_kas
		);
		
		$simpanData = $this->m_kasus->save($data);
		if ($simpanData){
			echo 'Data berhasil disimpan';
		} else {
			echo 'Data gagal disimpan';
		}
	}

        public function kasus(){
            $kasus = $this->input->post('bidang');
            $dataKasus = $this->m_kasus->kasus($kasus);
            foreach ($dataKasus->result() as $ks){
                echo '<option value='.$ks->kd_kasus.'>'.$ks->nama_kasus.'</option>';
            }
            
        }
        
        public function cekBidang(){
            $bidang = $this->input->post('bidang');
            $dataBidang = $this->m_kasus->cekBidang($bidang);
            foreach ($dataBidang->result() as $db){
                echo $db->nama_bidang;
            }
            
        }
        
        public function cekKasus(){
            $kasus = $this->input->post('kasus');
            $cdataKasus = $this->m_kasus->cekKasus($kasus);
            foreach ($cdataKasus->result() as $cks){
                echo $cks->nama_kasus;
            }
            
        }
        
        public function kasusForm(){
            $kasus = $this->input->post('kasus');
            $form = $this->m_kasus->cekKasus($kasus);
            foreach ($form->result() as $fm){
                //echo $cks->nama_kasus;
                echo $this->load->view('mod_kasus/'.$fm->kd_kasus);
            }
        }

}