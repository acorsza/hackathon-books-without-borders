<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */

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
			$type = $data['nav'];
			$this->load->view('header');
			$this->load->view($type);
			$this->load->view('home',$session_data);
			$this->load->view('footer');
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

	public function index()
	{
		$session_data = $this->check_session();			
	}

	

	public function logout()
	{
		session_start(); 
		
		$this->session->unset_userdata('logged_in');

		session_destroy();
	   
	   redirect('home', 'refresh');
	 }
}