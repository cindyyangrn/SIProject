<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">

        <div class="card">
            <div class="card-header">
                Form Pendaftaran Pasien Baru
            </div>
            <div class="card-body">
                <!-- <?php if(validation_errors () ) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors();?>
                </div>
                <?php endif; ?> -->
                <form action="" method="post">
                    <div class="form-group">
                        <label for="anggota">ID Anggota</label>
                        <input type="text" name="id_anggota" class="form-control" id="id_anggota">
                        <small class="form-text text-danger"> <?= form_error('id_anggota'); ?></small>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama">
                        <small class="form-text text-danger"> <?= form_error('nama'); ?></small>
                    </div>
                    <div class="form-group">
                            <label for="nama">Jenis Kelamin</label>
                        <input type="text" name="jenis_kelamin" class="form-control" id="jenis_kelamin">
                    </div>
                    <div class="form-group2">
                            <label for="tanggal_lahir">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value=""
                                    placeholder="YYYY-MM-DD">
                            </div>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary mt-3">Kirim</button>
                </form>
            </div>
        </div>

        </div>
    </div>
</div>