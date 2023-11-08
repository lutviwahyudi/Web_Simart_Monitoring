<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>
  <link rel="shortcut icon" type="image/png" href="<?= base_url('template2') ?>/assets/images/logos/logo2.png" />
  <link rel="stylesheet" href="<?= base_url('template2') ?>/assets/css/styles.min.css" />
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script type="text/javascript">
    //ambil data dari controller masing-masing secara realtime
    $(document).ready(function() {
      setInterval(function() {
        $("#N_Sensor").load("<?= site_url('pages/dataNilaiSensor'); ?>")
        $("#N_Sensor_tabel").load("<?= site_url('pages/dataNilaiSensor'); ?>")
      }, 2000);
    });

    $(document).ready(function() {
      setInterval(function() {
        $("#updated_at").load("<?= site_url('pages/updated_at'); ?>")
      }, 2000);
    });

    $(document).ready(function() {
      setInterval(function() {
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script>
    const baseUrl = "<?= base_url(); ?>";
    const myChart = (chartType) => {
      $.ajax({
        url: baseUrl + 'pages/chart_data',
        dataType: 'json',
        method: 'get',
        success: data => {
          let chartX = [];
          let chartY = [];
          let chartZ = 1024;
          data.map(data => {
            chartX.push(data.suhu);
            chartY.push(data.kelembapan);
          });
          const chartData = {
            labels: chartX,
            datasets: [{
              label: 'kelembapan',
              data: chartY,
              borderWidth: 1, // Ketebalan garis batas
              colors: ["#5D87FF", "#49BEFF"],

            }],
          };
          const chartType = 'bar'; // Jenis chart yang Anda inginkan (misalnya, 'bar')
          const ctx = document.getElementById(chartType).getContext('2d');
          const config = {
            type: chartType,
            data: chartData,
            options: {
              scales: {
                x: {
                  ticks: {
                    font: {
                      size: 14, // Ukuran font sumbu X
                    },
                    color: 'green', // Warna label sumbu X
                  },
                },
                y: {
                  ticks: {
                    font: {
                      size: 14, // Ukuran font sumbu Y
                    },
                    color: 'red', // Warna label sumbu Y
                  },
                },
              },
              plugins: {
                title: {
                  display: true,
                  text: 'Grafik Suhu dan Kelembapan', // Judul chart
                  font: {
                    size: 16, // Ukuran font judul
                    weight: 'bold', // Ketebalan font judul
                  },
                  color: 'green', // Warna judul
                },
                legend: {
                  display: true,
                  position: 'top', // Posisi legenda (contoh: atas)
                  labels: {
                    font: {
                      size: 12, // Ukuran font legenda
                    },
                  },
                },
              },
              scales: {
                x: {
                  grid: {
                    color: 'green', // Warna garis grid sumbu X
                    borderWidth: 1, // Ketebalan garis grid
                    borderDash: [2], // Style garis grid (contoh: putus-putus)
                  },
                },
                y: {
                  grid: {
                    color: 'green', // Warna garis grid sumbu Y
                    borderWidth: 1, // Ketebalan garis grid
                    borderDash: [2], // Style garis grid (contoh: putus-putus)
                  },
                },
              },
            },
          };
          const chart = new Chart(ctx, config);
        },
      });
    }

    myChart('bar');
  </script>
</body>

</html>