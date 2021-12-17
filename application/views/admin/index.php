    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="d-lg-inline">Daftar Barang</h4>
                        </div>
                        <div class="card-body p-0">
                            <table class="table table-condensed mb-2">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Jenis</th>
                                        <th>Brand</th>
                                        <th>CPU</th>
                                        <th>Stok</th>
                                        <th>Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; 
                                    foreach($DataBarang as $item) : ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $item->nama; ?></td>
                                            <td><?= $item->jenis; ?></td>
                                            <td><?= $item->brand; ?></td>
                                            <td><?= $item->cpu; ?></td>
                                            <td><?= $item->stok; ?></td>
                                            <td><?= $item->price; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->