<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_base extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('m_provinsi');
	}
	
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
	
	public function view_pro()
	{
		$data['component'] = 'com_pro/view';
		$this->load->view('index',$data);
	}
	
	public function view_ins()
	{
		$data['component'] = 'com_instansi/view';
		$this->load->view('index',$data);
	}
	
	public function view_bid()
	{
		$data['component'] = 'com_bid/view';
		$this->load->view('index',$data);
	}
	
	public function view_kasus()
	{
		$data['component'] = 'com_kasus/view';
		$this->load->view('index',$data);
	}
	

	public function table_kab()
	{
		$data['component'] = 'com_kab/data';
		$this->load->view('index',$data);
	}

	public function table_pro()
	{
		$data['component'] = 'com_pro/data';
		$this->load->view('index',$data);
	}

	public function table_ins()
	{
		$data['component'] = 'com_instansi/data';
		$this->load->view('index',$data);
	}
	
	public function table_bid()
	{
		$data['component'] = 'com_bid/data';
		$this->load->view('index',$data);
	}
	
	public function table_kasus()
	{
		$data['component'] = 'com_kasus/data';
		$this->load->view('index',$data);
	}
	
}