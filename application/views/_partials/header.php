<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
  <div class="container">    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a href="<?php echo base_url();?>" class="navbar-brand text-light">Dashboard</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle <?php if($this->session->userdata('adminlogin') !== true){ echo 'disabled';} ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Menu
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <?php if($this->session->userdata('adminlevel') == 'Admin'){ ?>
            <a class="dropdown-item" href="?go=akun">Akun</a>
            <div class="dropdown-divider"></div>
            <?php } ?>
            <a class="dropdown-item" href="?go=praktikan">Praktikan</a>
            <a class="dropdown-item" href="?go=jadwalpraktikan">Jadwal Praktikan</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="?go=kursus">Jadwal Kursus</a>
            <a class="dropdown-item" href="?go=nilaiteori">Nilai Teori</a>
            <a class="dropdown-item" href="?go=nilaipraktik">Nilai Praktik</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="?go=rekapnilai">Rekap Nilai</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="?go=soalpraktikum">Soal Praktikum</a>
          </div>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active dropdown">
          <a class="nav-link dropdown-toggle <?php if($this->session->userdata('adminlogin') !== true){ echo 'disabled';} ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?php  
          if($this->session->userdata('adminlogin')){
            print $this->session->userdata('namalengkap_admin');
          } else {
            print "Anda belum login";
          }
        ?>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="?go=admin&type=edit&id=<?php echo $this->session->userdata('npm_admin') ?>">Edit Akun</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo base_url('logout'); ?>">Keluar</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>