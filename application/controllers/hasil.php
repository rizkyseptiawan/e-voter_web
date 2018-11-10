<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class hasil extends CI_Controller {

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
        $this->load->model('m_hasil');
    }
	public function index()
	{
		$total = $this->m_hasil->total_suara();
		$persen = count($total);

		$calon1 = $this->m_hasil->hitung_suara(1);
		$count1 = count($calon1);

		$calon2 = $this->m_hasil->hitung_suara(2);
		$count2 = count($calon2);

		$calon3 = $this->m_hasil->hitung_suara(3);
		$count3 = count($calon3);

		$calon4 = $this->m_hasil->hitung_suara(4);
		$count4 = count($calon4);

		$data = new stdClass();
		$data->calon1 =   $count1/$persen * 100;
		$data->calon2 =   $count2/$persen * 100;
		$data->calon3 =   $count3/$persen * 100;
		$data->calon4 =   $count4/$persen * 100;

		$this->load->view('header');
		$this->load->view('hasil',$data);
		$this->load->view('footer');
	}
}
