<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_menu extends CI_Model {

	function get_master_detail() {
      $this->db->select('header.*, detail.*');
      $this->db->from('header');
      $this->db->join('detail', 'header.id = detail.header_id', 'left');
      $query = $this->db->get();
      return $query->result();
   }

// ini yang dipakai untuk menu
   function menus() {
    $this->db->select("*");
    $this->db->from("menu_parents");
    $q = $this->db->get();

    $final = array();
    if ($q->num_rows() > 0) {
        foreach ($q->result() as $row) {

            $this->db->select("*");
            $this->db->from("menu_children");
            $this->db->where("fk_parent_id", $row->parent_id);
            $q = $this->db->get();
            if ($q->num_rows() > 0) {
                $row->children = $q->result();
            }
            array_push($final, $row);
        }
    }
    return $final;
}

// selesai 


function input_lab()
{
	 $this->db->select('*');
 	 $this->db->from('periksa_lab');
     $this->db->join('jns_perawatan_lab','periksa_lab.kd_jenis_prw=jns_perawatan_lab.kd_jenis_prw');
    $q = $this->db->get();  

	

    $final = array();
    if ($q->num_rows() > 0) {
        foreach ($q->result() as $row) {  

        
            $this->db->select('*');
 			$this->db->from('periksa_lab_detail');
 			$this->db->join('template_laboratorium','periksa_lab_detail.id_template=template_laboratorium.id_template');
            $this->db->where("periksa_lab_detail.kd_jenis_prw", $row->kd_jenis_prw);
            $q = $this->db->get(); 

            /*$q= $this->db->query("SELECT *FROM periksa_lab_detail inner JOIN periksa_lab ON periksa_lab_detail.kd_jenis_prw='$row->kd_jenis_prw' "); */
            if ($q->num_rows() > 0) {
                $row->children = $q->result();
            }
            array_push($final, $row); 
        }
    }
    return $final;
}

}

/* End of file Model_menu.php */
/* Location: ./application/models/Model_menu.php */