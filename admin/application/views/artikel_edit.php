<div class="container my-5">
    <div class="card shadow p-4">
        <h3 class="mb-3">Edit Artikel</h3>
        <form method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label>Judul Artikel</label>
                <input type="text" name="judul_artikel" class="form-control">
            </div>
            <div class="mb-3">
                <label>Isi Artikel</label>
                <textarea class="form-control" name="isi_artikel"></textarea>
            </div>
            <div class="mb-4">
                <label class="mb-2">Foto Artikel</label><br>
                <input type="file" name="foto_artikel">
            </div>
            <button class="btn btn-sm btn-danger d-flex align-items-center  gap-1" style="background-color: #EF9C66; border: none; width: 90px;"><i class='bx bxs-save' ></i>Simpan</button>
        </form>
    </div>
</div>