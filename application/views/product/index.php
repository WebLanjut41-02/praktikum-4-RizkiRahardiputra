<div class="container">

<?php if($this->session->flashdata('flash') ): ?>
    <div class="row mt-3">
        <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Product<strong> Success</strong> <?php echo $this->session->flashdata('flash');  ?>.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        </div>
    </div>

    <?php endif ; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?php echo base_url(); ?>product/addproduct" class="btn btn-primary">Add Product</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
           <form action="<?php echo base_url(); ?>product/search" method="post">
                    <div class="input-group">
            <input type="text" class="form-control" placeholder="Cari Data" name="katakunci" >
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit" >Search</button>
            </div>
            </div>

           </form> 
        </div>
    </div>

<div class="row mt-3">
    <div class="col-md-6">
    <h3>Daftar Barang</h3>
        <ul class="list-group">
         <?php $no = $this->uri->segment('3') + 1;
          foreach ($product as $pdt) : ?>
            <li class="list-group-item">
                <?php echo $pdt->namaproduct; ?> 
                <a href="<?php echo base_url(); ?>product/hapus/<?php echo $pdt->noproduct; ?>" class="badge badge-danger float-right" onclick="return confirm('Anda yakin?'); ">Delete</a> 
                
                <a href="<?php echo base_url(); ?>product/lihat/<?php echo $pdt->noproduct; ?>" class="badge badge-primary float-right">Lihat</a>
                <a href="<?php echo base_url(); ?>product/update/<?php echo $pdt->noproduct; ?>" class="badge badge-success float-right">Update</a>
            </li>
        <?php endforeach; ?>   
        </ul>
        
           <?php 
             echo $this->pagination->create_links();
            ?>
         
  
    </div>
   
</div>

</div>