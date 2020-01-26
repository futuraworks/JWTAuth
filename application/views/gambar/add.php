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
        <h3>Upload Gambar</h3>
        <?php if ($this->session->flashdata('success')): ?>
		<div class="alert alert-success fade show" role="alert">
			<?php echo $this->session->flashdata('success'); ?>            
	      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	        <span aria-hidden="true">&times;</span>
	      </button>
		</div>
		<?php endif; ?>
        <form action="<?php echo base_url('gambar/tambah'); ?>" method="post" enctype="multipart/form-data">
            <div class="form-group">
				<label for="name">Nama Gambar</label>
				<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
				 type="text" name="name" placeholder="Nama" />
				<div class="invalid-feedback">
					<?php echo form_error('name') ?>
				</div>
			</div>
            <div class="form-group">
                <label>Upload Gambar</label>
                <input type="file" name="image" class="form-control-file">
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit">Upload</button>
                <a href="<?php echo site_url('gambar') ?>"><button type="button" class="btn btn-primary">Kembali</button></a>
            </div>
        </form>
        </div>
        <?php $this->load->view("_load/js.php") ?>
    </body>
</html>