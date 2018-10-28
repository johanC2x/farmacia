<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("Secure_Controller.php");

class Home extends Secure_Controller 
{
	public function __construct()
	{
		parent::__construct();	
	}

	public function index()
	{
		$this->load->helper('array');
    	$this->load->helper('url');

    $empresa_id = array('empresa_id' => $this->input->post('empresa_id'));
		$this->load->view('home', $empresa_id);
	}

	public function logout()
	{
		$this->Employee->logout();

		if($this->config->item('statistics') == TRUE)
		{
			$this->load->library('tracking_lib');

			$this->tracking_lib->track_page('logout', 'logout');
		}
	}
}
?>