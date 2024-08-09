<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BumiBaru</title>
  <link rel="icon" href="img/logo/logo-bumibaru3.png" type="image/png" />
  <link rel="stylesheet" href="headerCSS/header.css" />
  <link rel="stylesheet" href="globalCSS/global.css" />
  <link rel="stylesheet" href="footerCSS/footer.css" />




  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- icons -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <!-- animation -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">
</head>

<body>

  <div class="modal fade" id="profilModal" tabindex="-1" aria-labelledby="profilModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="profilModalLabel">Profil Pengguna</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="text-center mb-3">
            <i class='bx bxs-user' style="font-size: 4rem; color:#686D76;"></i>

          </div>
          <div class="mb-3">
            <label for="namaUser" class="form-label">Nama</label>
            <input type="text" class="form-control" id="namaUser" value="<?php echo $this->session->userdata("nama_user"); ?>" readonly>
          </div>
          <div class="mb-3">
            <label for="emailUser" class="form-label">Email</label>
            <input type="email" class="form-control" id="emailUser" value="<?php echo $this->session->userdata("email_user"); ?>" readonly>
          </div>
          <div class="mb-3">
            <label for="alamat_User" class="form-label">alamat</label>
            <input type="alamat_" class="form-control" id="alamat_User" value="<?php echo $this->session->userdata("alamat_user"); ?>" readonly>
          </div>
          <div class="mb-3">
            <label for="wa_User" class="form-label">wa</label>
            <input type="wa_" class="form-control" id="wa_User" value="<?php echo $this->session->userdata("wa_user"); ?>" readonly>
          </div>
          <!-- Tambahkan field lain yang diperlukan -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <a href="<?php echo base_url('loginsignup/ubahprofil') ?>" type="submit" class="btn btn-success">Ubah Akun</a>
        </div>
      </div>
    </div>
  </div>


  <header class="parallax-header">
    <nav data-aos="fade-zoom-in" data-aos-easing="ease-in-back" data-aos-delay="300" data-aos-duration="1900" data-aos-offset="0" class="navbar navbar-expand-lg p-2">
      <div class="container-fluid">
        <div class="d-flex align-items-center gap-2">
          <img src="img/logo/logo-bumibaru3.png" alt="" />
          <a class="navbar-brand text-white" href="<?php echo base_url('welcome') ?>">BUMIBARU</a>
        </div>

        <ul class="navbar-nav gap-4">
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo base_url('bumiBaruPerusahaan') ?>">Perusahaan Kami</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="<?php echo base_url('produklayanan') ?>">Produk</a>
          </li>



          <?php if ($this->session->userdata("id_user")) : ?>

            <li class="nav-item">
              <a class="nav-link text-white" href="<?php echo base_url('logout') ?>">Logout</a>
            </li>

            <li class="nav-item">
              <a class="nav-link text-light d-flex align-items-center justify-content-center gap-1" href="#" data-bs-toggle="modal" data-bs-target="#profilModal">
                <i style="position: relative; top:2px;" class='bx bx-user'></i> <?php echo $this->session->userdata("nama_user"); ?>
              </a>
            </li>

          <?php endif; ?>

        </ul>

        <?php if (!$this->session->userdata("id_user")) : ?>

          <a href="<?php echo base_url('loginsignup/login') ?>" class="contact-us">Masuk</a>

        <?php endif; ?>






      </div>
    </nav>
  </header>

  <!-- ullpage start -->

  <a href="https://wa.me/1243827522" target="_blank">
    <i id="wa" class="bx bxl-whatsapp" style="cursor: pointer"></i>
  </a>