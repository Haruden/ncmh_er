<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Not being used
class Special_instructions extends MY_Controller {

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
        $this->set_view('patient/special_instructions');
        $this->title = "Special Instructions";
        $this->page_active = "Special Instructions";
        $this->component = true;
        $this->sidebar_collapse = true;

		$this->css_plugins = [
			'tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
			'datatables-bs4/css/dataTables.bootstrap4.min.css',
			'datatables-responsive/css/responsive.bootstrap4.min.css',
			'datatables-buttons/css/buttons.bootstrap4.min.css',
			'summernote/summernote-bs4.css',
			'datatables-select/css/select.bootstrap4.min.css',
		];
		$this->javascript_plugins = [
			'moment/moment.min.js',
			'tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
			'datatables/jquery.dataTables.min.js',
			'datatables-bs4/js/dataTables.bootstrap4.min.js',
			'datatables-responsive/js/dataTables.responsive.min.js',
			'datatables-responsive/js/responsive.bootstrap4.min.js',
			'summernote/summernote-bs4.min.js',
			'datatables-select/js/dataTables.select.min.js',
		];

        $data['title'] =  $this->title;
		
        $this->build_content($data);
        $this->render_page();
	}
}
