<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_base extends CI_Controller {

	public function index() 
	{
		$data['component'] = 'com_home/home';
		$this->load->view('index',$data);
	}
}
