<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-header">
                <!-- <h4 class="page-title">Data <?= $position ?></h4> -->
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
                        <a href=""><?= $position ?></a>
                    </li>
                </ul>
            </div>

            <?php if ($this->session->flashdata('error')) { ?>
                <div class="alert alert-danger alert-dismissable" id="close_alert">
                    <h4><?= $this->session->flashdata('error'); ?></h4>
                </div>
            <?php } ?>
            <?php if ($this->session->flashdata('done')) { ?>
            <div class="alert alert-success alert-dismissable" id="close_alert">
                <h4><?= $this->session->flashdata('done'); ?></h4>
            </div>
            <?php } ?>
            <div class="card">
                <div class="card-header">
                    <div class="d-flex align-items-center">
                        <h4 class="card-title"><?= $position ?></h4>
                        <button class="btn btn-primary btn-round ml-auto" data-toggle="modal" data-target="#addRowModal">
                            <i class="fa fa-plus"></i>
                            Tambah <?= $position ?>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="add-row" class="display table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th style="width: 6%">No</th>
                                    <th>Nama</th>
                                    <th>Jenis</th>
                                    <th>Bobot</th>
                                    <th>Keterangan</th>
                                    <th style="width: 10%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($kriteria as $k) {
                                    ?>
                                <tr>
                               
                                    <td><?= $no ?></td>
                                    <td><?= $k['nama_kriteria'] ?></td>
                                    <td><?= $k['jenis'] ?></td>
                                    <td><?= $k['bobot'] ?></td>
                                    <td><?= $k['keterangan'] ?></td>
                                    <td>
                                        <div class="form-button-action">
                                            <a href="<?= base_url('kriteria/ubah/') . $k['id_kriteria'] ?>" class="btn btn-link btn-primary">
                                                <i class="fas fa-edit">Ubah</i>
                                            </a>
                                             <?php if($maxdata['max_id_kriteria'] == $k['id_kriteria']){?>
                                                 <a href="<?= base_url('kriteria/hapus/') . $k['id_kriteria'] ?>" class="btn btn-link btn-danger" onclick="return confirm('Are you sure want to delete?')">
                                                    <i class="fas fa-times">Hapus</i>
                                                </a>
                                                <?php }  ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php
                                    $no = $no + 1;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <!-- Modal -->
                    <div class="modal fade" id="addRowModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header no-bd">
                                    <h5 class="modal-title">
                                        <span class="fw-mediumbold">
                                            Tambah <?= $position; ?> Baru
                                        </span>
                                    </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form method="post" action="<?= base_url('kriteria/tambah') ?>">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-sm-12">


                                                 <div class="form-group form-group-default">
                                                    <label>Nama Kriteria</label>
                                                    <input id="addTime" name="nama_kriteria" type="text" class="form-control" value="<?php echo $nama_al['nama_kr']; ?>" placeholder="Nama Kriteria">
                                                </div>

                                                <div class="form-group form-group-default">
                                                    <label>jenis</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="jenis">
                                                        <?php
                                                        $no=0;
                                                        foreach ($jenis as $p) {
                                                            ?>
                                                            <option value="<?= $p ?>"><?= $p ?></option>
                                                        <?php
                                                        $no++;
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Bobot</label>
                                                    <select class="form-control" id="exampleFormControlSelect1" name="bobot">
                                                        <?php
                                                        foreach ($bobot as $b) {
                                                            ?>
                                                            <option value="<?= $b ?>"><?= $b  ?> </option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="form-group form-group-default">
                                                    <label>Keterangan</label>
                                                    <input id="addTime" name="keterangan" type="text" class="form-control" placeholder="Masukkan Keterangan..">
                                                </div>
                                                
                                            </div>
                                            </div>
                                        </div>
                                    
                                    <div class="modal-footer no-bd">
                                        <button type="submit" id="addRowButton" class="btn btn-primary">Tambah</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Tutup</button>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>

        </div>
    </div>
</div>

</div>