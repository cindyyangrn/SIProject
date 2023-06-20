<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card-body">
                <div class="card-header">
                        Data Rekam Medis Pasien
                </div>
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th scope="row">ID Rekam Medis: </th>
                                <td><p class="card-title"><?= $rekam_medis['id_rekam_medis'] ?><p></td>
                            </tr>
                            <tr>
                                <th scope="row">ID Anggota: </th>
                                <td><p class="card-title"><?= $rekam_medis['id_anggota'] ?><p></td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Rekam Medis: </th>
                                <td><p class="card-title"><?= $rekam_medis['tgl_rekam_medis'] ?><p></td>
                            </tr>
                            <tr>
                                <th scope="row">Gejala: </th>
                                <td><p class="card-title"><?= $rekam_medis['gejala'] ?><p></td>
                            </tr>
                            <tr>
                                <th scope="row">Tindakan: </th>
                                <td><p class="card-title"><?= $rekam_medis['tindakan'] ?><p></td>
                            </tr>
                            <tr>
                                <th scope="row">Resep Obat: </th>
                                <td><p class="card-title"><?= $rekam_medis['resep_obat'] ?><p></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="<?= base_url();?>rekam_medis" class="btn btn-primary">Kembali</a>
                </div>
        </div>
    </div>
</div>
