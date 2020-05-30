<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Siteman extends CI_Controller {

	function index()
	{
		$data['title'] = 'data';
		$this->template->load('opt_admin/opt_template','opt_admin/opt_home',$data);
	}

}

/* End of file Siteman.php */
/* Location: ./application/controllers/Siteman.php */