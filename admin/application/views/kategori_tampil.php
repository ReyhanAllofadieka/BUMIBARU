<div class="container mt-3">
    <h3>Kategori</h3>
    <table class="table table-bordered" id="tablestyle">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Kategori</th>
                <th>Foto Kategori</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($kategori as $k => $v): ?>
        	<tr>
        		<td><?php echo $k + 1 ?></td>
        		<td><?php echo $v['nama_kategori']; ?></td>
        		<td>
                    <img src="<?php echo $this->config->item("url_kategori").$v["foto_kategori"] ?>" width="200">            
                </td>
                <td class="d-flex gap-1">
                    <a href="<?php echo base_url("kategori/edit/".$v["id_kategori"]) ?>" class="btn btn-sm btn-warning d-flex align-items-center  gap-1" style="border: none; width: 65px;"><i class='bx bx-clipboard' ></i>Edit</a>
                    <a href="<?php echo base_url("kategori/hapus/".$v["id_kategori"]) ?>" class="btn btn-sm btn-danger d-flex align-items-center  gap-1" style="border: none; width: 85px;"><i class='bx bx-trash'></i>Hapus</a>
                </td>
        	</tr>
        <?php endforeach ?>
        </tbody>
    </table>
    <a href="<?php echo base_url("kategori/tambah") ?>" class="btn btn-sm btn-primary shadow d-flex align-items-center py-2" style="background-color: #EF9C66; border: none; width: 140px;"><i class='bx bx-edit' style="font-size: 20px;"></i>Tambah Data</a>
</div>