<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <!-- <h4 class="page-title"><?= $position ?></h4> -->
                <ul class="breadcrumbs">
                    <li class="nav-home">
                        <a href="<?= base_url('admin') ?>">
                            <i class="flaticon-home"></i>
                        </a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="<?= base_url('periode') ?>">Periode</a>
                    </li>
                    <li class="separator">
                        <i class="flaticon-right-arrow"></i>
                    </li>
                    <li class="nav-item">
                        <a href="">Ubah <?= $position ?></a>
                    </li>
                </ul>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title"><?= $position ?></h4>
                    </div>
                </div>
                <form method="post" action="<?= base_url('alternatiff/update') ?>">
                    <div class="card-body col-md-6">
                        <input type="text" name="id_alt" value="<?= $alternatif['id_alternatiff'] ?>" hidden>
                        <div class="form-group">
                            <label for="waktu" class="placeholder"><b>Nama Alternatif</b></label>
                            <div class="position-relative">
                                <input id="waktu" name="nama" type="text" class="form-control" value="<?= $alternatif['nama_alternatiff'] ?>" disabled>
                                <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="form-group">
                                                    <label>Calon Alternatif</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="id_guru">
                                                        <?php
                                                        foreach ($guru as $m) {
                                                            ?>
                                                            <option value="<?= $m['id_guru'] ?>"><?= $m['nama_guru'] ?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                    </div>
                    <div class="card-action">
                        <button type="submit" class="btn btn-primary" name="ubah" onclick="return confirm('Are you sure want to edit?')">Ubah</button>
                        <a href=" <?= base_url('alternatiff') ?>" class="btn btn-danger">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

