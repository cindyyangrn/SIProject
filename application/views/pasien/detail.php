<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Data Lengkap Pasien
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th scope="row">ID_Pasien: </th>
                                <td><p class="card-title"><?= $pasien['id_anggota'] ?><p></td>
                            </tr>
                            <tr>
                                <th scope="row">Nama: </th>
                                <td><p class="card-title"><?= $pasien['nama'] ?><p></td>
                            </tr>
                            <tr>
                                <th scope="row">Jenis Kelamin: </th>
                                <td><p class="card-title"><?= $pasien['jenis_kelamin'] ?><p></td>
                            </tr>
                            <tr>
                                <th scope="row">Tanggal Lahir: </th>
                                <td><p class="card-title"><?= $pasien['tanggal_lahir'] ?><p></td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="<?= base_url();?>pasien" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</div>