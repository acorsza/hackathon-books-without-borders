<?php
	//Home Page Model
    class donation_m extends CI_Model {

	    function get_Donations() {
			$this -> db -> select('*');
			$this -> db -> from('donnation');
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

        function get_Donation($donation_id) {
			$this -> db -> select('*');
			$this -> db -> from('donnation');
			$this -> db -> where('id', $donation_id);
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

	    function create_Donation($donation) {
	    	$this->db->insert('donnation', $donation);
	        return $this->db->insert_id();    
	    }

	    function update_Donation($donation) {
	    	$this->db->update('donnation', $donation);
	    }

	    function delete_Donation($donation_id) {
	    	$this->db->where('id', $donation_id);
            $this->db->delete('donnation'); 	    	
	    }

	    function submit_Donations($donation){
	    	$sql = "UPDATE donnation SET updated_at='".$donation['updated_at']."',current_state='".$donation['current_state']."',last_state='".$donation['last_state']."' WHERE current_state='Help Pending'";
	    	$this->db->query($sql);             	    	
	    }

	    
    
	}

?>