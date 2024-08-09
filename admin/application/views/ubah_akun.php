<div class="container my-5">
    <div class="card shadow p-3">
        <h3 class="mb-3">Ubah Akun</h3>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" value="<?php echo set_value("nama", $this->session->userdata("nama")) ?>">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="username" class="form-control" value="<?php echo set_value("username", $this->session->userdata("username")) ?>">
            </div>
            <button class="btn btn-sm btn-danger d-flex align-items-center  gap-1" style="background-color: #EF9C66; border: none; width: 90px;"><i class='bx bxs-save' ></i>Simpan</button>
        </form>
    </div>
</div>