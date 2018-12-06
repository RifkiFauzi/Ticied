<?php 
/**
* 
*/
class C_home extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_tim');
	}
	public function index()
	{
		if(isset($_SESSION['masuk'])){
		$club = $this->M_tim->get_data();
		$this->load->view('home',['club'=>$club]);
		}else{
			redirect(base_url("index.php/C_login"));
		}
	}
}