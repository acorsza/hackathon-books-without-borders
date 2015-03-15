<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Result extends CI_Controller {

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
		$this->show_results();

	}

	public function form_result(){
		$this->load->model('method_m');
		$data = $this->check_session();
		$type = $data['nav'];
		
		$data['methodsList'] = $this->method_m->get_Methods();
		
		$this->load->view('header');
		$this->load->view($type);
		$this->load->view('form_result',$data);
		$this->load->view('footer');

	}
	public function show_results(){		
		$data = $this->check_session();
		$type = $data['nav'];
		$userID = $data['id'];
				
		$this->load->model('result_m');	

		$usertype = $data['type'];
		if($usertype == 'T'){
		   $data['resultsList'] = $this->result_m->get_Results_by_ID($userID);
	    }
	    else{
	       $data['resultsList'] = $this->result_m->get_Results();
	    }

		$data['resultFilesList'] = $this->result_m->get_Results_Files();

		$this->load->view('header',$data);
		$this->load->view($type);
		$this->load->view('show_result',$data);
		$this->load->view('footer');
	}

     public function create_result_files($files,$result_id)
    {            
    		$path = "uploads";
    		//$filepath = "../" . APPPATH . $path;
    		echo "../" . APPPATH . $path;
    		//$test = "Teste.com";
    		//echo $test;
    		$this->load->model('result_m');
    	    $config['upload_path'] = "T:/Programas/Wamp/www/bwb/assets/uploads/";
            $config['allowed_types'] = 'gif|jpg|png|doc|pdf|txt';
            $config['max_size'] = '10000';
            $config['max_width']  = '20480';
            $config['max_height']  = '10240';

            $this->upload->initialize($config);

            $result_file['result_id']=$result_id;

            $count = count($_FILES['userfile']['name']);
			for($i=0; $i<$count; $i++)
			{
             $result_file['filepath'] = $config['upload_path']."".$files['userfile']['name'][$i]; 
   			 $_FILES['userfile']['name']= $files['userfile']['name'][$i];
   			 $_FILES['userfile']['type']= $files['userfile']['type'][$i];
   			 $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
   			 $_FILES['userfile']['error']= $files['userfile']['error'][$i];
   			 $_FILES['userfile']['size']= $files['userfile']['size'][$i];    

   			 if($this->upload->do_upload()){
   			    $data = $this->upload->data();
   			    $this->result_m->create_Result_File($result_file);   			       			    	
   			 }
   			 else{
   			 	$errors = $this->upload->display_errors();
   			 	var_dump($errors);
   			 }
   			 
			}            
    }

	public function create_result(){
		if($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				$userID = $session_data['id'];
				
				$this->load->model('result_m');
								
                $files = $_FILES;

        		$result['description'] =  $this->input->post('description');
				$result['about'] =  $this->input->post('about');
				$result['accepted'] =  $this->input->post('accepted');
				$result['teacher_id'] =  $userID;
				$result['method_id'] =  $this->input->post('method_id');
				$result['created_at'] =  date('Y:m:d H:i:s');
				$result['updated_at'] =  date('Y:m:d H:i:s');
				
				$result_id=$this->result_m->create_Result($result);

				$this->create_result_files($files,$result_id);
		
				redirect(base_url().'result','refresh');
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

	

	public function update_result(){
		if($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				$userID = $session_data['id'];
								
        		$result['description'] =  $this->input->post('description');
				$result['about'] =  $this->input->post('about');
				$result['accepted'] =  $this->input->post('accepted');
				$result['teacher_id'] =  $userID;
				$result['method_id'] =  $this->input->post('method_id');
				$result['updated_at'] =  time();

				$this->result_m->update_Result($result);

				$this->load->view('main_header',$data);
				$this->load->view('logged_nav');
				$this->load->view('result',$data);
				$this->load->view('main_footer');
		} else {
			     //If no session, redirect to login page
			     //redirect('login', 'refresh');
				$this->load->view('main_header',$data);
				$this->load->view('main_nav');
				$this->load->view('result',$data);
				$this->load->view('main_footer');
		}

	}

	public function get_Result(){
		if($this->session->userdata('logged_in')) {
				$session_data = $this->session->userdata('logged_in');
				$data['username'] = $session_data['username'];
				
				$this->load->model('result_m');
				
				$data['resultsList'] = $this->result_m->get_Results();

				$data['resultFilesList'] = $this->result_m->get_Results_Files();

				$this->load->view('main_header',$data);
				$this->load->view('logged_nav');
				$this->load->view('result',$data);
				$this->load->view('main_footer');
		} else {
			     //If no session, redirect to login page
			     //redirect('login', 'refresh');
				$this->load->view('main_header',$data);
				$this->load->view('main_nav');
				$this->load->view('result',$data);
				$this->load->view('main_footer');
		}
	}

	public function show_full_report($id) {
		$this->load->model('result_m');
		$data = $this->check_session();
		$result = $this->result_m->get_result($id);
		$files = $this->result_m->get_Result_Files($id);
		$type = $data['nav'];
		$data['post_id'] = $id;
		$data['about'] = $result[0]->about;
		$data['description'] = $result[0]->description;
		$data['methodname'] = $result[0]->methodname;
		$data['teachername'] = $result[0]->teachername;
		$data['created_at'] = $result[0]->created_at;
		$data['accepted'] = $result[0]->accepted;


		$data['filelist'] = $files;


		//$report = $data['id'];
		$result = $this->result_m->get_result($id);
		$this->load->view('header');
		$this->load->view($type);
		$this->load->view('show_full_result',$data);
		$this->load->view('footer');
	}

	public function accept_result($id){
		$this->load->model('result_m');
		$accept = $this->result_m->accept($id);

	}

	public function delete_result($id){
		$this->load->model('result_m');
		$accept = $this->result_m->delete_Result($id);

	}
}