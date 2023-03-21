<div id="wrapper">
  <!-- Sidebar -->
  <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin') ?>">
      <div class="sidebar-brand-icon">
        <img src="<?= base_url('assets/img/logo g.png') ?>">
      </div>
      <div class="sidebar-brand-text mx-3">Pengaduan Masyarakat</div>
    </a>
    <hr class="sidebar-divider my-0">
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
              <img class="img-profile rounded-circle" src="<?= base_url('assets/assets/img/logo a.png') ?>" style="max-width: 60px">
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
          <h1 class="h3 mb-0 text-gray-800">Data Masyarakat</h1>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaltambah"> + Tambah</button>
        </div>
        <!-- Row -->
        <div class="row">
          <!-- Datatables -->
          <div class="col-lg-12">
            <div class="card mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Data Masyarakat</h6>
              </div>
              <div class="table-responsive p-">
                <table class="table table-striped table-bordered zero-configuration">
                  <thead>
                    <tr>
                      <th width="10%">No</th>
                      <th width="20%">NIK</th>
                      <th width="20%">Nama</th>
                      <th width="10%">No.Telepon</th>
                      <th width="10%">Aksi</th>
                    </tr>
                  </thead>
                  <?php $i = 1 ?>
                  <?php foreach ($masyarakat as $al) : ?>
                    <tr>
                      <td><?= $i ?></td>
                      <td><?= $al['nik'] ?></td>
                      <td><?= $al['nama'] ?></td>
                      <td><?= $al['telepon'] ?></td>
                      <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaledit<?php echo $al['id']; ?>">
                          Edit</button>
                        <a class="btn btn-danger" href="<?= base_url('admin/delete_masyarakat/' . $al['id']) ?>" onclick="return confirm('Apakah Anda Yakin?');">Delete</a>
                      </td>
                    </tr>
                    <!-- edit modal -->
                    <div class="modal fade" id="modaledit<?php echo $al['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">edit
                              Masyarakat</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <form action="<?php echo base_url('admin/edit_masyarakat/') . $al['id'] ?>" method="post">
                              <div class="row">
                                <input type="number" class="form-control" name="nik" placeholder="NIK">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                                <input type="text" class="form-control" name="nama" placeholder="Nama">
                                <input type="number" class="form-control" name="telepon" placeholder="Telepon">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- end -->
                  <?php $i++;
                  endforeach ?>
                </table>
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
                  <p>apakah mau keluar?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="<?= base_url('auth') ?>" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- tambah modal -->
        <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah
                  Masyarakat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="<?php echo base_url('admin/tambah_masyarakat/') ?>" method="post">
                  <div class="row">
                    <input type="number" class="form-control" name="nik" placeholder="NIK">
                    <input type="text" class="form-control" name="username" placeholder="Username">
                    <input type="text" class="form-control" name="nama" placeholder="Nama">
                    <input type="number" class="form-control" name="telepon" placeholder="Telepon">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- end -->
        <!---Container Fluid-->
      </div>
    </div>