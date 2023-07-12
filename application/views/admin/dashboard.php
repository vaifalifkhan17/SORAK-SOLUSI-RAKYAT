<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-2">
    <h1 class="h3 mb-0 text-gray-400">Dashboard</h1>
    <a href="<?= base_url('Admin/LaporanController') ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <div class="col-md-4 mb-2">
      <div class="card border-left-primary shadow h-100 py-2" onclick="location.href='PetugasController'">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Petugas</div>
              <div class="h5 mb-0 font-weight-bold text-gray-400"><?= number_format($petugas) ?></div>
            </div>
            <div class="col-auto">
              <i class=""></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-2">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Masyarakat</div>
              <div class="h5 mb-0 font-weight-bold text-gray-400"><?= number_format($masyarakat) ?></div>
            </div>
            <div class="col-auto">
              <i class=""></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-2">
      <div class="card border-left-primary shadow h-100 py-2"onclick="location.href='TanggapanController/tanggapan_tolak'">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Pengaduan Ditolak</div>
              <div class="h5 mb-0 font-weight-bold text-gray-400"><?= number_format($pengaduan_ditolak) ?></div>
            </div>
            <div class="col-auto">
              <i class=""></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-2">
      <div class="card border-left-success shadow h-100 py-2"onclick="location.href='TanggapanController'">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengaduan Masuk</div>
              <div class="h5 mb-0 font-weight-bold text-gray-400"><?= number_format($pengaduan) ?></div>
              </div>
            <div class="col-auto">
              <i class=""></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-2">
      <div class="card border-left-success shadow h-100 py-2"onclick="location.href='TanggapanController/tanggapan_proses'">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengaduan Proses</div>
              <div class="h5 mb-0 font-weight-bold text-gray-400"><?= number_format($pengaduan_proses) ?></div>
              </div>
            <div class="col-auto">
              <i class=""></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4 mb-2">
      <div class="card border-left-success shadow h-100 py-2"onclick="location.href='TanggapanController/tanggapan_selesai'">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Pengaduan Selesai</div>
              <div class="h5 mb-0 font-weight-bold text-gray-400"><?= number_format($pengaduan_selesai) ?></div>
              </div>
            <div class="col-auto">
              <i class=""></i>
            </div>
          </div>
        </div>
      </div>
    </div>
