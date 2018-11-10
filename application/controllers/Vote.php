<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class vote extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
        parent::__construct();
		$this->load->helper('url');
		$this->load->library(array('email','session'));
        $this->load->model('m_vote');
    }
	public function index()
	{
		
		$data = new stdClass();

        // load form helper and validation library
        $this->load->helper('form');
        $this->load->library('form_validation');

        // set validation rules
        $this->form_validation->set_rules('nama', 'Nama Lengkap', 'trim|required|min_length[5]', array('required' => 'Wajib Diisi'));
        $this->form_validation->set_rules('nim', 'NIM', 'trim|required|numeric|exact_length[12]', array('required' => 'Wajib Diisi','numeric'=> 'Harap Inputin Nim angka ya','exact_length' => 'NIM Tidak sesuai'));
        $this->form_validation->set_rules('calon', 'Calon', 'trim|required|exact_length[1]',array('required' => 'Wajib Milih salah satu ya','exact_length' => 'Valuenya kok salah'));
		
		if ($this->form_validation->run() === false) {
		$this->load->view('vote');
		}else{
			$nama = $this->input->post('nama');
            $nim   = $this->input->post('nim');
			$pilihan = $this->input->post('calon');
			$exists = $this->m_vote->cek_nim($nim);
			$count = count($exists);
			if (empty($count)) {
				if ($this->m_vote->voting($nama, $nim, $pilihan)) {

					// user creation ok
					$data->alert = 'Terimakasih Telah melakukan voting';
					$data->class = "success";
					$this->load->view('vote', $data);
	
				} else {
	
					// user creation failed, this should never happen
					$data->alert = 'Ada masalah. Coba lagi.';
					$data->class = 'danger';
					// send error to the view
					$this->load->view('vote', $data);
	
				}
				
			}else{
				// user creation failed, this should never happen
				$data->alert = 'Anda telah melakukan voting';
				$data->class = 'danger';
                // send error to the view
                $this->load->view('vote', $data);
			
			}
		}
		
	}
}
