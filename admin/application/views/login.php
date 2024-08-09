<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
         @font-face {
            font-family: 'PoppinsRegular';
            src: url('<?php echo base_url('./fonts/Poppins-Regular.ttf'); ?>') format('truetype');
            font-weight: normal;
            font-style: normal;
        }
        body {
            font-family: 'PoppinsRegular', sans-serif;
            background-image: url('<?php echo base_url('./assets/backgroundlogin.jpg') ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-group input {
            border: none;
            width: 100%;
            transition: none;
        }
        .form-group input:focus {
            outline: none;
            box-shadow: none;
        }
        .image-wrapper {
            background-color: #FFEFDD;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            height: 100%;
            margin-left: -20px;
        }
        .image-wrapper img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }
        .card-body {
            padding: 0;
        }
        button:hover {
            transform: scale(0.95);
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="card shadow">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="image-wrapper rounded-start">
                            <img src="<?php echo base_url('./assets/ftlogin.svg') ?>" alt="fotologin">
                        </div>
                    </div>
                    <div class="col-md-8 my-5">
                        <h2 class="card-title mb-4">Selamat Datang Admin</h2>
                        <p>Login akun anda</p>
                        <form method="post" enctype="multipart/form-data">
                            <div class="mb-4">
                                <label class="mb-2" style="color: #6D6D6D;"><strong>Nama/Email</strong></label>
                                <input type="text" class="form-control" placeholder="Masukkan nama/email" style="height: 45px;" name="username">
                                <div class="text-danger small">
						            <?php echo form_error("username") ?>
					            </div>
                            </div>
                            <div class="mb-5">
                                <label class="mb-2" style="color: #6D6D6D;"><strong>Password</strong></label>
                                <input type="password" class="form-control" placeholder="Masukkan password" style="height: 45px;" name="password">
                                <div class="text-danger small">
						            <?php echo form_error("password") ?>
					            </div>
                            </div>
                            <div>
                                <button class="shadow" style="border-radius: 25px; width: 30%; height: 48px; background-color: #E08938; border: none; color: white; font-size: 1.1rem;"><strong>Login</strong></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
