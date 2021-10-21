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
			'summernote/summernote-bs4.css',
        ];
        $this->javascript_plugins = [
            'moment/moment.min.js',
            'tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js',
            'datatables/jquery.dataTables.min.js',
            'datatables-bs4/js/dataTables.bootstrap4.min.js',
            'datatables-responsive/js/dataTables.responsive.min.js',
            'datatables-responsive/js/responsive.bootstrap4.min.js',
			'summernote/summernote-bs4.min.js',
        ];

        $data['title'] =  $this->title;

        $this->build_content($data);
        $this->render_page();
	}

	public function gen_or_table()
	{
		$plan_gen_order = $this->session->userdata('plan_gen_order');
		echo json_encode($plan_gen_order);
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

	public function update_gen_order()
	{
		$postData = $this->input->post();
		$index = $postData['index'];
		$mor = $postData['mor'];
		$gen_or_data = $postData['gen_or_data'];
		$remarks = $postData['remarks'];

		$plan_gen_order = $this->session->userdata('plan_gen_order');
		$plan_gen_order[$index]['mor'] = $mor;
		$plan_gen_order[$index]['gen_or_data'] = $gen_or_data;
		$plan_gen_order[$index]['remarks'] = $remarks;

		$this->session->set_userdata('plan_gen_order', $plan_gen_order);
		echo json_encode($plan_gen_order[$index]);
	}

	public function delete_gen_order()
	{
		$postData = $this->input->post();
		$index = $postData['index'];

		$plan_gen_order = $this->session->userdata('plan_gen_order');
		array_splice($plan_gen_order, $index, 1);

		$this->session->set_userdata('plan_gen_order', $plan_gen_order);
		echo json_encode($index);
	}

	public function med_or_table()
	{
		$plan_med_order = $this->session->userdata('plan_med_order');
		echo json_encode($plan_med_order);
	}

	public function add_med_order()
	{
		$postData = $this->input->post();
		$mor = $postData['mor'];
		$name = $postData['name'];
		$dosage = $postData['dosage'];
		$prep = $postData['prep'];
		$route = $postData['route'];
		$frequency = $postData['frequency'];
		$duration = $postData['duration'];

		$plan_med_order = $this->session->userdata('plan_med_order');
		if(isset($plan_med_order)){
			$c = count($plan_med_order);
		} else {
			$c = 0;
		}

        $format = "%Y-%m-%d %H:%i:%s";

		$plan_med_order[$c] = array(
			"datetime" => mdate($format),
			"mor" => $mor,
			"name" => $name,
			"dosage" => $dosage,
			"prep" => $prep,
			"route" => $route,
			"frequency" => $frequency,
			"duration" => $duration,
		);

		$this->session->set_userdata('plan_med_order', $plan_med_order);
		echo json_encode($plan_med_order[$c]);
	}

	public function update_med_order()
	{
		$postData = $this->input->post();
		$index = $postData['index'];
		$mor = $postData['mor'];
		$name = $postData['name'];
		$dosage = $postData['dosage'];
		$prep = $postData['prep'];
		$route = $postData['route'];
		$frequency = $postData['frequency'];
		$duration = $postData['duration'];

		$plan_med_order = $this->session->userdata('plan_med_order');
		$plan_med_order[$index]['mor'] = $mor;
		$plan_med_order[$index]['name'] = $name;
		$plan_med_order[$index]['dosage'] = $dosage;
		$plan_med_order[$index]['prep'] = $prep;
		$plan_med_order[$index]['route'] = $route;
		$plan_med_order[$index]['frequency'] = $frequency;
		$plan_med_order[$index]['duration'] = $duration;

		$this->session->set_userdata('plan_med_order', $plan_med_order);
		echo json_encode($plan_med_order[$index]);
	}

	public function delete_med_order()
	{
		$postData = $this->input->post();
		$index = $postData['index'];

		$plan_med_order = $this->session->userdata('plan_med_order');
		array_splice($plan_med_order, $index, 1);

		$this->session->set_userdata('plan_med_order', $plan_med_order);
		echo json_encode($index);
	}

	public function diagproc_or_table()
	{
		$plan_diagproc_order = $this->session->userdata('plan_diagproc_order');
		echo json_encode($plan_diagproc_order);
	}

	public function add_diagproc_order()
	{
		$postData = $this->input->post();
		$mor = $postData['mor'];

		$plan_diagproc_order = $this->session->userdata('plan_diagproc_order');
		if(isset($plan_diagproc_order)){
			$c = count($plan_diagproc_order);
		} else {
			$c = 0;
		}

		$startingIndex = $c;
        $format = "%Y-%m-%d %H:%i:%s";

		if(isset($postData['lab_req'])){
			$lab_req = $postData['lab_req'];
			foreach($lab_req as $value){
				$plan_diagproc_order[$c] = array(
					"datetime" => mdate($format),
					"mor" => $mor,
					"req" => $value,
					"remarks" => "",
				);
				$c = $c + 1;
			}
		}

		if(isset($postData['rad_req'])){
			$rad_req = $postData['rad_req'];
			foreach($rad_req as $value){
				$plan_diagproc_order[$c] = array(
					"datetime" => mdate($format),
					"mor" => $mor,
					"req" => $value,
					"remarks" => "",
				);
				$c = $c + 1;
			}
		}

		$this->session->set_userdata('plan_diagproc_order', $plan_diagproc_order);
		echo json_encode(array_slice($plan_diagproc_order, $startingIndex, $c - $startingIndex));
	}

	public function update_diagproc_order()
	{
		$postData = $this->input->post();
		$index = $postData['index'];
		$diagproc = $postData['diagproc'];
		$priority = $postData['priority'];
		$remarks = $postData['remarks'];

		$plan_diagproc_order = $this->session->userdata('plan_diagproc_order');
		$plan_diagproc_order[$index]['req'] = $diagproc;
		$plan_diagproc_order[$index]['mor'] = $priority;
		$plan_diagproc_order[$index]['remarks'] = $remarks;

		$this->session->set_userdata('plan_diagproc_order', $plan_diagproc_order);
		echo json_encode($plan_diagproc_order[$index]);
	}

	public function delete_diagproc_order()
	{
		$postData = $this->input->post();
		$index = $postData['index'];

		$plan_diagproc_order = $this->session->userdata('plan_diagproc_order');
		array_splice($plan_diagproc_order, $index, 1);

		$this->session->set_userdata('plan_diagproc_order', $plan_diagproc_order);
		echo json_encode($index);
	}

	public function finalize()
	{
		$this->session->unset_userdata('plan_gen_order');
        $this->session->unset_userdata('plan_med_order');
        $this->session->unset_userdata('plan_diagproc_order');

		$response = array(
			"message" => 'Success saving'
		);

		echo json_encode($response);
	}
}
