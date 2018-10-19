<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Absensi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->_cek_login();
	}
	private function _cek_login()
	{
		if(!$this->session->userdata('useradmin')){            
			redirect(base_url().'backend');
		}
	}

	public function index()
	{
		$data = array(
			'data_absensi' => $this->model->GetKaryawanJabAbs("order by id_abs desc")->result_array(),
			'nama' => $this->session->userdata('nama'),	
			'status' => 'baru',
			'statuspost' => '',
			'id_abs' => '',
			'nippos' => '',
			'jammasuk' => '',
			'tanggal' => '',
			'jabatan' => '',
			'nama_kar' => '',
		);
		
		$this->load->view('absensi/data_absensi', $data);
	}


	function editabsensi($kode = 0){		
		$tampung = $this->model->GetKaryawanJabAbs("where id_abs = '$kode'")->result_array();
		$data = array(
			'nama' => $this->session->userdata('nama'),	
			'status' => 'lama',
			'statuspost' => $tampung[0]['statuspost'],
			'nippos' => $tampung[0]['nippos'],
			'id_abs' => $tampung[0]['id_abs'],
			'jabatan' => $tampung[0]['jabatan'],
			'tanggal' => $tampung[0]['tanggal'],
			'jammasuk' => $tampung[0]['jammasuk'],
			'nama_kar' => $tampung[0]['nama_kar'],

			'data_absensi' => $this->model->GetKaryawanJabAbs("where id_abs != '$kode' order by id_abs desc")->result_array()
			
			);
		$this->load->view('absensi/data_absensi', $data);
	}

	function savedata(){
		if($_POST){
			$status = $_POST['status'];
			$id_abs = $_POST['id_abs'];
			$jabatan = $_POST['jabatan'];
			$tanggal = $_POST['tanggal'];
			$nippos = $_POST['nippos'];
			$jammasuk = $_POST['jammasuk'];
			$nama_kar = $_POST['nama_kar'];
			$statuspost = $_POST['statuspost'];
			if($status == "baru"){
				$data = array(
					'id_abs' => $id_abs,
					'jabatan' => $jabatan,
					'tanggal' => date ("Y-m-d H:i:s"),
					'jammasuk' => $jammasuk,
					'nippos' => $nippos,
					'statuspost' => $statuspost,
					);
				$result = $this->model->Simpan('tb_absensi', $data);
				if($result == 1){
					$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Simpan data BERHASIL dilakukan</strong></div>");
					header('location:'.base_url().'absensi');
				}else{
					$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Simpan data GAGAL di lakukan</strong></div>");
					header('location:'.base_url().'absensi');
				}
			}else{
				$data = array(
					'statuspost' => $statuspost
					);
				$result = $this->model->Update('tb_absensi', $data, array('id_abs' => $id_abs));
				if($result == 1){
					$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Update data BERHASIL dilakukan</strong></div>");
					header('location:'.base_url().'absensi');
				}else{
					$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Update data GAGAL di lakukan</strong></div>");
					header('location:'.base_url().'absensi');
					}
			}
		}else{
			echo('handak baapa nyawa tong!!!');
		}
	}

	function hapuskat($kode = 1){
		$result = $this->model->Hapus('tb_absensi', array('id_abs' => $kode));
		if($result == 1){
			$this->session->set_flashdata("sukses", "<div class='alert alert-success'><strong>Hapus data BERHASIL dilakukan</strong></div>");
			header('location:'.base_url().'absensi');
		}else{
			$this->session->set_flashdata("alert", "<div class='alert alert-danger'><strong>Hapus data GAGAL di lakukan</strong></div>");
			header('location:'.base_url().'absensi');
		}
	}
}
