<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {

	function __construct()
    {
        parent:: __construct();
        if(empty($this->session->userdata('login'))){
            redirect('auth');
        }
        $this->load->model('M_pasien');
        
    }

	public function index()
	{

        $data['title']="Manajemen Data Pasien";
        $data['pasien']=$this->M_pasien->tampil_data()->result_array();

        $this->load->view('v_header', $data);
		$this->load->view('pasien/v_data', $data);
        $this->load->view('v_footer');
	}

    function tambah(){
        $data['title']="Tambah Data Pasien";
        
        $this->load->view('v_header', $data);
		$this->load->view('pasien/v_data_tambah', $data);
        $this->load->view('v_footer');
	}

    function insert(){
        $n=$this->input->post('namaPasien');
        $jk=$this->input->post('jenisKelamin');
        $u=$this->input->post('umurPasien');
        

        $data=array(
            'namaPasien'=>$n,
            'jenisKelamin'=>$jk,
            'umurPasien'=>$u

        );

        $this->M_pasien->insert_data($data);

        redirect('pasien');
	}



    function edit($id){
        $data['title']="Edit Data Pasien";

        $where=array('idPasien'=>$id);
        $data['r']=$this->M_pasien->edit_data($where)->row_array();

        $this->load->view('v_header', $data);
		$this->load->view('pasien/v_data_edit', $data);
        $this->load->view('v_footer');
	}

    function update(){
        $id=$this->input->post('idPasien');
        $n=$this->input->post('namaPasien');
        $jk=$this->input->post('jenisKelamin');
        $u=$this->input->post('umurPasien');

        $data=array(
            'namaPasien'=>$n,
            'jenisKelamin'=>$jk,
            'umurPasien'=>$u

        );

        $where=array('idPasien'=>$id);
        $this->M_pasien->update_data($data,$where);

        redirect('pasien');
	}
    

    function hapus($id){
        $where=array('idPasien'=>$id);
        $this->M_pasien->hapus_data($where);

        redirect('pasien');
    }
}
