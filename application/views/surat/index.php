<div class="container">
    <?php if ($this->session->flashdata('flash-data')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data Peminjam <strong>Berhasil</strong> <?= $this->session->flashdata('flash-data'); ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Data Peminjam" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-dark" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <h2>Daftar Surat</h2>
            <?php if (empty($surat)) : ?>

                <div class="alert alert-danger" role="alert">
                    Data Peminjam tida ditemukan</div>
            <?php endif; ?>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nomer Surat</th>
                        <th scope="col">Perihal</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($surat as $srt) { ?>
                        <tr>
                            <th scope="row"><?= $no++; ?></th>
                            <td><?= $srt['nomer_surat']; ?></td>
                            <td><?= $srt['nama']; ?></td>
                            <td class="center-block">
                                <a href="<?= base_url(); ?>surat/hapus/<?= $srt['id_srt']; ?>" class="badge badge-pill badge-danger float-left" role="" onclick="return confirm('yakin data ini mau di hapus');">Hapus</a>
                                <a> </a>
                                <a href="<?= base_url(); ?>surat/edit/<?= $srt['id_srt']; ?>" class="badge badge-pill badge-success float-left"> Edit </a>
                                <a> </a>
                                <a href="<?= base_url(); ?>surat/detail/<?= $srt['id_srt']; ?>" class="badge badge-pill badge-primary float-left"> Detail </a>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>