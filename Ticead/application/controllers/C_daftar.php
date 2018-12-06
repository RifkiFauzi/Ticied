<?php 
/**
* 
*/
class C_daftar extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('');
		$this->load->database();
	}
	public function index()
	{
		$input = array(
			'username' => $_POST['username'],
			'nm_lengkap' => $_POST['nm_lengkap'],
			'email' => $_POST['email'],
			'password' => $_POST['password'],
			'no_hp' => $_POST['no_hp'],
			'status'=>2
	    );
	   $cekin = $this->db->insert('user',$input);
	   if($cekin>=1){
	   		redirect(base_url("index.php/C_login"));
	   }else{
	   	    redirect(base_url("index.php/C_s"));
	   }
	}
}