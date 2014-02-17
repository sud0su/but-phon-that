<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_jenisdata extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function save($data)
	{
		$query = $this->db->insert('master.m_jnsdata',$data);
		return $query;
	}
	
	public function getData(){
		$data = $this->db->query('Select * from master.m_jnsdata');
		return $data;
	}

}