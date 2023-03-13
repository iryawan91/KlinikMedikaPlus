<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	function __construct()
    {
        parent:: __construct();
        if(empty($this->session->userdata('login'))){
            redirect('auth');
        }
        $this->load->model('M_dokter');
        $this->load->model('M_pasien');
        $this->load->model('M_kunjungan');
        $this->load->model('M_obat');
        
    }

	public function index()
	{

        redirect('dashboard');
	}

    function data_dokter(){
        $data['title']="Laporan Data Dokter";

        $data['dokter']=$this->M_dokter->tampil_data()->result_array();

        $this->load->view('laporan/v_laporan_dokter',$data);
    }

    
    function data_obat(){
        $data['title']="Laporan Data Dokter";

        $data['obat']=$this->M_obat->tampil_data()->result_array();

        $this->load->view('laporan/v_laporan_obat',$data);
    }

    function data_pasien(){
        $data['title']="Laporan Data Pasien";

        $data['pasien']=$this->M_pasien->tampil_data()->result_array();

        $this->load->view('laporan/v_laporan_pasien',$data);
    }

    function data_kunjungan(){
        $data['title']="Laporan Data Kunjungan";

        $data['kunjungan']=$this->M_kunjungan->tampil_data()->result_array();

        $this->load->view('laporan/v_laporan_kunjungan',$data);
    }

}
