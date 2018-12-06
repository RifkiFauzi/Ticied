<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class M_jdwpersib extends CI_Model
{
  public function get_data()
  {
    $query = $this->db->order_by('kickoff','desc')->get('jadwal');
    return $query->result();
  }

  public function add_data($data)
  	{
       $table = 'jadwal';
      $param = array(
           "kd_jadwal"=>$data['kd_jadwal'],
           "kickoff"=>$data['kickoff'],
           "kd_tim"=>$data['kd_tim'],
           "kd_tim2"=>$data['kd_tim2'],
         );
  		$insert = $this->db->insert($table, $param);
          if ($insert){
              return TRUE;
          }else{
              return FALSE;
          }
  	}
  public function edit_data($data){
       $table = 'jadwal';
      $param = array(
           "kd_jadwal"=>$data['kd_jadwal'],
           "kickoff"=>$data['kickoff'],
           "kd_tim"=>$data['kd_tim'],
           "kd_tim2"=>$data['kd_tim2'],
         );
        $this->db->where('kd_jadwal', $data['kd_jadwal']);
        $update = $this->db->update($table,$param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function delete_data($kd_jadwal){
        $table = 'jadwal';
        $this->db->where('kd_jadwal', $tim);
        $delete = $this->db->delete($table);
        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }

    }
}
