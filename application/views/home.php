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
        Ini Home
        </div>
        <?php $this->load->view("_load/js.php") ?>
    </body>
</html>