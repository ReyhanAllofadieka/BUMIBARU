<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BumiBaru</title>
    <link rel="icon" href="img/logo/logo-bumibaru3.png" type="image/png" />
    <link rel="stylesheet" href="../headerCSS/header.css" />
    <link rel="stylesheet" href="../globalCSS/produk_layanan.css" />
    <link rel="stylesheet" href="../globalCSS/ubahprofil.css" />
    <link rel="stylesheet" href="../footerCSS/footer.css" />




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


    <!-- modal -->


    <header class="parallax-header">
        <nav class="navbar navbar-expand-lg p-2">
            <div class="container-fluid">
                <div class="d-flex align-items-center gap-2">
                    <img src="../img/logo/logo-bumibaru3.png" alt="" />
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



    <div class="container">
        <h2 class="mt-5">Ubah Profil</h2>

        <div class="form">
            <?php echo form_open('loginsignup/ubahprofil'); ?>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="nama_user" value="<?php echo set_value('nama_user', $user->nama_user); ?>">

                <span class="text-danger">

                    <?php echo form_error('nama_user'); ?>
                </span>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" id="email" name="email_user" value="<?php echo set_value('email_user', $user->email_user); ?>">

                <span class="text-danger">
                    <?php echo form_error('email_user'); ?>

                </span>
            </div>

            <div class="form-group">
                <label for="wa_user">Whatsapp</label>
                <input type="number" class="form-control" id="wa_user" name="wa_user" value="<?php echo set_value('wa_user', $user->wa_user); ?>">
                <span class="text-danger">
                    <?php echo form_error('wa_user'); ?>

                </span>

            </div>

            <div class="form-group">
                <label for="alamat">alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat_user" value="<?php echo set_value('alamat_user', $user->alamat_user); ?>">
                <span class="text-danger">
                    <?php echo form_error('alamat_user'); ?>

                </span>
            </div>

            <button type="submit" class="btn btn-dark mt-2">Ubah Akun</button>
            <?php echo form_close(); ?>
        </div>

    </div>





 

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>