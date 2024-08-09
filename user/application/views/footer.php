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

</body>

</html>