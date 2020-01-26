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
        <form name="formlogin" method="post" action="<?php echo base_url('login/getLogin'); ?>">
          <div class="form-group">
        	<h2>Login Auth</h4>	
          </div>
          <div class="form-group">
            <input type="input" class="form-control" id="username" name="username" placeholder="Username" required>
          </div>
          <div class="form-group">
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
          </div>
          <button type="submit" class="btn btn-primary">Login</button>
        </form>
        </div>
        <?php $this->load->view("_load/js.php") ?>
    </body>
</html>