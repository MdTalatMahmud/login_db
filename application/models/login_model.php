<?php  
  
class Login_model extends CI_Model {  
  
    public function log_in_correctly() {  
  
        $this->db->where('email', $this->input->post('email'));  
        $this->db->where('password', $this->input->post('password'));  
        $query = $this->db->get('doctordetails');  
  
        if ($query->num_rows() == 1)  
        {  
            return true;  
        } else {  
            return false;  
        }  
  
    }  
  
      
}  
?>  