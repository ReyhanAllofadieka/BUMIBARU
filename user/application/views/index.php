    <section class="section" id="section0">
      <div
        class="paralax d-flex align-items-center justify-content-center flex-column"
      >
        <div
          class="excel"
          data-aos="fade-zoom-in"
          data-aos-easing="ease-in-back"
          data-aos-delay="300"
          data-aos-duration="1900"
          data-aos-offset="0"
        >
          <div class="excel-2">
            <h1 class="text-white text-center">RECYCLE</h1>
            <marquee
              scrollamount="4"
              id="marqueeContainer"
              style="white-space: nowrap"
            >
              <ul
                class="d-flex gap-4 text-white mt-4"
                style="font-size: 1.2rem"
              >
                <li>Sayangi Lingkungan Bersama Kami</li>
                <li>Berikan Lingkungan Yang Sehat Untuk Anak Cucu Kita</li>
                <li>Salurkan Sampah Kalian Disini</li>
                <li>Ada Sampah Ada Cuan</li>
              </ul>
            </marquee>
          </div>
          <span
            style="position: absolute; top: 100%; bottom: 0"
            class="scroll-down d-flex flex-column g-4 align-items-center justify-content-center text-white"
          >
            scroll down
            <i
              style="position: relative; top: 1rem"
              class="bx bx-mouse animate__animated animate__bounce animate__infinite"
            ></i>
          </span>
        </div>
      </div>
    </section>

    <!-- section bumi1 -->

    <section
      class="verval1 section d-flex justify-content-center align-items-center"
      id="section1"
    >
      <div class="siku">
        <div class="siku-2 d-flex align-items-center gap-2">
          <div class="img1"></div>

          <div class="container">
            <h1 class="who-we-are">Tentang Kami</h1>
            <p>
              BumiBaru adalah sebuah tim yang berkomitmen untuk mengedukasi
              masyarakat tentang pentingnya menjaga kebersihan lingkungan
              terutama daur ulang sampah. Melalui berbagai artikel informatif,
              BumiBaru berbagi pengetahuan tentang proses daur ulang, manfaatnya
              bagi lingkungan, dan langkah-langkah praktis yang dapat dilakukan
              setiap individu untuk ikut berkontribusi serta benefit yang
              didapat masyarakat ketika melalukan daur ulang sampah di BumiBaru.
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- section bumi 2 -->

    <section class="verval2 section" id="section2">
      <h1 class="text-center mt-5">Tim Kami</h1>
      <div
        id="img-container"
        class="card-container d-flex gap-lg-5 align-items-center justify-content-center"
      >
        <img class="img " src="img/img-card-sec2/tip.webp" alt="" id="card-1" />
        <img class="img" src="img/img-card-sec2/fiq.webp" alt="" id="card-2" />
        <img class="img" src="img/img-card-sec2/rey.webp" alt="" id="card-3" />
      </div>
    </section>

     <section class="section2">
      <h2 class="text-center">Layanan</h2>
      <div class="d-flex flex-column gap-3 mt-3">
        <div class="d-flex gap-3 align-items-center">
          <img
            src="img/foto-layanan-kami/layanan1.webp"
            alt=".."
          />
          <div>
            <h5>Pengumpulan Sampah</h5>
            <p>
              Kami menawarkan layanan pengumpulan sampah untuk di daur ulang
              secara terjadwal dan fleksibel. Tim kami siap mengambil sampah
              dari lokasi Anda sesuai dengan jadwal yang telah disepakati. Kami
              menyediakan kontainer dan kendaraan khusus untuk memastikan proses
              pengumpulan berjalan lancar.
            </p>
          </div>
        </div>

        <div class="d-flex gap-3 align-items-center">
          <img
            src="img/foto-layanan-kami/layanan3.webp"
            alt=".."
          />
          <div>
            <h5>Pemilahan dan Pengolahan</h5>
            <p>
              Sampah yang terkumpul akan dipilah secara teliti sesuai dengan
              jenisnya. Kami memiliki sistem pengolahan modern yang memungkinkan
              kami untuk mendaur ulang berbagai jenis material seperti kertas,
              plastik, logam, dan kaca. Proses ini dilakukan dengan
              memperhatikan standar keamanan lingkungan dan kesehatan.
            </p>
          </div>
        </div>

        <div class="d-flex gap-3 align-items-center">
          <img src="img/foto-layanan-kami/utama53.jpg" alt=".." />
          <div>
            <h5>Edukasi Masyarakat</h5>
            <p>
              Kami percaya bahwa pendidikan adalah kunci untuk mengubah perilaku
              masyarakat terkait pengelolaan sampah. Oleh karena itu, kami
              mengadakan program edukasi dan sosialisasi untuk sekolah,
              perusahaan, dan masyarakat umum tentang pentingnya daur ulang dan
              cara-cara praktis untuk mengurangi sampah.
            </p>
          </div>
        </div>
      </div>
    </section>


    <!-- 2  -->
    <section class="berita">
      <h1 class="text-center">Artikel</h1>

      <div class="container d-flex justify-content-center">
        <div class="row">
        <?php foreach ($artikel as $k => $v): ?>
          <div class="col-md-4">
            <div class="card shadow" style="width: 18rem">
              
              <img
                id="foto-daur-1"
                src="<?php echo $this->config->item("url_artikel").$v["foto_artikel"] ?>"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <p class="fw-bold"><?php echo $v['judul_artikel']; ?></p>
                <p class="card-text">
                  <?php echo $v['isi_artikel']; ?>
                </p>
              </div>
            </div>
          </div>
          <?php endforeach ?>
        </div>
      </div>
    </section>

    <!-- 3 -->

    <section
      class="verval3 section p-5 d-flex align-items-center flex-column gap-2"
      id="section3"
      onclick="bumi3()"
    >
      <h1 class="text-white text-center">Lokasi</h1>

      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.596486892463!2d110.411527573682!3d-7.726368142291797!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a5944ac586301%3A0xea6a26382fe1ed11!2sKrapyak%2C%20Wedomartani%2C%20Kec.%20Ngemplak%2C%20Kabupaten%20Sleman%2C%20Daerah%20Istimewa%20Yogyakarta!5e0!3m2!1sid!2sid!4v1718993419009!5m2!1sid!2sid"
        width="600"
        height="450"
        style="border-radius: 2rem"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
      ></iframe>
    </section>

    <!-- verval 6 -->
    

