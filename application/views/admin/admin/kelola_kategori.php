<div class="container-fluid">
    <?php if ($this->session->flashdata('pesan') !== null) : ?>
        <div class="alert alert-info text-center">
            <?= $this->session->flashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <div class="row mt-5">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    Kelola Kategori
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered tabelku">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1;
                                foreach ($kategori as $k) : ?>
                                    <tr>
                                        <td><?= $no++; ?></td>
                                        <td><?= $k->nama; ?></td>
                                        <td>
                                            <a href="<?= base_url('hapus/kategori/' . $k->id) ?>" class="btn btn-danger text-light">Hapus</a>
                                            <a href="javascript:void(0)" data-toggle="modal" data-target="#editModal<?= $k->id ?>" class="btn btn-warning text-light">Edit</a>
                                        </td>
                                    </tr>
                                    <!-- Modal Edit-->
                                    <div class="modal fade" id="editModal<?= $k->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Edit Kategori</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <?= form_open('edit/kategori/' . $k->id); ?>
                                                <div class="modal-body">
                                                    <div class="form-group">
                                                        <label>Nama Kategori</label>
                                                        <input class="form-control" type="text" name="nama" placeholder="Nama Kategori" required value="<?= $k->nama ?>">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success"><i class="fa fa-pencil"></i> Edit</button>
                                                </div>
                                                <?= form_close(); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header text-center">
                    Tambah Kategori
                </div>
                <div class="card-body">
                    <?= form_open('tambah/kategori'); ?>
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input class="form-control" type="text" name="nama" placeholder="Nama Kategori" required>
                    </div>
                    <button class="btn btn-block btn-success"><i class="fa fa-plus"></i> Tambah </button>
                    <?= form_close(); ?>
                </div>
            </div>
        </div>
    </div>
</div>