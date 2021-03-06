<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('id'))
		{
			redirect('home');
		 }
		 $this->load->library('form_validation');
		 $this->load->library('encrypt');
		 $this->load->model('login_model');
		 $this->load->model('users_model');
		 }

	function index()
	{
		$this->load->view('login');
	}
	
	function validation()
	{
		$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if($this->form_validation->run())
		{
			$result = $this->login_model->can_login($this->input->post('email'), $this->input->post('password'));
			if(!$result == '')
			{
				$this->session->set_flashdata('message',$result);
				redirect('login');
			}
			else
			{
				$user_id = $this->session->userdata('id');
				$this->users_model->set_user($user_id);
				if($this->session->userdata('is_admin')=="yes"){
					redirect('staff_home');					
				}
				else{
					redirect('home');
				}
			}
		}
		else
		{
			$this->index();
		}
	}
}

?>
