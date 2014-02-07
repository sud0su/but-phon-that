<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_base extends CI_Controller {
	public function index() 
	{
		$data['component'] = 'com_home/home';
		$this->load->view('index',$data);
	}
	
	public function view_tab()
	{
		$data['component'] = 'com_content/isi';
		$this->load->view('index',$data);
	}

	public function view_kab()
	{
		$data['component'] = 'com_kab/view';
		$this->load->view('index',$data);
	}
	
	public function view_kec()
	{
		$data['component'] = 'com_kec/view';
		$this->load->view('index',$data);
	}
	
	public function view_ins()
	{
		$data['component'] = 'com_instansi/view';
		$this->load->view('index',$data);
	}

	public function table_kab()
	{
		$data['component'] = 'com_kab/data';
		$this->load->view('index',$data);
	}

	public function table_kec()
	{
		$data['component'] = 'com_kec/data';
		$this->load->view('index',$data);
	}

	public function table_ins()
	{
		$data['component'] = 'com_instansi/data';
		$this->load->view('index',$data);
	}
	
}