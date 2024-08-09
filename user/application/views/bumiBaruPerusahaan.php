<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BumiBaru</title>
  <link rel="icon" href="img/logo/logo-bumibaru3.png" type="image/png" />
  <link rel="stylesheet" href="headerCSS/header.css" />
  <link rel="stylesheet" href="globalCSS/perusahaan.css" />
  <link rel="stylesheet" href="footerCSS/footer.css" />




  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <!-- icons -->
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <!-- animation -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
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
          <a type="submit" href="<?php echo base_url('loginsignup/ubahprofil') ?>"  class="btn btn-success">Ubah Akun</a>
        </div>
      </div>
    </div>
  </div>

  <header class="parallax-header">
    <nav  class="navbar navbar-expand-lg p-2">
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

          <a href="<?php echo base_url('loginsingup/login') ?>" class="contact-us">Masuk</a>

        <?php endif; ?>






      </div>
    </nav>
  </header>
  <!-- ullpage start -->

  <a href="https://wa.me/1243827522" target="_blank">
    <i id="wa" class="bx bxl-whatsapp" style="cursor: pointer"></i>
  </a>



  <section class="section1 d-flex flex-column gap-3 justify-content-center align-items-center">
    <div class="section1-card">
      <div class="d-flex flex-column justify-content-center align-items-center">
        <img src="img/logo/logo-bumibaru2.png" alt="" />
        <h2 class="text-center mt-2">Sejarah Kami</h2>
      </div>

      <p class="text-center">
        "Dari awal yang Sederhana dalam daur ulang pada tahun 2024, BumiBaru
        didirikan dengan misi sederhana. Mengurangi dampak negatif sampah
        terhadap lingkungan dan menciptakan dunia yang lebih bersih dan hijau.
        Dimulai dengan sebuah usaha kecil dan kemauan kami sebagai pemuda
        Amikom dan juga Indonesia. Kami berfokus pada daur ulang kertas,
        plastik dan lainnya. Melibatkan komunitas lokal dalam upaya
        pengelolaan sampah yang lebih baik. Tahun demi tahun berjalan kita
        melihat krisis sampah makin merajalela. Untuk itu, komitmen kami
        terhadap keberlanjutan dan inovasi membawa Bumi Baru menuju
        pertumbuhan yang pesat hingga tahun 2045 dimana Indonesia mencapai
        puncak emas. <br /><br />

        Menghadapi Tantangan dengan Solusi Berkelanjutan Memasuki tahun 2025,
        BumiBaru menghadapi tantangan nasional dalam pengelolaan limbah sampah
        yang memuncak terutama sampah organik. Menyadari pentingnya masalah
        ini, kami mengajak masyarakat untuk memilah sampah dengan baik agar
        kami dapat menampung sampah tersebut untuk diolah nantinya. Kami akan
        bekerja sama dengan pemerintah, perusahaan, dan komunitas untuk terus
        mengembangkan solusi berkelanjutan yang dapat mengurangi jejak karbon
        dan mempromosikan gaya hidup yang ramah lingkungan. Dedikasi Kami
        Terhadap Komunitas dan Lingkungan Di setiap langkah perjalanan kami,
        BumiBaru tetap berpegang pada nilai-nilai inti kami. Dedikasi terhadap
        lingkungan, inovasi berkelanjutan, dan pemberdayaan komunitas. Kami
        percaya bahwa dengan bersama-sama, kita dapat menciptakan masa depan
        yang lebih bersih, lebih hijau, dan lebih sehat untuk generasi
        indonesia emas 2045 mendatang. "
      </p>

      <h3 class="text-center">Visi Misi Kami</h3>
      <p class="text-center">
        Visi kami menjadi pelopor inovasi lingkungan yang berkelanjutan,
        dengan menciptakan solusi pengelolaan sampah terintregasi yang
        meberdayakan masyarakat dan melestarikan bumi.
      </p>
      <p class="text-center">
        Misi kami adalah menggembangkan teknologi inovatif dengan menciptakan
        dan menginplementasikan teknologi terbaru dalam pengelolaaan sampah
        yang efesien dan ramah lingkungan, edukasi dan kesadaran kepada
        masyarakat pentingnya pengelolaan sampah melalui programedukasi yang
        komprehensif dan mudah diakses. Misi kami selanjutnya ialah pelayanan
        pengampilan sampah terdepan dengan bekerja bersama organisasi dan
        masyarakat untuk menciptakan dampak positif yang nyata terhadap
        lingkungan.
      </p>
    </div>
  </section>

  <section class="section2 d-flex flex-column gap-3">
    <h1 class="text-center">Program Unggulan</h1>

    <div class="d-flex align-items-center gap-2 admin">
      <img src="img/img-card-sec2/fiq.webp" alt="" />
      <div>
        <p class="fw-bold">Bumibaru Rewards</p>
        <p>
          Program insentif yang diberikan kepada pengguna yang mendaur ulang
          sampah di BumiBaru. Pengguna akan mendapatkan bonus untuk setiap
          aktivitas daur ulang yang mereka lakukan.
        </p>
        <span>Minggu, 23 juni 2024</span>
      </div>
    </div>

    <div class="d-flex align-items-center gap-2 admin">
      <img src="img/img-card-sec2/tip.webp" alt="" />
      <div>
        <p class="fw-bold">Layanan Penjemputan dan Pemilahan Sampah</p>
        <p>
          Layanan ini menyediakan penjemputan sampah terpilah dari rumah
          pengguna untuk memastikan sampah tersebut diolah dan didaur ulang
          dengan benar di BumiBaru.
        </p>
        <span>Senin, 24 juni 2024</span>
      </div>
    </div>
    <div class="d-flex align-items-center gap-2 admin">
      <img src="img/img-card-sec2/rey.webp" alt="" />
      <div>
        <p class="fw-bold">Bumibaru Edukasi dan Komunitas</p>
        <p>
          Platform edukasi yang menyediakan informasi lengkap tentang daur
          ulang, serta membangun komunitas peduli lingkungan.
        </p>
        <span>Selasa, 25 juni 2024</span>
      </div>
    </div>
  </section>

  <section class="section3 d-flex flex-column justify-content-center gap-5">


    <h4 class="text-center">" Mendaur ulang akan membuat perbedaan besar. Menggunakan produk daur ulang akan membuat perbedaan besar. Menggunakan kembali barang-barang, tidak menggunakan gelas kertas akan membuat perbedaan besar dan setiap kali Anda melakukannya, itulah sebuah kemenangan."</h4>

    <p class="fw-bold text-white text-center">-Emily Deschanel</p>

  </section>



  <footer id="section6" class="verval6 section">
    <div class="footer d-flex justify-content-between gap-5">
      <section class="footer-logo d-flex flex-column gap-2">
        <div class="verval-logo-footer">
          <h1>BumiBaru</h1>
        </div>
        <p>
          Kami berkomitmen Untuk Menjaga Lingkungan <br />
          Yang Sehat, Bersih Dan Damai. Bersama Masyarakat Ayok Ciptakan
          Lingkungan Yang Kita Impikan<br />
        </p>
        <div class="logo d-flex gap-3">
          <i class="bx bxl-facebook"></i>
          <i class="bx bxl-twitter"></i>
          <i class="bx bxl-instagram-alt"></i>
          <i class="bx bxl-linkedin"></i>
          <i class="bx bxl-youtube"></i>
        </div>
      </section>

      <section>
        <h5>Kontak Kami</h5>
        <br />

        <div class="d-flex align-items-center gap-1">
          <i style="position: relative; bottom: 5px; font-size: 17px" class="bx bx-envelope"></i>
          <p>BumiBaru@gmail.com</p>
        </div>
        <div class="d-flex align-items-center gap-1">
          <i style="position: relative; bottom: 5px; font-size: 17px" class="bx bx-phone"></i>
          <p>(+62)81243827522</p>
        </div>
      </section>

      <section>
        <h5>Bantuan</h5>
        <br />
        <p>FAQ</p>
      </section>

      <section>
        <h5>Lokasi</h5>
        <br />

        <p>
          Gg. Rukun no.51, RT 3 RW 54<br />
          Jl. K.H. Hasyim, Krapyak,<br />
          Wedomartani, Sleman, Yogyakarta <br />
          Indonesia
        </p>
      </section>
    </div>
    <br />

    <hr class="garis" />

    <div style="position: relative; top: 1rem" class="d-flex justify-content-between">
      <p>Copyright &copy; 2024 BumiBaru</p>

      <div class="footer-end">
        <p>
          All Rights Reserved |<span class="terms">
            Terms And Conditions </span>| <span class="pripacy">Pripacy Policy</span>
        </p>
      </div>
    </div>
  </footer>

  <!-- js script -->

  <script src="home.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>