<div class="container">

        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
            <div class="card-header">
                   Form Update Data Product
        </div>
     <div class="card-body">
    
     <form action="" method="post">
          <input type="hidden" name="$noproduct" value="<?php echo $product['noproduct']; ?>">
        <div class="form-group">
             <label for="noproduct">No Product</label>
             <input type="text" name="noproduct"class="form-control" id="noproduct" value=" <?php echo $product['noproduct']; ?>" placeholder="Masukkan No Product">
             <small  class="form-text text-danger"><?php echo form_error('noproduct'); ?></small>
        </div>
        <div class="form-group">
             <label for="namaproduct">Nama Product</label>
             <input type="text" name="namaproduct" class="form-control" id="namaproduct" value=" <?php echo $product['namaproduct']; ?>" placeholder="Masukkan Nama Product">
             <small  class="form-text text-danger"><?php echo form_error('namaproduct'); ?></small>
        </div>
        <div class="form-group">
            <label for="kelasproduct">Kelas Product</label>
            <select class="form-control" id="kelasproduct" name="kelasproduct">
                 <?php foreach( $kelasproduct as $kls ) : ?>
                 <?php if($kls == $product['kelasproduct']) : ?>
            <option value="<?php echo $kls; ?>"selected><?php echo $kls; ?></option>
<?php else : ?>
<option value="<?php echo $kls; ?>"><?php echo $kls; ?></option>

<?php endif ?>
           
<?php endforeach; ?>
            </select>
  </div>
        <div class="form-group">
             <label for="hargaproduct">Harga Product</label>
             <input type="text" name="hargaproduct" class="form-control" id="hargaproduct" value=" <?php echo $product['hargaproduct']; ?>" placeholder="Masukkan Harga Product">
             <small  class="form-text text-danger"><?php echo form_error('hargaproduct'); ?></small>
        </div>
<center>
        <button type="submit" name="update" class="btn btn-primary">Update Product</button>
        </center>
        </form>
         </div>
    </div>
        
   

    </div>
</div>
</div>