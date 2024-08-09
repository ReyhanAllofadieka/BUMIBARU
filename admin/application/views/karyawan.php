<div class="container">
    <div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Nomor WA</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($karyawan as $k => $v): ?>
                <tr>
                    <td><?php echo  $k + 1; ?></td>
                    <td><?php  echo $v['nama_karyawan']; ?></td>
                    <td><?php echo  $v['nomor_wa']; ?></td>
                    <td class="d-flex gap-1">
                        <a href="<?php echo base_url('karyawan/edit/'.$v['id_karyawan']); ?>" class="btn btn-sm btn-warning d-flex align-items-center  gap-1" style="border: none; width: 65px;"><i class='bx bx-clipboard' ></i>Edit</a>
                        <a href="<?php echo base_url('karyawan/delete/'.$v['id_karyawan']); ?>" class="btn btn-sm btn-danger d-flex align-items-center  gap-1" style="border: none; width: 85px;"><i class='bx bx-trash'></i>Hapus</a>

                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <a href="<?php echo base_url('karyawan/tambah') ?>" class="btn btn-sm btn-primary shadow d-flex align-items-center py-2" style="background-color: #EF9C66; border: none; width: 140px;"><i class='bx bx-edit' style="font-size: 20px;"></i>Tambah Data</a>
    </div>
</div>