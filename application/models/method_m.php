<?php
	//Home Page Model
    class method_m extends CI_Model {

	    function get_Methods() {
			$this -> db -> select('*');
			$this -> db -> from('method');
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

        function get_Method($method_id) {

        	$sql = "SELECT s.name as staffname,m.id,m.name,m.created_at,m.description,m.filepath,m.staff_id,m.updated_at 
        	FROM method as m, staff as s 
        	WHERE m.staff_id=s.user_id and m.id = $method_id"; 

        	$query = $this->db->query($sql); 

        	if($query -> num_rows() != 0) { 
        		return $query->result(); 
        	} else { 
        		return false; 
        	}
	    }

	    function create_Method($method) {
	    	$this->db->insert('method', $method);
	        return $this->db->insert_id();    
	    }

	    function update_Method($method) {
	    	$this->db->update('method', $method);
	    }

	    function delete_Method($method_id) {
	    	$this->db->where('id', $method_id);
            $this->db->delete('method'); 	    	
	    }
    
	}

?>