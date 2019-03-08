<?php

class m_coba extends CI_Model{

    public function __construct(){
        parent:: __construct();
    }

    public function getCoba()
    {
        return->$this->db->get('bptp');
    }
}

?>