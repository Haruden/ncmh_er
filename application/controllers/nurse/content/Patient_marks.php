<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_marks extends MY_Controller {

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
        $this->set_view('patient/id_marks');
        $this->title = "Patient ID Marks";
        $this->page_active = "Patient ID Marks";
        $this->component = true;
        $this->sidebar_collapse = true;

		$this->css_plugins = [
			'summernote/summernote-bs4.css',
		];
		$this->javascript_plugins = [
			'moment/moment.min.js',
			'summernote/summernote-bs4.min.js',
		];

        $data['title'] =  $this->title;

        $this->build_content($data);
        $this->render_page();
	}
}
