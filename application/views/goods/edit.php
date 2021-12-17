    <!-- Main Content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main Row -->
            <div class="row justify-content-center">
                <div class="col-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="d-lg-inline">Edit Data Barang</h4>
                        </div>

                        <div class="card-body">
                            <form action="<?= site_url('goods/edit/' . $data->id); ?>" method="POST" role="form">
                                <div class="form-group row">
                                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                    <div class="col-10">
                                        <input type="text" name="nama" id="nama" class="form-control" value="<?= empty(set_value('nama')) ? $data->nama : set_value('nama'); ?>">
                                        <?= form_error('nama'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="brand" class="col-sm-2 col-form-label">Jenis</label>
                                    <div class="col-10">
                                        <input type="text" name="jenis" id="jenis" class="form-control" value="<?= empty(set_value('jenis')) ? $data->brand : set_value('jenis'); ?>">
                                        <?= form_error('jenis'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="brand" class="col-sm-2 col-form-label">Brand</label>
                                    <div class="col-10">
                                        <input type="text" name="brand" id="brand" class="form-control" value="<?= empty(set_value('brand')) ? $data->brand : set_value('brand'); ?>">
                                        <?= form_error('brand'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="cpu" class="col-sm-2 col-form-label">CPU</label>
                                    <div class="col-10">
                                        <input type="text" name="cpu" id="cpu" class="form-control" value="<?= empty(set_value('cpu')) ? $data->cpu : set_value('cpu'); ?>">
                                        <?= form_error('cpu'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="brand" class="col-sm-2 col-form-label">Stok</label>
                                    <div class="col-10">
                                        <input type="text" name="stok" id="stok" class="form-control" value="<?= empty(set_value('stok')) ? $data->brand : set_value('stok'); ?>">
                                        <?= form_error('stok'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="price" class="col-sm-2 col-form-label">Harga</label>
                                    <div class="col-10">
                                        <input type="text" name="price" id="price" class="form-control" value="<?= empty(set_value('price')) ? $data->price : set_value('price'); ?>">
                                        <?= form_error('price'); ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <button type="submit" class="btn btn-info btn-block 	fas fa-check-square">Edit</button>
                                    <a href="<?= site_url('goods'); ?>" class="btn btn-default btn-block fa fa-sign-out">Kembali</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Main Row End -->
        </div>
    </section>
    <!-- Main Content End -->
</div>