<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Obat extends CI_Controller {

	function __construct()
    {
        parent:: __construct();
        if(empty($this->session->userdata('login'))){
            redirect('auth');
        }
        $this->load->model('M_obat');
        
    }

	public function index()
	{

        $data['title']="Manajemen Data Obat";
        $data['obat']=$this->M_obat->tampil_data()->result_array();

        $this->load->view('v_header', $data);
		$this->load->view('obat/v_data', $data);
        $this->load->view('v_footer');
	}

    function tambah(){
        $data['title']="Tambah Data Obat";
        
        $this->load->view('v_header', $data);
		$this->load->view('obat/v_data_tambah', $data);
        $this->load->view('v_footer');
	}

    function insert(){
        $n=$this->input->post('namaObat');

        $data=array(
            'namaObat'=>$n

        );

        $this->M_obat->insert_data($data);

        redirect('obat');
	}



    function edit($id){
        $data['title']="Edit Data Obat";

        $where=array('idObat'=>$id);
        $data['r']=$this->M_obat->edit_data($where)->row_array();

        $this->load->view('v_header', $data);
		$this->load->view('obat/v_data_edit', $data);
        $this->load->view('v_footer');
	}

    function update(){
        $id=$this->input->post('idObat');      
        $n=$this->input->post('namaObat');

        $data=array(
            'namaObat'=>$n,
        );

        $where=array('idObat'=>$id);
        $this->M_obat->update_data($data,$where);

        redirect('obat');
	}
    

    function hapus($id){
        $where=array('idObat'=>$id);
        $this->M_obat->hapus_data($where);

        redirect('obat');
    }
}
