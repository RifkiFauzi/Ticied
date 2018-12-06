<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
*
*/
class M_tim extends CI_Model
{
  public function get_data()
  {
    $query = $this->db->order_by('nm_tim','ASC')->get('tim');
    return $query->result();
  }

  public function add_data($data)
  	{
       $table = 'tim';
      $param = array(
           "kd_tim"=>$data['kd_tim'],
           "nm_tim"=>$data['nm_tim'],
           "kota_tim"=>$data['kota_tim'],
           "img_tim"=>$data['img_tim'],
         );
  		$insert = $this->db->insert($table, $param);
          if ($insert){
              return TRUE;
          }else{
              return FALSE;
          }
  	}
  public function edit_data($data){
       $table = 'tim';
       $param = array(
            "kd_tim"=>$data['kd_tim'],
           "nm_tim"=>$data['nm_tim'],
           "kota_tim"=>$data['kota_tim'],
           "img_tim"=>$data['img_tim'],
          );
        $this->db->where('urutan', $data['urutan']);
        $update = $this->db->update($table,$param);
        if ($update){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function delete_data($urutan){
        $table = 'tim';
        $this->db->where('nm_tim', $tim);
        $delete = $this->db->delete($table);
        if ($delete){
            return TRUE;
        }else{
            return FALSE;
        }

    }
}
