<div id="wrapper">
  <!-- Sidebar -->
  <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('masyarakat') ?>">
      <div class="sidebar-brand-icon">
        <img src="<?= base_url('assets/img/logo g.png') ?>">
      </div>
      <div class="sidebar-brand-text mx-3">Pengaduan Masyarakat</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
      <a class="nav-link" href="<?= base_url('masyarakat') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
      Pengaduan
    </div>

    <li class="nav-item">
      <a class="nav-link" href="<?= base_url('masyarakat/pengaduan') ?>">
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
            </div>
          </li>
          <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bell fa-fw"></i>
              <span class="badge badge-danger badge-counter">3+</span>
            </a>
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
              <h6 class="dropdown-header">
                Alerts Center
              </h6>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                  <div class="icon-circle bg-primary">
                    <i class="fas fa-file-alt text-white"></i>
                  </div>
                </div>
                <div>
                  <div class="small text-gray-500">December 12, 2019</div>
                  <span class="font-weight-bold">A new monthly report is ready to download!</span>
                </div>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                  <div class="icon-circle bg-success">
                    <i class="fas fa-donate text-white"></i>
                  </div>
                </div>
                <div>
                  <div class="small text-gray-500">December 7, 2019</div>
                  $290.29 has been deposited into your account!
                </div>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="mr-3">
                  <div class="icon-circle bg-warning">
                    <i class="fas fa-exclamation-triangle text-white"></i>
                  </div>
                </div>
                <div>
                  <div class="small text-gray-500">December 2, 2019</div>
                  Spending Alert: We've noticed unusually high spending for your account.
                </div>
              </a>
              <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
            </div>
          </li>
          <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-envelope fa-fw"></i>
              <span class="badge badge-warning badge-counter">2</span>
            </a>
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
              <h6 class="dropdown-header">
                Message Center
              </h6>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                  <img class="rounded-circle" src="img/man.png" style="max-width: 60px" alt="">
                  <div class="status-indicator bg-success"></div>
                </div>
                <div class="font-weight-bold">
                  <div class="text-truncate">Hi there! I am wondering if you can help me with a
                    problem I've been
                    having.</div>
                  <div class="small text-gray-500">Udin Cilok · 58m</div>
                </div>
              </a>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <div class="dropdown-list-image mr-3">
                  <img class="rounded-circle" src="img/girl.png" style="max-width: 60px" alt="">
                  <div class="status-indicator bg-default"></div>
                </div>
                <div>
                  <div class="text-truncate">Am I a good boy? The reason I ask is because someone told
                    me that people
                    say this to all dogs, even if they aren't good...</div>
                  <div class="small text-gray-500">Jaenab · 2w</div>
                </div>
              </a>
              <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
            </div>
          </li>
          <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-tasks fa-fw"></i>
              <span class="badge badge-success badge-counter">3</span>
            </a>
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
              <h6 class="dropdown-header">
                Task
              </h6>
              <a class="dropdown-item align-items-center" href="#">
                <div class="mb-3">
                  <div class="small text-gray-500">Design Button
                    <div class="small float-right"><b>50%</b></div>
                  </div>
                  <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </a>
              <a class="dropdown-item align-items-center" href="#">
                <div class="mb-3">
                  <div class="small text-gray-500">Make Beautiful Transitions
                    <div class="small float-right"><b>30%</b></div>
                  </div>
                  <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </a>
              <a class="dropdown-item align-items-center" href="#">
                <div class="mb-3">
                  <div class="small text-gray-500">Create Pie Chart
                    <div class="small float-right"><b>75%</b></div>
                  </div>
                  <div class="progress" style="height: 12px;">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </a>
              <a class="dropdown-item text-center small text-gray-500" href="#">View All Taks</a>
            </div>
          </li>
          <div class="topbar-divider d-none d-sm-block"></div>
          <li class="nav-item dropdown no-arrow">
            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="img-profile rounded-circle" src="<?= base_url('assets/assets/img/logo u.png') ?>" style="max-width: 60px">
              <span class="ml-2 d-none d-lg-inline text-white small">user</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown-item" href="#">
                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                Profile
              </a>
              <a class="dropdown-item" href="#">
                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                Settings
              </a>
              <a class="dropdown-item" href="#">
                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                Activity Log
              </a>
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

      <!-- Container Fluid-->
      <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">

        </div>

        <div class="row mb-3">



          <div class="container-fluid" id="container-wrapper">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">DataTables</h1>

            </div>

            <!-- Row -->
            <div class="row">
              <!-- Datatables -->
              <div class="col-lg-12">
                <div class="card mb-4">
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables</h6>
                    <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Tambah</button>
                  </div>
                  <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush" id="dataTable">
                      <thead class="thead-light">
                        <tr>
                          <th>No</th>
                          <th>tanggal pengaduan </th>
                          <th>isi laporan</th>
                          <th>foto</th>
                          <th>kategori</th>
                          <th>subkategori</th>
                          <th>status</th>
                        </tr>
                      </thead>
                      <?php $i = 1 ?>
                      <?php foreach ($pengaduanjo as $mp) : ?>
                        <tr>
                          <input type="hidden" name="tgl_pengaduan" value="<? $mp['tgl_pengaduan'] ?>">
                          <input type="hidden" name="isi_laporan" value="<? $mp['isi_laporan'] ?>">
                          <input type="hidden" name="foto" value="<? $mp['foto'] ?>">
                          <input type="hidden" name="status" value="<? $mp['status'] ?>">
                          <td><?= $i ?></td>
                          <td><?= $mp['tgl_pengaduan'] ?></td>
                          <td><?= $mp['isi_laporan'] ?></td>
                          <td><img src="<?php echo base_url() . 'assets/uploads/img/' . $mp['foto']; ?>" width="100"></td>
                          <td><?= $mp['kategori'] ?></td>
                          <td><?= $mp['sub_kategori'] ?></td>
                          <td><?= $mp['status'] ?></td>
                        </tr>
                      <?php $i++;
                      endforeach ?>
                      <!-- Modal -->
                      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Ajukan
                                Pengaduan</h5>
                                <div class="mb-3">
                                  <body>
                                    <label for="disabledtextinput" class="form-label">
                                    </label>
                                    <input type="text" class="form-control" id="nik" name="nik" aria-describedby="nik" value="<?= $user['nik'] ?>" readonly>
                                </div>
                                <head>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <form action="<?php echo base_url('masyarakat/isipengaduan') ?>" method="post" enctype="multipart/form-data">
                              
                                <div class="form-group">
                                  <label class="form-label">Pilih Kategori</label>
                                  <select class="form-select form-control" name="kategori" id="kategori">
                                    <option selected>- Pilih -</option>
                                    <?php foreach ($kategori as $k) { ?>
                                      <option value="<?= $k['id_kategori'] ?>"><?= $k['kategori'] ?></option>
                                    <?php } ?>
                                  </select>
                                </div>
                                <div class="form-group">
                                  <label class="form-label">Pilih Sub Kategori</label>
                                  <select class="form-select form-control" name="sub_kategori" id="sub_kategori">
                                    <option selected>- Pilih -</option>

                                  </select>
                                </div>

                                <div class="form-group">
                                  <label for="exampleInputPassword1">Foto</label>
                                  <input type="file" class="form-control-file" id="foto" name='foto' placeholder="date">
                                </div>
                                <div class="form-group">
                                  <label>Isi Laporan Pengaduan</label>
                                  <textarea class="form-control" id="isi_laporan" name="isi_laporan" rows="6"></textarea>
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
                      </tbody>
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