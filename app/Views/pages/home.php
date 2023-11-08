<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<!--  Row 1 -->
<div class="row">
  <div class="col-lg-12">
    <div class="row">
      <div class="col-lg-6">
        <!-- Yearly Breakup -->
        <div class="card overflow-hidden">
          <div class="card-body p-4">
            <h5 class="card-title mb-9 fw-semibold">Nilai Sensor</h5>
            <div class="row align-items-center">
              <div class="col-8">
                <h1 class="fw-semibold mb-3"><span id="N_Sensor"></span></h1>
                <span class="fs-5">2023</span>
              </div>
              <div class="col-4">
                <div class="d-flex justify-content-center">
                  <div><img src="<?= base_url('template2') ?>/assets/images/logos/sensor.png" alt="" style="width: 100px; height: 100px"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body">
            <div class="row alig n-items-start">
              <div class="col-8">
                <h5 class="card-title mb-9 fw-semibold">Humadity</h5>
                <h1 class="fw-semibold mb-3"><span id="kelembapan"></span>%</h1>
              </div>
              <div class="col-4">
                <div class="d-flex justify-content-end">
                  <div class="text-white bg-success rounded-circle p-6 d-flex align-items-center justify-content-center">
                    <i class="ti ti-currency-dollar fs-6"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="earning"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- akhir record data sensor -->
<!-- chart -->
<div class="row">
  <!-- <div class="col-8">
    <canvas id="bar"></canvas>
  </div> -->
  <div class="col-lg-12 d-flex align-items-strech">
    <div class="card w-100">
      <div class="card-body">
        <div>
          <canvas id="bar"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- end chart -->
<?= $this->endSection(); ?>