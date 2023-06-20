<div class="container">
    <?php if( $this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data <strong>Berhasil </strong> <?= $this->session->flashdata('flash');?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url();?>pasien/tambah" class="btn btn-primary">Daftar BPJS</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input name="keyword" type="text" class="form-control" placeholder="Cari nama pasien atau id anggota..." >
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

 <div class="row mt-3">
    <div class="col-md-6">
        <h3>Daftar Pasien Penerima BPJS</h3>
            <div>   
                <?php if(empty($pasien)) : ?>
                    </div>
                        <div class="alert alert-danger" role="alert">
                        Data tidak ditemukan.
                    </div>
                <?php endif; ?>
            </div>
        <ul class="list-group row mb-3">
            <?php foreach ($pasien as $psn) : ?>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID Anggota</th>
                        <th scope="col">Nama</th>
                        <th scope="col"> Ket</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <td> <?= $psn ['id_anggota'] ?> </td>
                        <td> <?= $psn ['nama'] ?> </td>
                        <td>
                            <a href="<?= base_url();?>pasien/hapus/<?=$psn['id_anggota']?>" class="badge badge-danger float-center" onclick="return confirm('Anda yakin ingin menghapus data <?=$psn['nama']?> ?');">hapus</a>
                            <a href= "<?= base_url();?>pasien/edit/<?=$psn['id_anggota']?>"  class="badge badge-success float-center">edit</a>
                            <!-- href="<?= base_url();?>pasien/edit/<?=$psn['id_anggota']?>" -->
                            <a href="<?= base_url();?>pasien/detail/<?=$psn['id_anggota']?>" class="badge badge-primary float-center">detail</a>
                        </td>
                    </tbody>
                    </table>
            <?php endforeach; ?>
        </ul>
    </div>
 </div>

</div>