<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Talis extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();		
		//$this->load->model('M_data');
        $this->load->helper('url');
	}

	public function index()
	{	
		$this->load->view('layout/V_header');
		$this->load->view('Index');
		$this->load->view('layout/V_footer');
	}

	public function login()
	{	
		$this->load->view('layout/V_header');
		$this->load->view('Login');
		$this->load->view('layout/V_footer');
	}

	public function daftar()
	{	
		$this->load->view('layout/V_header');
		$this->load->view('Daftar');
		$this->load->view('layout/V_footer');
	}
}
