<div id="wrapper">
  <!-- Sidebar -->
  <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
      <div class="sidebar-brand-icon">
        <img src="<?= base_url('assets/img/logo g.png') ?>">
      </div>
      <div class="sidebar-brand-text mx-3">Pengaduan Masyarakat</div>
    </a>
    <hr class="sidebar-divider">
    <li class="nav-item active">
      <a class="nav-link" href="<?= base_url('admin') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Master Data
    </div>

    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin/kategori') ?>">
      <i class="fa fa-database" aria-hidden="true"></i>
        <span>Kategori</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin/masyarakat') ?>">
      <i class="fa fa-users" aria-hidden="true"></i>
        <span>Masyarakat</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin/petugas') ?>">
      <i class="fa fa-lock" aria-hidden="true"></i>
        <span>Petugas</span>
      </a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
    LAPORAN
    </div>

    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('admin/pengaduan') ?>">
      <i class="fa fa-flag" aria-hidden="true"></i>
        <span>Pengaduan</span>
      </a>
    </li>

    <div id="collapsePage" class="collapse" aria-labelledby="headingPage" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">

      </div>
    </div>
    </li>

    <hr class="sidebar-divider">
  </ul>
  <!-- Sidebar -->
  <div id="content-wrapper" class="d-flex flex-column">
    <div id="content">
      <!-- TopBar -->
      <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
        <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
          <i class="fa fa-bars"></i>
        </button>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-search fa-fw"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
              <form class="navbar-search">
                <div class="input-group">
                  <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?" aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                  <div class="input-group-append">
                    <button class="btn btn-primary" type="button">
                      <i class="fas fa-search fa-sm"></i>
                    </button>
                  </div>
                </div>
              </form>
                <div>
                </div>
              </a>
          </li>
          <div class="topbar-divider d-none d-sm-block"></div>
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img class="img-profile rounded-circle" src="<?=base_url('assets/assets/img/logo a.png')?>" style="max-width: 60px">
              <span class="ml-2 d-none d-lg-inline text-white small">admin</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- Topbar -->
        <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Data Kategori</h1>
        </div>
        <!-- Row -->
      <div id="main-wrapper">
        <div class="content-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal1">Tambah</button>
                    <h6 class="m-0 font-weight-bold text-primary">Data Petugas</h6>
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <?php $i = 1 ?>
                        <?php foreach ($kategori as $hy) : ?>
                          <tr>
                            <th><?= $i ?></th>
                            <input type="hidden" name="Kategori" value="<? $hy['Kategori'] ?>">
                            <td><?= $hy['kategori'] ?></td>
                            <td>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_kp_Modal<?php echo $hy['id_kategori']; ?>">
                                Edit</button>
                              <a class="btn btn-danger" href="<?= base_url('admin/delete_kategori/' . $hy['id_kategori'] . '/') ?>" onclick="return confirm('Apakah Anda Yakin?');">Delete</a>
                            </td>
                          </tr>
                          <div class="modal fade" id="edit_kp_Modal<?php echo $hy['id_kategori']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">edit
                                    Kategori</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="modal-body">
                                    <form action="<?php echo base_url('admin/edit_kategori/') . $hy['id_kategori'] ?>" method="post">
                                      <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <input type="kategori" class="form-control" name="kategori" id="kategori" value="<?= $hy['kategori'] ?>">
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save
                                          changes</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                  <?php $i++;
                        endforeach ?>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Kategori</th>
                      <th>Aksi</th>
                    </tr>
                    <!-- Modal tambah kategori-->
                    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah
                              Kategori</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="<?php echo base_url('admin/tambahkategori') ?>" method="post">
                              <div class="form-group">
                                <label for="kategori">Kategori</label>
                                <input type="kategori" class="form-control" name="kategori" id="kategori">
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save
                                  changes</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- tambah subkategori -->
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12 mt-5 mb-5">
                <div class="card">
                  <div class="card-body">
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModalqw">Tambah</button>
                    <h4 class="card-title">Data Sub Kategori</h4>
                    <div class="table-responsive">
                      <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>Kategori</th>
                            <th>sub Kategori</th>
                            <th>Aksi</th>
                          </tr>
                        </thead>
                        <?php $i = 1 ?>
                        <?php foreach ($joinbruh as $mc) : ?>
                          <tr>
                            <th><?= $i ?></th>
                            <input type="hidden" name="Kategori" value="<? $mc['Kategori'] ?>">
                            <input type="hidden" name="sub_kategori" value="<? $mc['sub_kategori'] ?>">
                            <td><?= $mc['kategori'] ?></td>
                            <td><?= $mc['sub_kategori'] ?></td>
                            <td>
                              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit_kp_Modal<?php echo $mc['id_kategori']; ?>">
                                Edit</button>
                                <a class="btn btn-danger" href="<?= base_url('admin/delete_subkategori/' . $mc['id_kategori']) ?>">Delete</a>
                            </td>
                          </tr>
                          <div class="modal fade" id="edit_kp_Modal<?php echo $mc['id_kategori']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">edit
                                    Kategori</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <div class="modal-body">
                                    <form action="<?php echo base_url('admin/edit_kategori/') . $mc['id_kategori'] ?>" method="post">
                                      <div class="form-group">
                                        <label for="kategori">Kategori</label>
                                        <input type="kategori" class="form-control" name="kategori" id="kategori" value="<?= $mc['id_kategori'] ?>">
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save
                                          changes</button>
                                      </div>
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                  <?php $i++;
                        endforeach ?>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>Kategori</th>
                      <th>sub Kategori</th>
                      <th>Aksi</th>
                    </tr>
                    <!-- Modal tambah subkategori-->
                    <div class="modal fade" id="exampleModalqw" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel21" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel21">Tambah
                              Kategori</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="<?php echo base_url('admin/tambah_subkategori') ?>" method="post">
                              <div class="form-group">
                                <label for="kategori">Kategori
                                  <select name="kategori" id="kategori" class="form-control">
                                    <option select>-pilih-</option>
                                  <?php foreach ($kategori as $jb) { ?>
                                    <option value="<?= $jb['id_kategori'] ?>"><?= $jb['kategori'] ?></option>
                                    <?php } ?>
                                  </select>
                                </label>
                              </div>
                              <div class="form-group">
                                <label for="sub_kategori">sub Kategori</label>
                                <input type="text" class="form-control" name="sub_kategori" id="sub_kategori">
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save
                                  changes</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Logout -->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>apakah mau keluar :(</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
          <a href="<?= base_url('auth') ?>" class="btn btn-primary">Logout</a>
        </div>
      </div>
    </div>
  </div>

</div>
<!---Container Fluid-->
</div>
</div>  

