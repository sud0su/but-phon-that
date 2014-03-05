<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_kasus extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function save($data)
	{
		$query = $this->db->insert('master.m_kasus',$data);
		return $query;
	}
	
	public function getData(){
		$data = $this->db->query('Select * from master.m_kasus');
		return $data;
	}

        public function kasus($kasus){
            $data = $this->db->query("select * from master.m_kasus");
            return $data;
        }
        
        public function cekBidang($bidang){
            $data = $this->db->query("select * from master.m_bidang where kd_bidang='$bidang'");
            return $data;
        }
        
        public function cekKasus($kasus){
            $data = $this->db->query("select * from master.m_kasus where kd_kasus='$kasus'");
            return $data;
        }
}