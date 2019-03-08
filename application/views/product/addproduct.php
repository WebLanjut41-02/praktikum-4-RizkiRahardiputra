<div class="container">

        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
            <div class="card-header">
                   Form Add Data Product
        </div>
     <div class="card-body">
          
    
     <form action="" method="post">
        <div class="form-group">
             <label for="noproduct">No Product</label>
             <input type="text" name="noproduct"class="form-control" id="noproduct" placeholder="Masukkan No Product">
             <small  class="form-text text-danger"><?php echo form_error('noproduct'); ?></small>
        </div>
        <div class="form-group">
             <label for="namaproduct">Nama Product</label>
             <input type="text" name="namaproduct" class="form-control" id="namaproduct" placeholder="Masukkan Nama Product">
             <small  class="form-text text-danger"><?php echo form_error('namaproduct'); ?></small>
        </div>
        <div class="form-group">
            <label for="kelasproduct">Kelas Product</label>
            <select class="form-control" id="kelasproduct" name="kelasproduct">
            <option value="FS">FS</option>
            <option value="SS">SS</option>
            <option value="ES">ES</option>
            </select>
  </div>
        <div class="form-group">
             <label for="hargaproduct">Harga Product</label>
             <input type="text" name="hargaproduct" class="form-control" id="hargaproduct" placeholder="Masukkan Harga Product">
             <small  class="form-text text-danger"><?php echo form_error('hargaproduct'); ?></small>
        </div>
<center>
        <button type="submit" name="addproduct" class="btn btn-primary">Add Product</button>
        </center>
        </form>
         </div>
    </div>
        
   

    </div>
</div>
</div>