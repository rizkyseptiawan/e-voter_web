<?php 
 
class M_vote extends CI_Model{
	
	public function voting($nama, $nim,$pilihan) {

        $voter = array(
            'id_vote'    => null,
            'nama_voter'   => $nama,
            'nim'      => $nim,
            'pilihan'   => $pilihan,
            'created_at' => date('Y-m-j H:i:s'),
        );


        $this->db->insert('voting', $voter);
        return true;

	}
	public function cek_nim($nim) {

        $this->db->select('*'); 
    	$this->db->from('voting');
    	$this->db->where('nim', $nim);
    	$query = $this->db->get();
    	$result = $query->result_array();
    	return $result;

    }

}
?>