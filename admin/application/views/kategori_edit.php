<div class="container my-5">
    <div class="card shadow p-4">
        <h3 class="mb-3">Edit Kategori</h3>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Nama Kategori</label>
                <input type="text" name="nama_kategori" class="form-control" value="<?php echo set_value("nama_kategori", $kategori['nama_kategori']) ?>">
            </div>
            <div class="mb-3">
                <label>Foto Kategori</label><br>
                <div class="mb-5">
                    <img src="<?php echo $this->config->item("url_kategori").$kategori["foto_kategori"] ?>" width="300">
                </div>
                <input type="file" name="foto_kategori">
            </div>
            <button class="btn btn-sm btn-danger d-flex align-items-center  gap-1" style="background-color: #EF9C66; border: none; width: 90px;"><i class='bx bxs-save' ></i>simpan</button>
        </form>
    </div>
</div>