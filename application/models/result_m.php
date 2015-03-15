<?php
	//Home Page Model
    class result_m extends CI_Model {

	    function get_results() {
			$this -> db -> select('*');
			$this -> db -> from('result');
    		$query = $this -> db -> get();

			if($query -> num_rows() != 0)
			{
			return $query->result();
			}
			else
			{
				return false;
			}
	    }

	    function get_Results_by_ID($user_id) {
			$this -> db -> select('*');
			$this -> db -> from('result');
			$this -> db -> where('teacher_id', $user_id);
    		$query = $this -> db -> get();

			if($query -> num_rows() != 0)
			{
			return $query->result();
			}
			else
			{
				return false;
			}
	    }

	    function get_results_files() {
			$this -> db -> select('*');
			$this -> db -> from('result_files');
    		$query = $this -> db -> get();

			if($query -> num_rows() != 0)
			{
			return $query->result();
			}
			else
			{
				return false;
			}
	    }


        function get_result($result_id) {

        	$sql = "SELECT m.name as methodname,t.name as teachername,r.about,r.accepted,r.created_at,r.description,r.id,r.teacher_id,r.method_id,r.updated_at 
        	FROM result as r, method as m, teacher as t 
        	WHERE r.teacher_id=t.user_id and r.method_id = m.id and r.id = $result_id"; 

        	$query = $this->db->query($sql); 

        	if($query -> num_rows() != 0) { 
        		return $query->result(); 
        	} else { 
        		return false; 
        	}


			/*$this -> db -> select('*');
			$this -> db -> from('result');
			$this -> db -> where('id', $result_id);
    		$query = $this -> db -> get();

			if($query -> num_rows() != 0)
			{
			return $query->result();
			}
			else
			{
				return false;
			}*/
	    }

	    function get_Result_Files($result_id) {
			$this -> db -> select('*');
			$this -> db -> from('result_files');
			$this -> db -> where('result_id', $result_id);
    		$query = $this -> db -> get();

			if($query -> num_rows() != 0)
			{
			return $query->result();
			}
			else
			{
				return false;
			}
	    }   
	    

	    function create_Result($result) {
	    	$this->db->insert('result', $result);
	        return $this->db->insert_id();    
	    }

	    function create_Result_File($result_file) {
	    	$this->db->insert('result_files', $result_file);			           
	    }

	    function update_Result($result) {
	    	$this->db->update('result', $result);
	    }

	    function update_Result_Files($result_id,$new_result_files) {
	    	delete_Result_Files($result_id);
			create_Result_Files($new_result_files);	           
	    }

	    function delete_Result($result_id) {
	    	$this->db->where('id', $result_id);
            $this->db->delete('result'); 	    	
	    }

	    function delete_Result_Files($result_id) {
	    	$result_files=get_Result_Files($result_id);
	    	foreach ($result_files as $filepath) {
    			$this->db->delete('result_files', $filepath);
			}
	    }	
	    
	    function accept($id){
	    	$data = array(
               'accepted' => 1,
            );

			$this->db->where('id', $id);
			$this->db->update('result', $data); 
	    }


    
	}

?>