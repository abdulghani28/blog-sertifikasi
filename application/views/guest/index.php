<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-bordered tabelku">
                    <thead>
                        <tr class="text-center">
                            <th>
                                <h2><i class="fa fa-newspaper-o"></i> Daftar Artikel</h2>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($artikel as $a) : ?>
                            <tr>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">
                                            <img class="img-fluid" src="<?= base_url('assets/uploads/thumbnail/' . $a->gambar) ?>" alt="">
                                        </div>
                                        <div class="col-md-10">
                                            <h3><?= $a->judul; ?></h3>
                                            <p>Genre : <?= $a->nama; ?></p>
                                            <?= word_limiter($a->isi, 50); ?><br><br>
                                            <a href="<?= base_url('artikel/' . $a->aid) ?>" class="btn btn-info btn-sm">Baca Selengkapnya</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<br><br>