    <div class="mt-5 mx-5" style="overflow: hidden;">
        <table class="table table-bordered" id="tablestyle">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Minggu</th>
                    <th>Jadwal</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($jadwal as $k => $v): ?>
                    <tr>
                        <td><?php echo  $k + 1; ?></td>
                        <td><?php echo  $v['jadwal_mingguan']; ?></td>
                        <td><?php echo  $v['deskripsi_jadwal']; ?></td>
                        <td class="d-flex gap-1">
                            <a href="<?php echo base_url("jadwal/edit/".$v["id_jadwal"]) ?>" class="btn btn-sm btn-warning d-flex align-items-center  gap-1" style="border: none; width: 65px;"><i class='bx bx-clipboard' ></i>Edit</a>
                            <a href="<?php echo base_url("jadwal/hapus/".$v["id_jadwal"]) ?>" class="btn btn-sm btn-danger d-flex align-items-center  gap-1" style="border: none; width: 85px;"><i class='bx bx-trash'></i>Hapus</a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
