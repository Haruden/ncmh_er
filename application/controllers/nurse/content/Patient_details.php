<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_details extends MY_Controller {

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
	public function __construct() {
        parent::__construct();
    }

	public function index()
	{
        $this->set_view('patient/details');
        $this->title = "Patient Details";
        $this->page_active = "Patient Details";
        $this->component = true;
        $this->sidebar_collapse = true;

		$this->javascript_plugins = [
            'moment/moment.min.js',
		];

        $data['title'] =  $this->title;

        $this->build_content($data);
        $this->render_page();
	}
}
