<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <!-- http://getbootstrap.com/docs/4,1/components/card/ -->
            <div class="card">
                <div class="card-header bg-dark" style="color: white">
                    Form Tambah Data surat
                </div>
                <div class="card-body">
                    <?php
                    if (isset($error)) {
                        echo "ERROR UPLOAD : <br />";
                        print_r($error);
                        echo "
                    <hr />";
                    }
                    ?>
                    <!-- untuk menampilkan pesan error -->
                    <?php if (validation_errors()) : ?>
                        <div class="alert alert-danger">
                            <?= validation_errors() ?>
                        </div>
                    <?php endif ?>
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $surat['id_srt']; ?>">
                        <!-- https://getbootstrap.com/docs/4.1/components/forms/ -->

                        <div class="form-group">
                            <label for="nama">Nomer Surat</label>
                            <input type="text" class="form-control" id="nomer_surat" name="nomer_surat" value="<?= $surat['nomer_surat']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="nama">Jenis Surat</label>
                            <select name="nama" id="nama" class="form-control">
                                <?php foreach ($nama as $key) : ?>
                                    <?php if ($key == $surat['nama']) : ?>
                                        <option value="<?= $key ?>" selected><?= $key ?></option>
                                    <?php else : ?>
                                        <option value="<?= $key ?>"><?= $key ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-row">
                            <div class="col">
                                <label for="tp">Perihal</label>
                                <input type="text" class="form-control" id="hal" name="hal" value="<?= $surat['hal']; ?>">
                            </div>
                            <div class="col mb-3">
                                <label for="tk">Lampiran</label>
                                <input type="text" class="form-control" id="lamppiran" name="lampiran" value="<?= $surat['lampiran']; ?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gambar">Upload Gambar PNG/JPEG</label>
                            <input type="file" class="form-control" id="gambar" name="gambar" enctype="multipart/form-data" value="">
                        </div>
                        <div class="form-group">
                            <label for="nama">Tanggal Pembuatan</label>
                            <input type="date" class="form-control" id="tp" name="tp" value="<?= $surat['tp']; ?>">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right"> Submit </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>