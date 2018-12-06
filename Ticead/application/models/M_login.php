<?php
/**
*
*/
class M_login extends CI_Model
{
    public function __construct(){
        $this->load->database();
    }

	function login()
    {
        $username = $this->input->POST('username', TRUE);
        $password = $this->input->POST('password', TRUE);
        $query = $this->db->query("SELECT * from user where username= '$username' and password= '$password' LIMIT 1");
        if($query->num_rows() == 0){
            return false;
        }else{
            $data = $query->row();
            $_SESSION['masuk'] = array('kd_user'=>$data->kd_user,'username'=>$data->username,'nm_lengkap'=>$data->nm_lengkap,"password"=>$data->password,"no_hp"=>$data->no_hp,"email"=>$data->email,"status"=>$data->status);
            return true;
        }
    }
}
