<div class="container">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card mb-3">
                <div class="card-header bg-primary text-white">
                    <b><?= $surat['nama']; ?></b>
                </div>
                <div class="col-12">
                    <br>
                    <div class="card mb-4">
                        <div class="row no-gutters">
                            <div class="col-md-6">
                                <img src='data:image/jpeg;base64,<?php echo base64_encode($surat['gambar']) ?>' style='height: 500px; text-align: center;' />
                            </div>
                            <div class="col-md-6">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $surat['nomer_surat']; ?></h5>
                                    <p class="card-text"><b>Hal</b> : <?= $surat['hal']; ?></p>
                                    <p class="card-text"><b>Lampiran</b> : <?= $surat['lampiran']; ?></p>
                                    <p class="card-text"><small class="text-muted"><?= $surat['tp']; ?></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url(); ?>user" class="btn btn-primary">kembali</a>
            </div>
        </div>
    </div>
</div>