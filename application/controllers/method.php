<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Method extends CI_Controller {

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
		$this->show_methods();

	}

	public function form_method(){
		$this->load->model('method_m');
		$data = $this->check_session();
		$type = $data['nav'];
		
			
		$this->load->view('header');
		$this->load->view($type);
		$this->load->view('form_method',$data);
		$this->load->view('footer');

	}
	public function show_methods(){		
		$data = $this->check_session();
		$type = $data['nav'];
		$userID = $data['id'];
				
		$this->load->model('method_m');	

		$data['methodsList'] = $this->method_m->get_Methods();

		$this->load->view('header',$data);
		$this->load->view($type);
		$this->load->view('show_method',$data);
		$this->load->view('footer');
	}

	public function show_full_method($id) {
		$this->load->model('method_m');
		$data = $this->check_session();

		$result = $this->method_m->get_Method($id);		

		$type = $data['nav'];
		$data['post_id'] = $id;
		$data['name'] = $result[0]->name;
		$data['description'] = $result[0]->description;
		$data['staff_id'] = $result[0]->staff_id;
		$data['staffname'] = $result[0]->staffname;
		$data['created_at'] = $result[0]->created_at;
		$data['updated_at'] = $result[0]->updated_at;
		$data['filepath'] = $result[0]->filepath;

		//$report = $data['id'];
		$result = $this->method_m->get_Method($id);
		$this->load->view('header');
		$this->load->view($type);
		$this->load->view('show_full_method',$data);
		$this->load->view('footer');
	}

     
	public function create_method(){
		if($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				$userID = $session_data['id'];

				$files = $_FILES;
				
				$this->load->model('method_m');
								
                $method['created_at'] =  date('Y:m:d H:i:s');
        		$method['description'] =  $this->input->post('description');
				$method['filepath'] =  "http://localhost/bwb/assets/uploads/".$_FILES['userfile']['name'];
				$method['name'] =  $this->input->post('name');
				$method['staff_id'] = $userID;
				$method['updated_at'] =  date('Y:m:d H:i:s');

				$config['upload_path'] = 'T:/Programas/Wamp/www/bwb/assets/uploads/';
            	$config['allowed_types'] = 'gif|jpg|png|doc|pdf|txt';
            	$config['max_size'] = '10000';
            	$config['max_width']  = '20480';
           	    $config['max_height']  = '10240';

            	$this->upload->initialize($config);         	 	

            	if($this->upload->do_upload()){
   			   		 $data = $this->upload->data();   			   		   			       			    	
   			 	}
   			 	else{
   			 		$errors = $this->upload->display_errors();
   			 		var_dump($errors);
   				}

				$this->method_m->create_Method($method);

				redirect(base_url().'method','refresh');

		} else {
			     //If no session, redirect to login page
			     //redirect('login', 'refresh');
				$this->load->view('main_header',$data);
				$this->load->view('main_nav');
				$this->load->view('method',$data);
				$this->load->view('main_footer');
		}

	}

	

	public function update_method(){
		if($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				$userID = $session_data['id'];
				
				$this->load->model('method_m');
								
                $method['created_at'] =  date('Y:m:d H:i:s');
        		$method['description'] =  $this->input->post('description');
				$method['filepath'] =  "?";//$this->input->post('filepath');
				$method['name'] =  $this->input->post('name');
				$method['staff_id'] =  $this->input->post('staff_id');
				$method['updated_at'] =  date('Y:m:d H:i:s');
				
				$result_id=$this->result_m->update_Method($method);

				redirect(base_url().'method','refresh');
				//$this->load->view('main_header',$data);
				//$this->load->view('logged_nav');
				//$this->load->view('result',$data);
				//$this->load->view('main_footer');
		} else {
			     //If no session, redirect to login page
			     //redirect('login', 'refresh');
				$this->load->view('main_header',$data);
				$this->load->view('main_nav');
				$this->load->view('method',$data);
				$this->load->view('main_footer');
		}	

	}


	
}