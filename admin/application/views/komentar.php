<div class="container">
    <div class="mt-5 mb-5">
        <table class="table table-bordered" id="tablestyle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Isi Komentar</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($komentar as $k => $v): ?>
                    <tr>
                        <td><?php echo $k + 1 ?></td>
                        <td><?php echo  $v['nama_penilaian'] ?></td>
                        <td><?php echo  $v['deskripsi_penilaian'] ?></td>
                        <td>
                            <a href="<?php echo base_url("komentar/hapus/".$v["id_penilaian"]) ?>" class="btn btn-sm btn-danger d-flex align-items-center  gap-1" style="border: none; width: 85px;"><i class='bx bx-trash'></i>Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>