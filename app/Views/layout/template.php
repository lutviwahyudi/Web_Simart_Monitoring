<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>
  <link rel="shortcut icon" type="image/png" href="<?= base_url('template2') ?>/assets/images/logos/logo2.png" />
  <link rel="stylesheet" href="<?= base_url('template2') ?>/assets/css/styles.min.css" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script type="text/javascript">
    //ambil data dari controller masing-masing secara realtime
    $(document).ready(function() {  
      setInterval(function () {
        $("#N_Sensor").load("<?= site_url('pages/dataNilaiSensor'); ?>")
        $("#N_Sensor_tabel").load("<?= site_url('pages/dataNilaiSensor'); ?>")
      }, 2000);
    });

    $(document).ready(function() {  
      setInterval(function () {
        $("#updated_at").load("<?= site_url('pages/updated_at'); ?>")
      }, 2000);
    });
    
    $(document).ready(function() {
      setInterval(function () {
        $("#kelembapan").load("<?= site_url('pages/dataKelembapan'); ?>")
        $("#kelembapan_tabel").load("<?= site_url('pages/dataKelembapan'); ?>")
      }, 2000);
    });
  </script>

</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <?= $this->include('layout/sidebar'); ?>
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <?= $this->include('layout/header'); ?>

      <div class="container-fluid">
        <?= $this->renderSection('content'); ?>

        <footer class="footer">
          <div class="card">
            <div class="card-body">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2023 <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Lutw.ei</a>. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center text-muted">Free <a href="https://www.bootstrapdash.com/" class="text-muted" target="_blank">Simart.ir dashboard</a></span>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>

  <!-- <script src="/assets/libs/jquery/dist/jquery.min.js"></script> -->
  <script src="<?= base_url('template2') ?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('template2') ?>/assets/js/sidebarmenu.js"></script>
  <script src="<?= base_url('template2') ?>/assets/js/app.min.js"></script>
  <script src="<?= base_url('template2') ?>/assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="<?= base_url('template2') ?>/assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="<?= base_url('template2') ?>/assets/js/dashboard.js"></script>
</body>

</html>