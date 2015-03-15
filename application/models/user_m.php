<?php

class User_m extends CI_model{

function get_Users() {
	$this -> db -> select('*');
	$this -> db -> from('user');
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

function get_Donnors() {

	$sql = "SELECT c.country,d.email,d.id,d.name,d.phone1,d.phone2,d.since,d.user_id
	 	FROM donnor as d, countries c	 	
	 	WHERE d.country=c.idcountries";
	 	$query = $this->db->query($sql);
	 	
	 	if($query -> num_rows() != 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
}


function get_Teachers() {
		$sql = "SELECT c.country,d.email,d.id,d.name,d.phone1,d.phone2,d.since,d.user_id
	 	FROM teacher as d, countries c	 	
	 	WHERE d.country=c.idcountries";
	 	$query = $this->db->query($sql);
	 	
	 	if($query -> num_rows() != 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
}

function get_Staffs() {
		$sql = "SELECT c.country,d.email,d.id,d.name,d.phone1,d.phone2,d.since,d.user_id
	 	FROM staff as d, countries c	 	
	 	WHERE d.country=c.idcountries";
	 	$query = $this->db->query($sql);
	 	
	 	if($query -> num_rows() != 0)
		{
			return $query->result();
		}
		else
		{
			return false;
		}
}

function create_Login($user) {     
     $this->db->insert('user', $user); 
     return $this->db->insert_id();       
}

function get_id($user) {
	$this->db->select('*');
    $this->db->from('user');
    $this->db->where('login', $user); 
    $query = $this -> db -> get();
    $id = $query->result();
    return $id;
}

function create_Donor($donor) {     
     $this->db->insert('donnor', $donor);    
}

function create_Teacher($teacher) {     
     $this->db->insert('teacher', $teacher);    
}

function create_Staff($staff) {     
     $this->db->insert('staff', $staff);    
}

function login($login, $pwd)
	 {
	 	$sql = "SELECT user.id,user.type,user.login,user.pwd,donnor.name as D,staff.name as S,teacher.name as T 
	 	FROM user left join donnor on user.id = donnor.user_id 
	 	left join staff on user.id = staff.user_id left join teacher on user.id = teacher.user_id 
	 	WHERE user.pwd = '" . $pwd . "' and user.login = '" . $login . "'";
	 	$query = $this->db->query($sql);
	 	//var_dump($query->result());
	 	return $query->result();

	   /*$this -> db -> select('id, login, pwd, type');
	   $this -> db -> from('user');
	   $this -> db -> where('login', $login);
	   $this -> db -> where('pwd', $pwd);
	   $this -> db -> limit(1);
	   $query = $this -> db -> get();
	   var_dump($query->result());
		if($query -> num_rows() == 1)
	   {	
	   		echo "AQUI";
	   		$this->db->select('name');
		   	$this->db->from('teacher');
			$this->db-> where('user_id', $query[0]->id);
		   	$name = $this -> db -> get();
	     
	   }else{
	   	redirect('home','refresh');
	   }
	   $query['name'] = $name[0]->result->name;
	   return $query->result();*/

	   /*$sql = "SELECT * FROM user as u, teacher as t, donnor as d,staff as s WHERE (u.id=t.user_id or u.id=d.user_id or u.id = s.user_id) and u.pwd=123 and u.login ='mcdonald'";
	   	$query = $this->db->query($sql);
		//$this->db->get();
		if($query -> num_rows() == 1)
	   {
	     return $query->result();
	   }else{
	   	var_dump($query);
	   	redirect('home','refresh');
	   }*/
		/*$this->db->from('user');
		$this->db->join('teacher', 'user.id = teacher.user_id','INNER');
		$this->db-> where('login', $login);
	   	$this->db-> where('pwd', $pwd);
	   	$query = $this -> db -> get();



	   			

	  


	   var_dump($query);

	   if($query -> num_rows() == 1)
	   {
	     return $query->result();
	   }
	   else
	   {
	   	$query = null;
	    $this->db->select('*');
		$this->db->from('user');
		$this->db->join('staff', 'user.id = staff.user_id','INNER');
		$this->db-> where('login', $login);
	   	$this->db-> where('pwd', $pwd);
	   	$query = $this -> db -> get();
	   	if($query -> num_rows() == 1)
	   {
	     return $query->result();
	   }
	   else
	   {
	   	$query = null;
	    $this->db->select('*');
		$this->db->from('user');
		$this->db->join('donnor', 'user.id = donnor.user_id','INNER');
		$this->db-> where('login', $login);
	   	$this->db-> where('pwd', $pwd);
	   	$query = $this -> db -> get();
	   	if($query -> num_rows() == 1)
	   {
	     return $query->result();
	   }
	   }
	   }*/
	 }

	function get_countries() {
		$query = $this->db->get('countries');
		return $query->result();
	}

	function get_Country_by_ID($country_id) {
		$this->db->select('*');
    	$this->db->from('countries');
    	$this->db->where('idcountries', $country_id); 
    	$query = $this -> db -> get();
    	$country = $query->result();
    	return $country;
	}
}



?>