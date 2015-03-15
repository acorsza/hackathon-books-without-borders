<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller{

	public function check_session() {
		if($this->session->userdata('logged_in')) {
			$session_data = $this->session->userdata('logged_in');
			$data['id'] = $session_data['id'];
			$data['name'] = $session_data['name'];
			$data['login'] = $session_data['username'];
			$data['type'] = $session_data['type'];
			
			if($data['type'] == "T") {
				$data['nav'] = "nav_teacher";
			} else if($data['type'] == "D") {
				$data['nav'] = "nav_donor";
			} else if($data['type'] == "S") {
				$data['nav'] = "nav_staff";
			} else {
				$data['nav'] = "nav";
			}
			return $data;
		} else {
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('home');
			$this->load->view('footer');
			$data['nav'] = "nav";
			return $data;
		}

	}

	public function index(){
		$this->show_users();

	}

	public function new_donor() {
		$this->load->model('user_m');
		$data['countrylist'] = $this->user_m->get_countries();

		$this->load->view('header');
		$this->load->view('nav');
		$this->load->view('form_donor',$data);
		$this->load->view('footer');
	}

	public function new_user() {
		$this->load->model('user_m');
		$data['countrylist'] = $this->user_m->get_countries();

		$this->load->view('header');
		$this->load->view('nav_staff');
		$this->load->view('form_user',$data);
		$this->load->view('footer');
	}

	public function show_users(){
		
				$session_data = $this->check_session();
				$data['username'] = $session_data['name'];
				$type = $session_data['nav'];
				$this->load->model('user_m');
				
				$data['donnorsList'] = $this->user_m->get_Donnors();
				$data['teachersList'] = $this->user_m->get_Teachers();
				$data['staffsList'] = $this->user_m->get_Staffs();

				$this->load->view('header',$data);
				$this->load->view($type);
				$this->load->view('show_user',$data);
				$this->load->view('footer');
		 

	}

	public function update_login(){
		$this->load->model('user_m');

		$modifieduser['login'] =  $this->input->post('login');
		$modifieduser['pwd'] =  $this->input->post('pwd');
		$modifieduser['type'] =  $this->input->post('type');

		$this->user_m->update_Login($modifieduser);

		return $this->user_m->get_Login_ID($user);
	}

	 public function update_user(){
		$this->load->model('user_m');

		$modifieduser['login'] =  $this->input->post('login');
		$modifieduser['pwd'] =  $this->input->post('pwd');
		$modifieduser['type'] =  $this->input->post('type');

		$this->user_m->update_Login($modifieduser);

		return $this->user_m->get_Login_ID($user);
	}

	public function create_donor(){
        $this->load->model('user_m');

        $donor['login'] =  $this->input->post('login');
        $donor['pwd'] =  $this->input->post('password');
        $donor['type'] = "D";

        $login_id['id'] = $this->user_m->create_Login($donor);

		$user['name'] =  $this->input->post('name');
		$user['phone1'] =  $this->input->post('phone1');
		$user['phone2'] =  $this->input->post('phone2');
		$user['email'] =  $this->input->post('email');
		$user['country'] =  $this->input->post('country');		
		$user['since'] =  date('Y-m-d H:i:s');

		$result = $this->user_m->get_id($donor['login']);
		$user['user_id'] = $result[0]->id;

		$data = $this->user_m->create_Donor($user);	


		redirect('home', 'refresh');
	}
	public function create_user(){
        $this->load->model('user_m');

        $user_s['login'] =  $this->input->post('login');
        $user_s['pwd'] =  $this->input->post('password');
        $user_s['type'] = $this->input->post('role_user');

        $id = $this->user_m->create_Login($user_s);

		$user['name'] =  $this->input->post('name');
		$user['phone1'] =  $this->input->post('phone1');
		$user['phone2'] =  $this->input->post('phone2');
		$user['email'] =  $this->input->post('email');
		$user['country'] =  $this->input->post('country');		
		$user['since'] =  date('Y-m-d H:i:s');

		$user['user_id'] = $id;

		if($user_s['type'] == "S") {
			$data = $this->user_m->create_Staff($user);	
		} else if ($user_s['type'] == "T") {
			$data = $this->user_m->create_Teacher($user);	
		}
		redirect('home', 'refresh');
	}
}


