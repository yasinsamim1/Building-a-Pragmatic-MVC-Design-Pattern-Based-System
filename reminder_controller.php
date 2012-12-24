<?php
class Reminder_controller extends CI_Controller {
  
	function display($year = null, $month = null) {
		
		if (!$year) {
			$year = date('Y');
		}
		if (!$month) {
			$month = date('m');
		}
		
		$this->load->model('Reminder_model');
		
		if ($day = $this->input->post('day')) {
			$this->Reminder_model->add_calendar_data(
				"$year-$month-$day",
				$this->input->post('data')
			);
		}
		
		$data['reminder'] = $this->Reminder_model->generate($year, $month);
		
		$this->load->view('reminder_view', $data);
		
	}
	
}
