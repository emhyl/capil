<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('admin')){
			redirect(base_url('login'));
		}
	}

	public function index()
	{
		$data['pemohon'] = $this->M_capil->join2tbl('*',['tbl_pemohon','tbl_berkas'],['id','id_pemohon']);
		$data['total_user'] = count($this->M_capil->getAll('tbl_pemohon'));
		$data['total_proses'] = count($this->M_capil->getAllWhere('tbl_berkas',['status'=>'proses']));
		$data['total_antri'] = count($this->M_capil->getAllWhere('tbl_berkas',['status'=>'antri']));
		$data['total_selesai'] = $this->M_capil->getAllWhere('tbl_berkas',['status'=>'selesai']);
		$data['riwayat'] = $this->M_capil->join2tbl('*',['tbl_pemohon','tbl_berkas'],['id','id_pemohon'],['status'=>'selesai']);

		// var_dump($data['riwayat']);
		// die();

		$this->load->view('templates/admin/header');
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/index',$data);
		$this->load->view('templates/admin/footer');
	}

}
