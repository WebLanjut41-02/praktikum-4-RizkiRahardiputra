<?php

class coba extends CI_Controller{


    function __construct()
    {
        parent:: _construct();
        $this->load->library('bptp');
        $this->load->model('m_coba')
        // $data = array(
        //     array('Name','Color','Size'),
        //     array('Fred','Blue','Small'),
        //     array('Mary','Red','Large'),
        //     array('john','Green','Medium');
        // );
    }
    function data_coba()
    {
        $data['bptp'] = $this->m_coba->getCoba();
        $this->load->view('data_coba', $data);
    }
}


?>