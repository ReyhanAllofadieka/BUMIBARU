<section class="bg-light py-5">
    <div class="container">

        <h3 class="mb-3">Kategori</h3>
        <div class="row flex-row flex-nowrap">
            <?php foreach ($kategori as $k => $v): ?>
            <div class="col-md-2">
                <div class="card mb-3 border-0 shadow" style="background-color: #EEF0E5;">
                    <img class="text-center" src="<?php echo $this->config->item("url_kategori").$v["foto_kategori"] ?>" width="100%">
                    <div>
                        <h6 class="text-center mt-2"><?php echo $v['nama_kategori']; ?></h6>
                    </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>

        <div class="my-3">
            <div class="row flex-row flex-nowrap">
                <div class="col-md-4">
                    <div class="card mb-3 border-0 shadow" style="background-color: #B7C9F2;">
                        <div class="m-3">
                            <p><strong>Pengumpulan Sampah</strong></p>
                            <p>Layanan pengumpulan sampah kami dirancang untuk memudahkan masyarakat dalam mendaur ulang sampah mereka. Kami menyediakan...</p>
                            <div class="d-flex justify-content-end">
                                <a href="#" class="btn btn-sm btn-primary shadow d-flex align-items-center gap-1" onclick="showAlert1()" style="background-color: #EF9C66; border: none;">Show more<i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 border-0 shadow" style="background-color: #E2BBE9;">
                        <div class="m-3">
                            <p><strong>Daur Ulang</strong></p>
                            <p>Di Bumibaru, kami mengolah berbagai jenis sampah menjadi produk yang berguna dan bernilai. Proses daur ulang kami meliputi...</p>
                            <div class="d-flex justify-content-end">
                                <a href="#" class="btn btn-sm btn-primary shadow d-flex align-items-center gap-1" onclick="showAlert2()" style="background-color: #EF9C66; border: none;">Show more<i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card mb-3 border-0 shadow" style="background-color: #A7E6FF;">
                        <div class="m-3">
                            <p><strong>Edukasi dan Kesadaran Lingkungan</strong></p>
                            <p>Kami percaya bahwa edukasi adalah kunci untuk perubahan jangka panjang. Oleh karena itu, Bumibaru juga menyediakan program-program edukasi untuk meningkatkan kesadaran dan pengetahuan masyarakat tentang pentingnya daur ulang...</p>
                            <div class="d-flex justify-content-end">
                                <a href="#" class="btn btn-sm btn-primary shadow d-flex align-items-center gap-1" onclick="showAlert3()" style="background-color: #EF9C66; border: none;">Show more<i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="alert-container"></div>
            <script src="allert.js"></script>
        </div>

        <h3 class="mb-3">Komentar</h3>
        <div class="card mb-3 border-0 shadow" style="background-color: #EEF0E5;">
            <?php 
                $c = 0;
                foreach ($komentar as $k => $v): 
                    if ($c >= 10) break;
            ?>
                <div class="m-3 border-bottom">
                    <p class="d-flex align-items-center gap-1"><i class='bx bx-message-dots' style="font-size: 25px;"></i><strong><?php echo  $v['nama_penilaian']; ?></strong></p>
                    <p style="margin-top: -15px; margin-left: 35px;"><?php echo $v['deskripsi_penilaian']; ?></p>
                </div>
            <?php 
                $c++;
                endforeach;
            ?>
            <div class="m-3">
                <a href="<?php echo base_url('komentar') ?>" class="btn btn-sm btn-primary shadow d-flex align-items-center gap-1" style="background-color: #EF9C66; border: none; width: 118px;">Show more<i class='bx bx-chevron-right' style="font-size: 18px;"></i></a>
            </div>
        </div>
    </div>
</section>