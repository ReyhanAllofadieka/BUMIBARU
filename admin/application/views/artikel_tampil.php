<div class="container my-5">
    <div class="mt-4">
        <table class="table table-bordered" id="tablestyle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Artikel</th>
                    <th>Isi Artikel</th>
                    <th>Foto Artikel</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($artikel as $k => $v): ?>
                    <tr>
                        <td><?php echo $k + 1 ?></td>
                        <td><?php echo $v['judul_artikel']; ?></td>
                        <td><?php echo $v['isi_artikel']; ?></td>
                        <td>
                            <img src="<?php echo $this->config->item("url_artikel").$v["foto_artikel"] ?>" width="200">            
                        </td>
                        <td class="d-flex gap-1">
                            <a href="<?php echo base_url("artikel/edit/".$v["id_artikel"]) ?>" class="btn btn-sm btn-warning d-flex align-items-center  gap-1" style="border: none; width: 65px;"><i class='bx bx-clipboard' ></i>Edit</a>
                            <a href="<?php echo base_url("artikel/hapus/".$v["id_artikel"]) ?>" class="btn btn-sm btn-danger d-flex align-items-center  gap-1" style="border: none; width: 85px;"><i class='bx bx-trash'></i>Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <a href="<?php echo base_url("Artikel/tambah/") ?>" class="btn btn-sm btn-primary shadow d-flex align-items-center py-2" style="background-color: #EF9C66; border: none; width: 140px;"><i class='bx bx-edit' style="font-size: 20px;"></i>Tambah Data</a>
    </div>
</div>