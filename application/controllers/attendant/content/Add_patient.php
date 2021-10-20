<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_Patient extends MY_Controller {

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
		// redirect('attendant/queue');

		$this->set_view('patient/add_patient');
		$this->title = "ER Add Patient";
		$this->page_active = "ER Add Patient";
		$this->component = true; //temporary becuase no sidebar func yet
		$this->sidebar_collapse = false;
		
        $this->css_plugins = [
            'bs-stepper/css/bs-stepper.min.css',
            'select2/css/select2.min.css',
            'select2-bootstrap4-theme/select2-bootstrap4.min.css',
            'bootstrap-slider/css/bootstrap-slider.min.css',
            'tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
        ];
		$this->javascript_plugins = [
            'select2/js/select2.full.min.js',
            'bs-stepper/js/bs-stepper.min.js',
            'inputmask/jquery.inputmask.min.js',
            'moment/moment.min.js',
            'tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
		];
		$this->custom_javascript = [
			'patient/encode_data.js'
		];

		// $js_vars['phId'] = $this->country_model->get(['country_desc' => 'PHILIPPINES'])->countrycode;
		$js_vars['phId'] = 'PHILI';
        $js_vars['save_endpoint'] = '/record/encode_data/save';
        $this->javascript_vars = $js_vars;

        $data['title'] = $this->title;
		
		$this->build_content($data);
        $this->render_page();
	}
}
