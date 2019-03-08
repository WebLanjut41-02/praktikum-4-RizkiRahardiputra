<?php

class product extends CI_Controller
{
    public  function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
        $this->load->library('form_validation');
 
    }

   
    public function  index()
    {
      
        $data['judul'] = 'Daftar Product';
        // $data ['product'] = $this->product_model->getAllproduct();
          $jumlah_data = $this->product_model->getAllproduct();
    if($this->input->post('keyword')){
            $data['product'] = $this->product_model->cariProduct();
        }
        // $data['judul'] = 'Daftar Barang';
        
         $this->load->library('pagination');
        $config['base_url'] = base_url().'/product/index';
        $config['total_rows'] = $jumlah_data;
        $config['per_page'] = 3;
        $from = $this->uri->segment(3);
        $this->pagination->initialize($config);     
        $data['product'] = $this->product_model->data($config['per_page'],$from);
        

        $this->load->view('templates/header', $data);
        $this->load->view('product/index', $data);
        $this->load->view('templates/footer');

    }


  
    public function addproduct()
        {  
            $data['judul'] = 'Add Product';
            $this->form_validation->set_rules('noproduct', 'No Product', 'required|is_unique[bptp.noproduct]');
            $this->form_validation->set_rules('namaproduct', 'Nama Product', 'required');
            if ($this->form_validation->run() == FALSE){
            $this->load->view('templates/header', $data);
            $this->load->view('product/addproduct');
            $this->load->view('templates/footer'); 
             
        }
        else
        {
            $this->product_model->addproductProduct();
            $this->session->set_flashdata('flash', ' Ditambahkan');
            redirect('product');
        }
    }

    

    public function hapus($noproduct)
    {
        $this->product_model->hapusproduct($noproduct);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('product');
    } 

    public function lihat($noproduct)
    {

        $data['judul'] = 'Detail Product';
        $data['product'] = $this->product_model->getProductById($noproduct);
        $this->load->view('templates/header', $data);
        $this->load->view('product/lihat', $data);
        $this->load->view('templates/footer');

    }

    public function update($noproduct)
        {  
            $data['judul'] = 'Update Product';
            $data['product'] = $this->product_model->getProductById($noproduct);
            $data['kelasproduct'] = ['FS','SS','ES'];
            $this->form_validation->set_rules('noproduct', 'No Product', 'required');
            $this->form_validation->set_rules('namaproduct', 'Nama Product', 'required');

            if ($this->form_validation->run() == false){
            $this->load->view('templates/header', $data);
            $this->load->view('product/update', $data);
            $this->load->view('templates/footer');    
        }
        else
        {
            $this->product_model->updateProduct();
            $this->session->set_flashdata('flash', ' Diupdate');
            redirect('product');
        }

    }

    public function search()
    {
        $katakunci = $this->input->post('katakunci');
        $data['product'] = $this->product_model->getCari($katakunci);
        $this->load->view('templates/header', $data);
        $this->load->view('product/index', $data);
        $this->load->view('templates/footer');

    }


    
}

?>

