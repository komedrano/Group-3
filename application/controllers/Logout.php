<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
function clearUser()
	{
		$data = $this->session->all_userdata();
		foreach($data as $row => $rows_value)
		{
			$this->session->unset_userdata($row);
		}
		redirect('login');
	}
}
?>
