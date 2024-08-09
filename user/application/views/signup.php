<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
    <link rel="icon" href="<?php echo base_url('img/logo/logo-bumibaru3.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo base_url('globalCSS/daftar_akun.css') ?>">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">



</head>

<body>

    <p class="text-center ">Bumi<span>Baru</span></p>

    <?php if (isset($error_message)) : ?>
        <div class="alert alert-light">
            <?php echo $error_message; ?>
        </div>
    <?php endif; ?>


    <div class="form">
        <form method="post">
            <h1>DAFTAR</h1>
            <input name="nama_user" type="text" placeholder="Nama Pengguna">
            <input name="email_user" type="email" placeholder="Email">
            <div class="pass">
                <input id="pass" name="password_user" type="password" placeholder="Password">
                <i id="showPass" class='bx bxs-tired icon'></i>
                <i id="hidePass" class='bx bxs-shocked icon'></i>
            </div>
            <input id="" name="alamat_user" type="text" placeholder="Alamat">

            <input id="wa" name="wa_user" type="text" placeholder="Whatsapp aktif">


            <button class="submit">Submit</button>
            <a href="<?php echo  base_url('loginsignup/login') ?>">Sudah Punya Akun?<span>Masuk</span></a>

        </form>
    </div>

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
        (() => {
            'use strict'

            const forms = document.querySelectorAll('.needs-validation')

            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()

        const passwordInput = document.getElementById('pass');
        const showPassIcon = document.getElementById('showPass');
        const hidePassIcon = document.getElementById('hidePass');

        showPassIcon.addEventListener('click', () => togglePassword(true));
        hidePassIcon.addEventListener('click', () => togglePassword(false));

        function togglePassword(showPassword) {
            passwordInput.type = showPassword ? 'text' : 'password';
            showPassIcon.style.display = showPassword ? 'none' : 'block';
            hidePassIcon.style.display = showPassword ? 'block' : 'none';
        }
    </script>
</body>

</html>