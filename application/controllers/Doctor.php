<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Doctor extends CI_Controller {

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
	public function index()
	{
		$data['title'] = "Doctor's Queue";

        $this->load->view('templates/header', $data);
        $this->load->view('doctor/queue');
	}

	public function er_notes()
	{
		$data['title'] = "ER Notes";

        $this->load->view('templates/header', $data);
        $this->load->view('doctor/queue/er_notes');
	}

	public function plan()
	{
		$data['title'] = "Plan";

        $this->load->view('templates/header', $data);
        $this->load->view('doctor/queue/plan');
	}

}
