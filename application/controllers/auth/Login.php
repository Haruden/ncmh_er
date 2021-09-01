<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{

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

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->set_view('auth/login');
		$this->title = 'Sign In';
		$this->page_active = 'Sign In';
		$this->component = false;
		$this->custom_javascript = [
			'auth/login.js'
		];
		$this->javascript_plugins = [
			'moment/moment.min.js'
		];
		$this->build_content();
		$this->render_page();

		// if(isset($_POST['username'])){
		// 	if($_POST['username'] == 'attendant'){
		// 		$this->session->set_userdata('role', 'attendant');
		// 		redirect('/Attendant');
		// 	} else if($_POST['username'] == 'nurse'){
		// 		$this->session->set_userdata('role', 'nurse');
		// 		redirect('/Nurse/');

		// 	} else if($_POST['username'] == 'doctor'){
		// 		$this->session->set_userdata('role', 'doctor');
		// 		redirect('/Doctor');
		// 	}
		// }

		// $data['title'] = 'Login';
		// $this->load->view('templates/header', $data);
		// $this->load->view('login');
	}

	public function authenticate()
	{
		$data = $this->input->post();

		if ($data['username'] == 'attendant') {
			$user_data = [
				'username' => $data['username'],
				'first_name' => 'Atten',
				'last_name' => 'Dante',
				'roles' => [
					'as' => 'attendant'
				]
			];
			$this->session->set_userdata('user', $user_data);
			redirect('/attendant/queue');

		} else if ($data['username'] == 'nurse') {
			$user_data = [
				'username' => $data['username'],
				'first_name' => 'Nur',
				'last_name' => 'Se',
				'roles' => [
					'as' => 'nurse'
				]
			];
			$this->session->set_userdata('user', $user_data);
			redirect('/nurse/queue');

		} else if ($data['username'] == 'doctor') {
			$user_data = [
				'username' => $data['username'],
				'first_name' => 'Doc',
				'last_name' => 'Thor',
				'roles' => [
					'as' => 'doctor'
				]
			];
			$this->session->set_userdata('user', $user_data);
			redirect('/doctor/queue');

		}

		// $validation = $this->form_validation;        
		// $validation->set_rules($this->auth->auth_rules);
		// if ($validation->run() !== FALSE) {
		//     if ($this->auth->authenticate($data['username'], $data['password'])) {
		//         $user_data = $this->session->userdata('user');

		//         if (empty($user_data['roles'])) show_unauthorized();
		//         // dd($user_data);
		//         redirect($this->_get_current_user_url());
		//     }
		// }

		$validation_msg = 'Incorrect username or password.';
		if ($this->session->flashdata('login_error')) {
			$validation_msg = $this->session->set_tempdata('login_error');
		}
		$this->session->set_tempdata('validation_errors', ['type' => 'error', 'message' => $validation_msg], 5);

		redirect('/login');
	}

	public function logout()
	{
		// $this->load->model([
		//     'user_session_model' => 'user_session'
		// ]);

		$uname = $this->session->userdata("user")["username"];
		// $user_session = $this->user_session->get(['user_name' => $uname]);

		// $user_data_session = [
		//     "is_login" => 0,  
		// ];

		// $this->user_session->where_id($user_session->id)->update($user_data_session);

		$this->session->sess_destroy();

		redirect('login');
	}

	// public function logout()
	// {
	// 	$this->session->sess_destroy();
	// 	redirect('/Login');
	// }
}
