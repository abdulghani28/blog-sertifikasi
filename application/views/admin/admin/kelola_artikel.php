<div class="container-fluid">
    <?php if ($this->session->flashdata('pesan') !== null) : ?>
        <div class="alert alert-info text-center">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Daftar Artikel
                </div>
                <div class="card-body">
                    <a href="<?= base_url('admin/tambah_artikel') ?>" class="btn btn-info">Tambah Artikel</a>
                    <br><br>
                    <div class="table-responsive">
                        <table class="table table-bordered tabelku">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Judul Artikel</th>
                                    <th>Tanggal</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($artikel as $a) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td width="30%">
                                            <div class="row">
                                                <div class="col-md-5">
                                                    <img class="img-fluid" src="<?= base_url('assets/uploads/thumbnail/' . $a->gambar) ?>" alt="">
                                                </div>
                                                <div class="col-md-7">
                                                    <?= word_limiter($a->judul, 3); ?>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?= $a->tanggal; ?></td>
                                        <td><?= $a->nama_kategori; ?></td>
                                        <td>
                                            <a onclick="return confirm('Yakin ingin menghapus artikel ?')" href="<?= base_url('hapus/artikel/' . $a->ID) ?>" class="btn btn-danger text-light">Hapus</a>
                                            <a href="<?= base_url('ke_edit/artikel/' . $a->ID) ?>" class="btn btn-warning text-light">Edit</a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>