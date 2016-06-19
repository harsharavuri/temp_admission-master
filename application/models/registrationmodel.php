<?php
class RegistrationModel extends CI_Model {
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
        $this->load->database();
    }
		
	function register_personal_info($data){
		//$userid = mt_rand(1000000, 9999999);
        //$userdata['userid'] = $userid;
        //$count = 20;
        // Inserting in userdata
        $this->db->select();
        $this->db->from('personal_info');
        $this->db->where(array('StudentID'=>$data['StudentID']));
        $query = $this->db->get();
        if($query->num_rows()>0){
            return false;
        }
        return $this->db->insert('personal_info', $data);
	}
	
	function register_educational_info($data){
		
        $this->db->select();
        $this->db->from('educational_info');
        $this->db->where(array('StudentID'=>$data['StudentID']));
        $query = $this->db->get();
        if($query->num_rows()>0){
            return false;
        }
        return $this->db->insert('educational_info', $data);
	}
	
	function register_payment_info($data){
		
        $this->db->select();
        $this->db->from('payment_info');
        $this->db->where(array('StudentID'=>$data['StudentID']));
        $query = $this->db->get();
        if($query->num_rows()>0){
            return false;
        }
		//return true;
        return $this->db->insert('payment_info', $data);
	
	}
	
	function get_personal_info($data){
		$this->db->select();
        $this->db->from('personal_info');
        $this->db->where(array('StudentID'=>$data['StudentID']));
		$query =$this->db->get();
		if ($query->num_rows() === 1) {
            return $query->first_row();
        } else {
            return false;
        }
	}
	
	function get_educational_info($data){
		$this->db->select();
        $this->db->from('educational_info');
        $this->db->where(array('StudentID'=>$data['StudentID']));
		$query =$this->db->get();
		if ($query->num_rows() === 1) {
            return $query->first_row();
        } else {
            return false;
        }
	}
	
	function get_payment_info($data){
		$this->db->select();
        $this->db->from('payment_info');
        $this->db->where(array('StudentID'=>$data['StudentID']));
		$query =$this->db->get();
		if ($query->num_rows() === 1) {
            return $query->first_row();
        } else {
            return false;
        }
	}
	
}
?>