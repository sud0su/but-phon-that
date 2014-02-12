<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class m_semester extends CI_Model {

	function __construct(){
		parent::__construct();
	}

	public function save($data)
	{
		$query = $this->db->insert('master.m_semester',$data);
		return $query;
	}
	
	public function getData(){
		$data = $this->db->query('Select * from master.m_semester');
		return $data;
	}

};