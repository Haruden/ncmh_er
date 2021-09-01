<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Plan extends MY_Controller {

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
        $this->set_view('patient/plan');
        $this->title = "Plan";
        $this->page_active = "Plan";
        $this->component = true;
        $this->sidebar_collapse = true;

		$this->css_plugins = [
            'tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css',
            'datatables-bs4/css/dataTables.bootstrap4.min.css',
            'datatables-responsive/css/responsive.bootstrap4.min.css',
            'datatables-buttons/css/buttons.bootstrap4.min.css',
        ];
        $this->javascript_plugins = [
            'moment/moment.min.js',
            'tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
            'datatables/jquery.dataTables.min.js',
            'datatables-bs4/js/dataTables.bootstrap4.min.js',
            'datatables-responsive/js/dataTables.responsive.min.js',
            'datatables-responsive/js/responsive.bootstrap4.min.js',
        ];

        $data['title'] =  $this->title;

        $this->build_content($data);
        $this->render_page();
	}

    public function add_gen_order()
	{
		$postData = $this->input->post();
		$mor = $postData['mor'];
		$gen_or_data = $postData['gen_or_data'];
		$remarks = $postData['remarks'];

		$plan_gen_order = $this->session->userdata('plan_gen_order');
		if(isset($plan_gen_order)){
			$c = count($plan_gen_order);
		} else {
			$c = 0;
		}

        $format = "%Y-%m-%d %H:%i:%s";

		$plan_gen_order[$c] = array(
			"datetime" => mdate($format),
			"mor" => $mor,
			"gen_or_data" => $gen_or_data,
			"remarks" => $remarks,
		);

		$this->session->set_userdata('plan_gen_order', $plan_gen_order);
		echo json_encode($plan_gen_order[$c]);
	}

	public function gen_or_table()
	{
		$plan_gen_order = $this->session->userdata('plan_gen_order');
		echo json_encode($plan_gen_order);
	}
}
