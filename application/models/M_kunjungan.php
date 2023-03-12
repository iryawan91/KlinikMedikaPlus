<?php

class M_kunjungan extends CI_Model{

    function tampil_data(){
        // return $this->db->get('berobat');

        $query=$this->db->query("SELECT berobat.*,
                                pasien.namaPasien,
                                pasien.umurPasien,
                                pasien.jenisKelamin,
                                dokter.namaDokter
                            FROM berobat
                            INNER JOIN pasien ON berobat.idPasien=pasien.idPasien
                            INNER JOIN dokter ON berobat.idDokter=dokter.idDokter");
        return $query;
    }

    function insert_data($data){
        return $this->db->insert('berobat',$data);

    }

    function edit_data($where){
        return $this->db->get_where('berobat',$where);
    }

    function update_data($data, $where){
        $this->db->where($where);
        $this->db->update('berobat',$data);
    }

    function hapus_data($where){
        $this->db->where($where);
        $this->db->delete('berobat');
    
    }

    /* Fungsi rekam medis */
}