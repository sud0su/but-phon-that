<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_base extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model(array('m_provinsi','m_kabupaten','m_instansi','m_bidang','m_kasus','m_semester','m_jenisdata'));
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
	
	public function view_jnsdata()
	{
		$data['component'] = 'com_jnsdata/view';
		$this->load->view('index',$data);
	}
	

	public function table_kab()
	{
		$data['kabupaten'] = $this->m_kabupaten->getData();
		$data['component'] = 'com_kab/data';
		$this->load->view('index',$data);
	}

	public function table_pro()
	{
		$data['provinsi'] = $this->m_provinsi->getData();
		$data['component'] = 'com_pro/data';
		$this->load->view('index',$data);
	}

	public function table_ins()
	{
		$data['instansi'] = $this->m_instansi->getData();
		$data['component'] = 'com_instansi/data';
		$this->load->view('index',$data);
	}
	
	public function table_bid()
	{
		$data['bidang'] = $this->m_bidang->getData();
		$data['component'] = 'com_bid/data';
		$this->load->view('index',$data);
	}
	
	public function table_kasus()
	{
		$data['kasus'] = $this->m_kasus->getData();
		$data['semester'] = $this->m_semester->getData();
		$data['component'] = 'com_kasus/data';
		$this->load->view('index',$data);
	}
	
	public function table_jnsdata()
	{
		$data['jenisdata'] = $this->m_jenisdata->getData();
		$data['component'] = 'com_jnsdata/data';
		$this->load->view('index',$data);
	}
	
}