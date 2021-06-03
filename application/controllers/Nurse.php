<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nurse extends CI_Controller {

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
		$data['title'] = "Nurse's Queue";

        $this->load->view('templates/header', $data);
        $this->load->view('nurse/queue');
	}

	public function vitals()
	{
		$data['title'] = "Vital Signs";

        $this->load->view('templates/header', $data);
        $this->load->view('nurse/queue/vitals');
	}

	public function pat_details()
	{
		$data['title'] = "Patient Details";

        $this->load->view('templates/header', $data);
        $this->load->view('nurse/queue/pat_details');
	}

}
