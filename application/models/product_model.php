<?php

class product_model extends CI_model{
    public function  getAllproduct()
    {
       return $this->db->get('bptp')->num_rows();
    }

    function data($number,$offset){
        return $query = $this->db->get('bptp',$number,$offset)->result();
    }

    public function getCari($katakunci){
        $this->db->select('*');
        $this->db->from('bptp');
        $this->db->like('namaproduct', $katakunci);

        $query = $this->db->get();
        return $query->result();
    }

    public function addproductProduct()
    {
        $data = [
            "noproduct" => $this->input->post('noproduct', true),
            "namaproduct" => $this->input->post('namaproduct', true),
            "kelasproduct" => $this->input->post('kelasproduct', true),
            "hargaproduct" => $this->input->post('hargaproduct', true)

        ];

        $this->db->insert('bptp', $data);
    }

    public function hapusproduct($noproduct)
    {
    //    $this->db->where('noproduct', $noproduct);
       $this->db->delete('bptp', ['noproduct' => $noproduct ]); 

    }

    public function getProductById($noproduct)
    {
       return $this->db->get_where('bptp', ['noproduct' => $noproduct])->row_array();
    }

    public function updateProduct()
    {
        $data = [
            "noproduct" => $this->input->post('noproduct', true),
            "namaproduct" => $this->input->post('namaproduct', true),
            "kelasproduct" => $this->input->post('kelasproduct', true),
            "hargaproduct" => $this->input->post('hargaproduct', true)

        ];
        $this->db->where('noproduct', $this->input->post('noproduct'));
        $this->db->update('bptp', $data);
    }


  

}

?>