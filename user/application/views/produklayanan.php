<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>BumiBaru</title>
  <link rel="icon" href="img/logo/logo-bumibaru3.png" type="image/png" />
  <link rel="stylesheet" href="headerCSS/header.css" />
  <link rel="stylesheet" href="globalCSS/produk_layanan.css" />
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
          <a type="submit" href="<?php echo base_url('loginsignup/ubahprofil') ?>" class="btn btn-success">Ubah Akun</a>
        </div>
      </div>
    </div>
  </div>

  <!-- modal -->


  <header class="parallax-header">
    <nav class="navbar navbar-expand-lg p-2">
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




  <div class="modal fade" id="jualModal" tabindex="-1" aria-labelledby="jualModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="jualModalLabel">Jual Sekarang</h5>
        </div>
        <div class="modal-body">

          <form action="<?php echo base_url('Penjualan/tambah_proses'); ?>" class="d-flex gap-3 flex-column" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label for="kategori">Kategori</label>
              <input id="kategori" name="kategori" class="form-control" value="" readonly />
            </div>
            <div class="form-group">
              <label for="wa_user">WhatsApp Aktif</label>
              <input type="number" class="form-control" name="wa_user" required />
              <span style="color: #FF8989;" class="text-danger">
                <?php echo form_error("wa_user") ?>
              </span>
            </div>
            <div class="form-group">
              <label for="foto_sampah">Foto Sampah</label>
              <input type="file" class="form-control" name="foto_sampah" required />

            </div>
            <div class="form-group">
              <label for="tanggal_penjemputan_sampah">Tanggal Penjemputan Sampah</label>
              <input required type="date" class="form-control" name="tanggal_penjemputan_sampah" />
              <span style="color: #FF8989;" class="text-danger">
                <?php echo form_error("tanggal_penjemputan_sampah") ?>
              </span>
            </div>
            <div class="form-group">
              <label for="itemQuantity">Berat Sampah (Kg)</label>
              <input required type="number" class="form-control" id="itemQuantity" placeholder="Masukkan jumlah item" name="berat_sampah" oninput="updateSubtotal()" />
              <span style="color: #FF8989;" class="text-danger">
                <?php echo form_error("berat_sampah") ?>
              </span>

            </div>
            <div class="form-group">
              <label for="itemPrice">Harga Yang Di Peroleh</label>
              <input type="text" class="form-control" id="itemPrice" name="subtotal" readonly />
              <span style="font-size: 12px" class=" text-danger">*Untuk perkilo harga sampah tergantung dengan kategori sampah yang dijual</span>

            </div>
            <div class="form-group">
              <label for="metode_bayar">Metode Penerimaan Bonus</label>
              <select class="form-control" name="metode_bayar">
                <option value="cash">Cash</option>
              </select>
            </div>
            <!-- Hidden input untuk id_kategori, harga_perkilo, dan subtotal -->
            <input type="hidden" id="hiddenKategoriId" name="id_kategori" value="">
            <input type="hidden" id="hiddenHargaPerkilo" name="harga_perkilo" value="">
            <input type="hidden" id="hiddenSubtotal" name="sub_total" value="">
            <button type="submit" class="btn btn-success">Jual</button>
          </form>



        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </div>
  </div>
  <!-- modal end -->

  <section class="section1">
    <h3 class="text-center">Daur Ulang Sampah Dan Dapatkan Bonusnya Sekarang!</h3>
    <div class="container">
      <div class="row mt-5 g-4">
        <!-- Added g-4 for spacing between columns and rows -->
        <?php if (!$this->session->userdata("id_user")) : ?>
          <?php foreach ($kategori as $v) : ?>
            <div class="col-md-4 d-flex align-items-stretch">
              <div class="card shadow" style="width: 100%;">
                <img id="foto-daur-1" src="<?php echo $this->config->item("url_kategori") . $v["foto_kategori"] ?>" class="card-img-top" alt="..." style="height: 12rem; object-fit: cover" />
                <div class="card-body d-flex flex-column">
                  <p class="card-text fw-bold"><?php echo $v['nama_kategori']; ?></p>
                  <button class="btn btn-dark mt-auto jual-sekarang" data-login-url="<?php echo site_url('loginsignup/login'); ?>">Jual Sekarang</button>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        <?php else : ?>
          <?php foreach ($kategori as $v) : ?>
            <div class="col-md-4 d-flex align-items-stretch">
              <div class="card shadow" style="width: 100%;">
                <img id="foto-daur-1" src="<?php echo $this->config->item("url_kategori") . $v["foto_kategori"] ?>" class="card-img-top" alt="..." style="height: 12rem; object-fit: cover" />
                <div class="card-body d-flex flex-column">
                  <p class="card-text fw-bold"><?php echo $v['nama_kategori']; ?></p>
                  <button class="btn btn-dark mt-auto jual-sekarang" data-toggle="modal" data-target="#jualModal" data-kategori-id="<?php echo $v['id_kategori']; ?>" data-kategori-nama="<?php echo $v['nama_kategori']; ?>">Jual Sekarang</button>
                </div>
              </div>
            </div>
          <?php endforeach ?>
        <?php endif; ?>
      </div>
    </div>
  </section>

  <section class="section2">
    <h2 class="text-center">Konten Edukasi</h2>

    <div class="d-flex gap-5 p-5">
      <div class="d-flex gap-3">
        <div>
          <h5>Samsi dan Kotak Daur Ulang</h5>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/y0OakCkAXCw?si=xPFgHX9oTrvZlvaY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <p class="text-white">Sumber By : Greeneration Foundation</p>
        </div>
      </div>

      <div class="d-flex gap-3 align-items-center">
        <div>
          <h5>Sejauh Mana Masalah Sampah di Indonesia?</h5>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/i0bb7Et0ots?si=aBKQpVDaR8CxKak0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <p class="text-white">Sumber By : Rekam Nusantara</p>
        </div>
      </div>
    </div>

    <div class="d-flex gap-5 p-5">
      <div class="d-flex gap-3 align-items-center">
        <div>
          <h5>Proses Modern Daur Ulang Sampah Di Negara Maju</h5>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/a3yjtSHNnpo?si=EDLccBrVzbr0P317" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <p class="text-white">Sumber By :REKAYASA PRODUKSI</p>
        </div>
      </div>
      <div class="d-flex gap-3 align-items-center">
        <div>
          <h5>Keren! Dinas Lingkungan Hidup DKI Jakarta Daur Ulang Sampah Alat Peraga Kampanye jadi Kompos</h5>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/M7dZU5Zoawo?si=3fcWBVO6rUWo_j_v" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
          <p class="text-white">Sumber By : KOMPASTV</p>
        </div>
      </div>
    </div>
  </section>

  <!-- testimoni section-->

  <section class="testimoni">
    <div class="container w-75">
      <h2 class="text-center">Kata Mereka</h2>
      <div id="carouselTestimoni" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner p-3 text-center">
          <?php foreach ($komentar as $k => $v) : ?>
            <div class="carousel-item <?php echo $k === 0 ? 'active' : ''; ?>">
              <div class="testimonial-item p-3">
                <i class="bx bxs-user-circle"></i>
                <p><?php echo $v['deskripsi_penilaian']; ?></p>
                <h4><?php echo $v['nama_penilaian']; ?></h4>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselTestimoni" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#carouselTestimoni" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </a>
      </div>
      <form class="mt-5" method="post" action="<?php echo base_url('komentar/tambah') ?>" enctype="multipart/form-data">
        <h5 class="text-center">Yuk Ikut Komentar</h5>
        <div class="mb-3">
          <input placeholder="Nama" type="text" name="nama_penilaian" />
        </div>
        <div class="mb-3">
          <textarea placeholder="Komentar Anda.." name="deskripsi_penilaian"></textarea>
        </div>
        <button type="submit" class="btn btn-dark">Kirim</button>
      </form>
    </div>
  </section>

  <section class="faq">
    <h2 class="text-center">FAQ</h2>
    <div class="container my-5">
      <div id="accordion">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn d-flex align-items-center justify-content-between w-100" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Apa itu BumiBaru?
                <i class="bx bxs-chevron-down"></i>
              </button>
            </h5>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              BumiBaru adalah perusahaan yang berfokus pada daur ulang sampah
              untuk menciptakan lingkungan yang lebih bersih dan hijau. Kami
              menawarkan berbagai layanan termasuk pengumpulan, pemilahan,
              pengolahan sampah, dan edukasi masyarakat tentang pentingnya
              daur ulang. Selain itu, kami juga memberikan bonus kepada
              masyarakat bila menjual sampah di BumiBaru sesuai dengan
              ketegori sampah yang tersedia.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn collapsed d-flex align-items-center justify-content-between w-100" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Bagaimana cara menggunakan layanan pengumpulan sampah
                BumiBaru?
                <i class="bx bxs-chevron-down"></i>
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              Untuk menggunakan layanan pengumpulan sampah kami, Anda bisa
              masuk pada halaman produk&layanan pada halaman pertama tersedia
              kategori sampah yang ingin dijual. Anda bisa menyalurkan sampah
              tersebut pada fitur tersebut. Anda juga bisa Menghubungi kami
              melalui telepon, email atau Wa yang tersedia untuk menjadwalkan
              pengambilan sampah. Kami akan menyediakan kontainer dan kendaran
              khusus kemudian mengambil sampah dari lokasi Anda sesuai jadwal
              yang telah disepakati.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn collapsed d-flex align-items-center justify-content-between w-100" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Apa saja jenis sampah yang bisa didaur ulang oleh BumiBaru?
                <i class="bx bxs-chevron-down"></i>
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Kami menerima berbagai jenis sampah untuk didaur ulang, termasuk
              kertas, plastik, logam, kaca, dan limbah elektronik dan sampah
              Organik. Setiap jenis sampah diproses dengan metode yang berbeda
              untuk memastikan hasil daur ulang yang maksimal dan aman bagi
              lingkungan.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingFour">
            <h5 class="mb-0">
              <button class="btn collapsed d-flex align-items-center justify-content-between w-100" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Bagaimana BumiBaru mengedukasi masyarakat tentang pentingnya
                daur ulang?
                <i class="bx bxs-chevron-down"></i>
              </button>
            </h5>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
              BumiBaru mengadakan berbagai program edukasi dan sosialisasi
              yang ditujukan untuk sekolah, perusahaan, dan masyarakat umum.
              Program ini mencakup seminar, workshop, dan kampanye publik yang
              bertujuan meningkatkan kesadaran tentang pentingnya daur ulang
              dan cara mengelola sampah dengan benar.
            </div>
          </div>
        </div>
        <!-- Tambahkan lebih banyak FAQ sesuai kebutuhan -->
      </div>
    </div>
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

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    <?php if ($this->session->flashdata('pesan_sukses')) : ?>
      Swal.fire({
        title: 'Sukses!',
        text: '<?php echo $this->session->flashdata('pesan_sukses'); ?>',
        icon: 'success'
      });
    <?php endif; ?>

    <?php if ($this->session->flashdata('pesan_gagal')) : ?>
      Swal.fire({
        title: 'Gagal!',
        text: '<?php echo $this->session->flashdata('pesan_gagal'); ?>',
        icon: 'error'
      });
    <?php endif; ?>
  </script>




  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var jualButtons = document.querySelectorAll('.jual-sekarang');
      jualButtons.forEach(function(button) {
        button.addEventListener('click', function() {
          var kategoriId = button.getAttribute('data-kategori-id');
          var kategoriNama = button.getAttribute('data-kategori-nama');
          document.getElementById('hiddenKategoriId').value = kategoriId;
          document.getElementById('kategori').value = kategoriNama;
        });
      });
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      document.querySelectorAll('.jual-sekarang').forEach(function(button) {
        button.addEventListener('click', function() {
          var loginUrl = this.getAttribute('data-login-url');
          if (loginUrl) {
            window.location.href = loginUrl;
          }
        });
      });
    });
  </script>


  <script>
    var kategoriHarga = <?php echo json_encode($kategori); ?>;

    function updateSubtotal() {
      var kategoriId = document.getElementById('hiddenKategoriId').value;
      var beratSampah = document.getElementById('itemQuantity').value;

      // Menghapus titik dari string beratSampah dan mengonversi ke integer
      beratSampah = beratSampah ? parseInt(beratSampah.replace(/\./g, '')) : 0;

      console.log("Kategori ID:", kategoriId);
      console.log("Berat Sampah:", beratSampah);

      var hargaPerKilo = 0;

      // Cari harga_perkilo berdasarkan kategoriId
      for (var i = 0; i < kategoriHarga.length; i++) {
        if (kategoriHarga[i]['id_kategori'] == kategoriId) {
          // Mengambil harga_perkilo tanpa mengonversi ke integer
          hargaPerKilo = kategoriHarga[i]['harga_perkilo'];
          break;
        }
      }

      console.log("Harga per Kilo:", hargaPerKilo);

      var subtotal = 0;

      // Hitung subtotal hanya jika berat sampah diisi
      if (beratSampah > 0) {
        subtotal = beratSampah * hargaPerKilo;
      }

      console.log("Subtotal:", subtotal);

      var formattedHargaPerKilo = formatRibuan(hargaPerKilo); // Memformat harga_perkilo ke ribuan jika diperlukan
      var subtotalFormatted = formatRibuan(subtotal); // Memformat subtotal ke ribuan jika diperlukan

      // Menetapkan nilai yang diformat ke dalam elemen HTML
      if (isNaN(subtotal) || subtotal === 0) {
        // Jika subtotal tidak valid atau berat sampah tidak diisi, atur placeholder
        document.getElementById('itemPrice').setAttribute('placeholder', 'Sub Total');
        document.getElementById('itemPrice').value = ""; // Kosongkan nilai subtotal
      } else {
        // Jika subtotal valid, atur nilai input dan hapus placeholder
        document.getElementById('itemPrice').value = subtotalFormatted;
        document.getElementById('itemPrice').removeAttribute('placeholder');
      }

      // Menetapkan nilai yang tidak diformat (untuk pengolahan di belakang layar) ke input hidden
      document.getElementById('hiddenHargaPerkilo').value = hargaPerKilo; // Simpan nilai tanpa format ribuan
      document.getElementById('hiddenSubtotal').value = subtotal;
    }

    function formatRibuan(angka) {
      // Mengubah angka menjadi string terlebih dahulu
      var angkaString = angka.toString();

      // Memisahkan bagian desimal jika ada
      var parts = angkaString.split('.');
      var partBeforeDecimal = parts[0];
      var partAfterDecimal = parts.length > 1 ? '.' + parts[1] : '';

      // Menambahkan titik sebagai pemisah ribuan atau jutaan menggunakan regex
      partBeforeDecimal = partBeforeDecimal.replace(/\B(?=(\d{3})+(?!\d))/g, ".");

      // Menggabungkan kembali bagian sebelum dan sesudah desimal
      return partBeforeDecimal + partAfterDecimal;
    }

    document.addEventListener("DOMContentLoaded", function() {
      // Event listener untuk menghitung subtotal saat input berat_sampah diubah
      document.getElementById('itemQuantity').addEventListener('input', updateSubtotal);

      // Event listener pada modal saat dibuka (menggunakan jQuery)
      $('#jualModal').on('show.bs.modal', function(event) {
        var button = $(event.relatedTarget); // Tombol yang memicu modal
        var kategoriId = button.data('kategori-id'); // Ambil data kategori-id dari atribut data
        var kategoriNama = button.data('kategori-nama'); // Ambil data kategori-nama dari atribut data

        // Update nilai input hidden dan field kategori
        document.getElementById('hiddenKategoriId').value = kategoriId;
        document.getElementById('kategori').value = kategoriNama;

        // Update subtotal saat modal dibuka
        updateSubtotal();
      });
    });
  </script>
</body>

</html>