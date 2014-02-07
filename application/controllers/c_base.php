<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_base extends CI_Controller {
	public function index() 
	{
		$data['component'] = 'com_home/home';
		$this->load->view('index',$data);
	}
	
	public function kabview()
	{
		$data['component'] = 'com_kab/kab_view';
		$this->load->view('index',$data);
	}
	
	public function kabviewinput()
	{
		$data['component'] = 'com_kab/kab_view_input';
		$this->load->view('index',$data);
	}
}