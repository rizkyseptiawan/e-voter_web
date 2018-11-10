<?php 
 
class M_hasil extends CI_Model{
	public function hitung_suara($calon) {

        $this->db->select('*'); 
    	$this->db->from('voting');
    	$this->db->where('pilihan', $calon);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;

    }
    public function total_suara() {

        $this->db->select('*'); 
    	$this->db->from('voting');
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;

    }

}
?>