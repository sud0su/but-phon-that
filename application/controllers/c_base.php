<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class c_base extends CI_Controller {
<<<<<<< HEAD

	public function index() 
	{
		$data['component'] = 'com_home/home';
		$this->load->view('index',$data);
	}
}
=======
	
	public function index()
	{
		$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
>>>>>>> branch 'master' of https://github.com/sud0su/but-phon-that.git
