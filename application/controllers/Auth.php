<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function login(){
		$data = $this->input->post();

		if($this->M_user->checkLogin($this->input->post('email'),($this->input->post('password')))){
			$user = $this->M_user->selectByEmailPass($this->input->post('email'),($this->input->post('password')))->row_array();

			$userdata = array(
				'id'  => $user['id'],
				'nama'  => $user['nama'],
				'email'  => $user['email'],
				'as'  => $user['as'],
				'kategori'  => $user['kategori'],
				'logged_in' => true
			);      

			$this->session->set_userdata($userdata);
			redirect('Talis');			
		}else{
			redirect('Talis/login');
		}

		var_dump($userdata);
	}


	public function register(){
		$data = $this->input->post();
		//$data['password'] = $data
		$this->M_user->insert($data);
		redirect("Talis/login");
	}

	
	public function logout(){
    	//Menghapus semua session (sesi)
		$this->session->sess_destroy();
		redirect("Talis/login");
	}
}
