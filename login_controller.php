<?php

class Login_controller extends CI_Controller {
  
	function index()
	{
	
		$this->load->view('login_view');		
	}
	
	function validate_credentials()
	{		
		$this->load->model('reminder_model');
		$query = $this->reminder_model->validate();
		
		if($query) // if the user's credentials validated...
		{
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);
			$this->session->set_userdata($data);
			redirect('reminder_controller/display');
		}
		else // incorrect username or password
		{
			$err['error']="<font style='color:white'>incorrect username or password!</font>";
			$this->load->view('login_view', $err);
		}
	}	

	function logout()
	{
	
		$array_items = array('username' => '', 'is_logged_in' => '');

		$this->session->unset_userdata($array_items);
		$this->index();
	}

}
