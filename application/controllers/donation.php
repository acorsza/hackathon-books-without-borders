<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Donation extends CI_Controller {

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

	public function index(){
		$this->show_donations();

	}

	public function form_donation(){
		$this->load->model('donation_m');
		$session_data = $this->session->userdata('logged_in');
		$data['name'] = $session_data['name'];
		$data['id'] = $session_data['id'];
		$data['donationsList'] = $this->donation_m->get_Donations();
		
		$this->load->view('header');
		$this->load->view('nav');

		$this->load->view('form_donation',$data);

		$this->load->view('footer');

	}

	public function show_donations(){		
		if($this->session->userdata('logged_in')) {			

				$session_data = $this->session->userdata('logged_in');
				$userID = $session_data['id'];
				
				$this->load->model('donation_m');				
				
				$data['donationsList'] = $this->donation_m->get_Donations();
				
				$this->load->view('header',$data);
				$this->load->view('nav_donor');
				$this->load->view('show_donation',$data);
				$this->load->view('footer');

		} else {
		     //If no session, redirect to login page
		     //redirect('login', 'refresh');
			$this->load->view('header');
			$this->load->view('nav');
			$this->load->view('home');
			$this->load->view('footer');
		}

	}

	public function submit_donations(){
		if($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				$userID = $session_data['id'];
				$date = date('Y:m:d H:i:s');

				$this->load->model('donation_m');
								
                $donation['current_state'] =  "Help Sent";
				$donation['last_state'] =  "Help Pending";
				$donation['updated_at'] =  date('Y:m:d H:i:s');
								
				$result_id=$this->donation_m->submit_Donations($donation);

     			redirect(base_url().'donation','refresh');
				//$this->load->view('main_header',$data);
				//$this->load->view('logged_nav');
				//$this->load->view('result',$data);
				//$this->load->view('main_footer');
		} else {
			     //If no session, redirect to login page
			     //redirect('login', 'refresh');
				$this->load->view('main_header',$data);
				$this->load->view('main_nav');
				$this->load->view('result',$data);
				$this->load->view('main_footer');
		}

	}

	public function create_donation(){
		if($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				$userID = $session_data['id'];
				
				$this->load->model('donation_m');
								
                $donation['description'] =  $this->input->post('description');
				$donation['amount'] =  $this->input->post('amount');
				$donation['observations'] =  $this->input->post('observations');				
				$donation['type'] =  $this->input->post('type');				
				$donation['current_state'] =  "Help Pending";
				$donation['last_state'] =  "Payment Accepted";
				$donation['created_at'] =  date('Y:m:d H:i:s');
				$donation['updated_at'] =  date('Y:m:d H:i:s');
				$donation['donnor_id'] =  $userID;
				
				$result_id=$this->donation_m->create_Donation($donation);

     			redirect(base_url().'donation','refresh');
				//$this->load->view('main_header',$data);
				//$this->load->view('logged_nav');
				//$this->load->view('result',$data);
				//$this->load->view('main_footer');
		} else {
			     //If no session, redirect to login page
			     //redirect('login', 'refresh');
				$this->load->view('main_header',$data);
				$this->load->view('main_nav');
				$this->load->view('result',$data);
				$this->load->view('main_footer');
		}

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */