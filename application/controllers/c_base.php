<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_base extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
}
