<?php

$template = array(
    'table_open' => '<table class = table table-stripped table-bordered'>
);

$this->table->set_template($template);
$this->table->set_heading('noproduct', 'namaproduct', 'kelasproduct', 'hargaproduct');

echo $this->table->generate('');
echo base_url('')

?>