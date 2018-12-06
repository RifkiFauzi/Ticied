<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class C_tim extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_tim');
	}
	public function index()
	{
        $data = array(
            'title' => 'apalah',
            'isian' => $this->M_tim->get_data()
        );
        $this->load->view('tim',$data);
	}

    public function input_tim(){
        if ($_SESSION['masuk']['status']==1) {
            $this->load->view('input_tim');
        }else{
            redirect(base_url("index.php/c_home"));
        }
    }

    public function proses_tim(){
        if($_SESSION['masuk']['status']==1){
            $inputan = array(
                    'nm_tim'=>$_POST['nm_tim'],
                    'kota_tim'=>$_POST['kota_tim'],
                    'img_tim'=>$_POST['img_tim'],
                );
            $cekin = $this->db->insert('tim',$inputan);

            if($cekin>=1){
                redirect(base_url('index.php/C_tim'));
            }else{
                redirect(base_url('index.php/C_tim'));
            }
        }else{
            redirect(base_url("index.php/c_home"));
        }
    }
    
    public function hapus_tim($kd_tim){
        if($_SESSION['masuk']['status']==1){
            $where = array('kd_tim'=>$kd_tim);
            $cekin = $this->db->delete('tim',$where);
            if($cekin>=1){
               redirect(base_url("index.php/C_tim"));
            }else{
                redirect(base_url("index.php/C_tim"));
            } 
        }else{
            redirect(base_url("index.php/c_home"));
        }
    }
}
?>
