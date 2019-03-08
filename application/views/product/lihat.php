<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
              Detail Product
            </div>
            <div class="card-body">
              <h5 class="card-title"><?php echo $product['noproduct']; ?></h5>
              <h6 class="card-subtitle mb-2 text-muted"><?php echo $product['namaproduct']; ?></h6>
              <p class="card-text"><?php echo $product['kelasproduct']; ?></p>
              <p class="card-text"><?php echo $product['hargaproduct']; ?></p>
              <a href="<?php echo base_url(); ?>product" class="btn btn-primary">Kembali</a>
            </div>
          </div>

        </div>

    </div>
</div>