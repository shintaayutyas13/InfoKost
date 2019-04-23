<?php 

class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('insert');
                $this->load->helper('url');
	}

	function index(){
		$data['user'] = $this->insert->Daftar()->result();
		$this->load->view('v_tampil',$data);
		}

			function tambah(){
		$this->load->view('v_input');
	}
		function tambah_aksi(){
		$jk_input = $this->input->post('jk_input');
		$name_input = $this->input->post('name_input');
		$loc_input = $this->input->post('loc_input');
		$fk_input = $this->input->post('fk_input');
		$Luas_input = $this->input->post('Luas_input');
		$mnd_input = $this->input->post('mnd_input');
		$fp_input = $this->input->post('fp_input');
		$al_input = $this->input->post('al_input');
		$dpk_input = $this->input->post('dpk_input');
		$kbs_input = $this->input->post('kbs_input');
		$kl_input = $this->input->post('kl_input');
		$kb_input = $this->input->post('kb_input');
		$dk_input = $this->input->post('dk_input');
		$nohp_input = $this->input->post('nohp_input');
 
		$data = array(
			'jk_input' => $jk_input,
			'name_input' => $name_input,
			'loc_input' => $loc_input,
			'fk_input' => $fk_input,
			'mnd_input' => $mnd_input,
			'fp_input' => $fp_input,
			'al_input' => $al_input, 
			'dpk_input' => $dpk_input,
			'kbs_input' => $kbs_input,
			'kl_input' => $kl_input,
			'kb_input' => $kb_input,
			'dk_input' => $dk_input,
			'nohp_input' => $nohp_input
		);
			
		$this->insert->input_data($data,'user');
		redirect('crud/index');
	}
 
}
