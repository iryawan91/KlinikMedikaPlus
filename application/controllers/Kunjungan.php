<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kunjungan extends CI_Controller {

	function __construct()
    {
        parent:: __construct();
        if(empty($this->session->userdata('login'))){
            redirect('auth');
        }
        $this->load->model('M_kunjungan');
        $this->load->model('M_pasien');
        $this->load->model('M_dokter');
        $this->load->model('M_obat');
    }

	public function index()
	{

        $data['title']="Kunjungan Berobat Pasien";
        $data['kunjungan']=$this->M_kunjungan->tampil_data()->result_array();

        $this->load->view('v_header', $data);
		$this->load->view('kunjungan/v_data', $data);
        $this->load->view('v_footer');
	}

    function tambah(){
        $data['title']="Kunjungan Baru Berobat";

        $data['pasien']=$this->M_pasien->tampil_data()->result_array();
        $data['dokter']=$this->M_dokter->tampil_data()->result_array();

        
        $this->load->view('v_header', $data);
		$this->load->view('kunjungan/v_data_tambah', $data);
        $this->load->view('v_footer');
	}

    function insert(){
        $tgl=$this->input->post('tglBerobat');
        $pasien=$this->input->post('Pasien');
        $dokter=$this->input->post('Dokter');
        

        $data=array(
            'tanggalBerobat'=>$tgl,
            'idPasien'=>$pasien,
            'idDokter'=>$dokter

        );

        $this->M_kunjungan->insert_data($data);

        redirect('kunjungan');
	}



    function edit($id){
        $data['title']="Edit Data Kunjungan/Berobat Pasien";
        

        $where=array('idBerobat'=>$id);
        $data['edit']=$this->M_kunjungan->edit_data($where)->row_array();

        $data['pasien']=$this->M_pasien->tampil_data()->result_array();
        $data['dokter']=$this->M_dokter->tampil_data()->result_array();

       

        $this->load->view('v_header', $data);
		$this->load->view('kunjungan/v_data_edit', $data);
        $this->load->view('v_footer');
	}

    function update(){
        $id=$this->input->post('idBerobat');
        $tgl=$this->input->post('tglBerobat');
        $pasien=$this->input->post('pasien');
        $dokter=$this->input->post('dokter');
        
        

        $data=array(
            'tanggalBerobat'=>$tgl,
            'idPasien'=>$pasien,
            'idDokter'=>$dokter

        );

        $where=array('idBerobat'=>$id);
        $this->M_kunjungan->update_data($data,$where);

        redirect('kunjungan');
	}
    

    function hapus($id){
        $where=array('idBerobat'=>$id);
        $this->M_kunjungan->hapus_data($where);

        redirect('kunjungan');
    }

    //Fungsi merekam kunjungan
    function rekam($id){
        $data['title']='Rekam Medis Pasien';

        //tampil data rekam medis
        $data['d'] = $this->M_kunjungan->tampil_rekam($id)->row_array();

        //tampil riwayat kunjungan
        $q=$this->db->query("SELECT idPasien from berobat WHERE idBerobat='$id'")->row_array();
        $idPasien=$q['idPasien'];
        $data['riwayat']=$this->M_kunjungan->tampil_riwayat($idPasien)->result_array();

        //tampil data obat di combo
        $data['obat']=$this->M_obat->tampil_data()->result_array();

        //menampilkan resep obat
        $data['resep']=$this->M_kunjungan->tampil_resep($id)->result_array();

        $this->load->view('v_header', $data);
		$this->load->view('kunjungan/v_rekam_medis', $data);
        $this->load->view('v_footer');

    }


    function insert_rekam(){
        $idBerobat=$this->input->post('id');
        $keluhan=$this->input->post('keluhan');
        $diagnosa=$this->input->post('diagnosa');
        $penatalaksana=$this->input->post('penatalaksana');

        $data=array(
            'keluhanPasien'=>$keluhan,
            'hasilDiagnosa'=>$diagnosa,
            'penataLaksana'=>$penatalaksana
        );

        $where=array('idBerobat'=>$idBerobat);

        $this->M_kunjungan->update_data($data,$where);

        redirect('kunjungan/rekam/'.$idBerobat);
    }

    function insert_resep(){
        $idBerobat=$this->input->post('id');
        $obat=$this->input->post('obat');

        $data=array(
            'idBerobat'=>$idBerobat,
            'idObat'=>$obat
        );

        $this->M_kunjungan->insert_resep($data);

        redirect('kunjungan/rekam/'.$idBerobat);
    }

    function hapus_resep($id, $idBerobat){
        $where=array('idResep'=>$id);
        $this->M_kunjungan->hapus_resep($where);
        redirect('kunjungan/rekam/'.$idBerobat);
    }
}

