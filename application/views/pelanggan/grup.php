<div class="content-area">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>

    <?= form_error('grup', '<div class="alert alert-danger" role="alert">', '</div>'); ?>
    <div class="page-header">
        <h4 class="page-title"><?= $title; ?></h4>

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
        </ol>
    </div>
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <div class="card">
                <div class="card-header text-right">
                    <h3 class="card-title"><?= $title; ?></h3>
                    <div class="col text-right ml-4">
                        <button class="btn btn-primary btn-icon tambahGrup" data-toggle="modal" data-target="#GrupModal">
                            <i class="fa fa-fw fa-plus-circle"></i> <span>Tambah Jasa Layanan</span>
                        </button>
                    </div>
                </div>



                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered border-top-0 border-bottom-0" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Jasa Layanan</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($grup as $g) : ?>
                                    <tr>
                                        <th scope="row"><?= $i; ?></th>
                                        <td><?= $g['grup']; ?></td>
                                        <td>Rp. <?= number_format($g['harga_b'], 2, ',', '.'); ?></td>
                                        <td>
                                            <a href="" class="btn btn-icon btn-primary btn-success ubahGrup" data-toggle="modal" data-target="#GrupModal" data-id="<?= $g['id']; ?>"><span class="tags" data-toggle="kt-tooltip" data-placement="left" title="Edit"><i class=" fa fa-pencil"></i></span></i></a>
                                            <a href="<?= base_url(''); ?>pelanggan/hapusgrup/<?= $g['id']; ?>" class="btn btn-icon btn-primary btn-danger tombol-hapus"><span class="tags" data-toggle="kt-tooltip" data-placement="right" title="Delete"><i class=" fa fa-trash"></i></span></a>

                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- table-wrapper -->
            </div>
            <!-- section-wrapper -->
        </div>
    </div>
</div>
</div>
</div>
</div>
<!--begin::Modal-->
<div class="modal fade" id="GrupModal" tabindex="-1" role="dialog" aria-labelledby="GrupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="GrupModalLabel">Tambah Jasa Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('pelanggan/grup'); ?>" method="post">
                    <input type="hidden" name="id" id="id">
                    <div class="form-group">
                        <label class="form-control-label">Jasa Layanan :</label>
                        <input type="text" class="form-control" id="grup" name="grup" placeholder="Jasa Layanan">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label">Nominal Tagihan :</label>
                        <input type="number" class="form-control" id="harga_b" name="harga_b" placeholder="Masukan Harga">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success">Tambah Jasa</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!--end::Modal-->