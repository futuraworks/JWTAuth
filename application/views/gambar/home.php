<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">        
        <title><?php echo SITE_NAME .": ". ucfirst($this->uri->segment(1)) ." - ". ucfirst($this->uri->segment(2)) ?></title>
        <?php $this->load->view("_load/css.php") ?>
    </head>
    <body>
    <?php $this->load->view("_partials/header.php") ?>
        <div class="container mt-5">
        <h3>Daftar Gambar</h3>
        <a href="<?php echo base_url('gambar/tambah') ?>"><button class="btn btn-primary">Tambah</button></a>
        </div>
        <?php 
            print_r ($data_gambar);
        ?>
        <?php $this->load->view("_load/js.php") ?>
    </body>
</html>