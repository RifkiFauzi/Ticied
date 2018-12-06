<?php 
/**
* 
*/
class C_login extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_login');
	}
	public function index()
	{
		$this->load->view('login');
	}

	public function verify_login()
	{
       if($this->M_login->login()){
           redirect(base_url('index.php/C_home'));
       }else{
            redirect(base_url('index.php/C_login'));
        }
	}

    public function logout()
    {
        session_destroy();
        redirect(base_url('index.php/C_login'));    
    }
}
?>