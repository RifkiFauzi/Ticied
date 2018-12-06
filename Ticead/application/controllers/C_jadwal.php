<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class C_jadwal extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jdwpersib');
        $this->load->model('M_tim');
	}
	public function index()
	{
        if(isset($_SESSION['masuk'])){
        $jadwal = $this->db->query("SELECT * FROM jadwal join stadion on stadion.kd_stadion=jadwal.kd_stadion ORDER BY kickoff ")->result();
        $this->load->view('tampil_jadwal',['jadwal'=>$jadwal]);
        }else{
            redirect(base_url('index.php/C_login'));
        }
	}

    public function jadwal_tim($id_tim)
    {
        if(isset($_SESSION['masuk'])){
        $jadwal = $this->db->query("SELECT * FROM jadwal join stadion on stadion.kd_stadion=jadwal.kd_stadion WHERE jadwal.kd_tim='".$id_tim."' OR jadwal.kd_tim='".$id_tim."' ORDER BY kickoff  ")->result(); 
        $this->load->view('tampil_jadwal',['jadwal'=>$jadwal]);
        }else{
            redirect(base_url('index.php/C_login'));
        }
    }

    public function input_jadwal(){
        if($_SESSION['masuk']['status']==1){
        $this->load->view('input_jadwal');
        }else{
            redirect(base_url("index.php/c_home"));
        }
    }

    public function proses_jadwal(){
        if($_SESSION['masuk']['status']==1){
            $inputan = array(
                    'kickoff'=>$_POST['kickoff'],
                    'harga_tiket'=>$_POST['harga_tiket'],
                    'kd_stadion'=>$_POST['kd_stadion'],
                    'kd_tim'=>$_POST['kd_tim'],
                    'kd_tim2'=>$_POST['kd_tim2']
                );
            $cekin = $this->db->insert('jadwal',$inputan);

            if($cekin>=1){
                redirect(base_url('index.php/C_jadwal'));
            }else{
                redirect(base_url('index.php/C_jadwal'));
            }
        }else{
            redirect(base_url("index.php/c_home"));
        }
    }

    public function hapus_jadwal($kd_jadwal){
        if($_SESSION['masuk']['status']==1){
            $where = array('kd_jadwal'=>$kd_jadwal);
            $cekin = $this->db->delete('jadwal',$where);
            if($cekin>=1){
               redirect(base_url("index.php/C_jadwal"));
            }else{
                redirect(base_url("index.php/C_jadwal"));
            } 
        }else{
                redirect(base_url("index.php/c_home"));
        }
    }
}
?>
