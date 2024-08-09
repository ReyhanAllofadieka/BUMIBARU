<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Akun</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5 mb-5">
        <div class="justify-content-center">
            <div class="card shadow" style="background-color: #EEF0E5;">
                <div class="card-body">
                    <h3 class="text-center border-bottom border-secondary pb-2">Akun</h3>
                    <div>
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item"><a class="nav-link" href="#" id="tombolModal"><strong>Informasi Akun</strong></a></li>
                            <li class="nav-item"><a class="nav-link" href="#" id="ubahpass"><strong>Ubah Password</strong></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="contohModal" tabindex="-1" aria-labelledby="contohModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="contohModalLabel">Informasi Akun</h5>
                </div>
                <div class="modal-body">
                    <ul class="navbar-nav me-auto">
                        <li>Nama<span style="display: inline-block; width: 50px;"></span>: <?php echo $this->session->userdata("nama") ?></li>
                        <li>Email<span style="display: inline-block; width: 54.5px;"></span>: <?php echo $this->session->userdata("username") ?></li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="akun/ubah/" class="btn btn-sm btn-primary shadow" style="background-color: #EF9C66; border: none;">Ubah</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="ubahPass" tabindex="-1" aria-labelledby="ubahpasswordLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ubahpasswordLabel">Ubah Password</h5>
                </div>
                <div class="modal-body">
                    <form action="<?php echo base_url('Akun/ubahpass') ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label>Masukkan Password Baru</label>
                            <input type="Password" name="password" class="form-control">
                        </div>
                        <button class="btn btn-sm btn-danger d-flex align-items-center  gap-1" style="background-color: #EF9C66; border: none; width: 75px;"><i class='bx bxs-save' ></i>Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('tombolModal').addEventListener('click', function () {
            var myModal = new bootstrap.Modal(document.getElementById('contohModal'));
            myModal.show();
        });

        document.getElementById('ubahpass').addEventListener('click', function () {
            var myModal = new bootstrap.Modal(document.getElementById('ubahPass'));
            myModal.show();
        });
    </script>
</body>
</html>
