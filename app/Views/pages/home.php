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
                  <div id="breakup"></div>
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
                <div class="d-flex align-items-center pb-1">
                  <span class="me-2 rounded-circle bg-light-danger round-20 d-flex align-items-center justify-content-center">
                    <i class="ti ti-arrow-down-right text-danger"></i>
                  </span>
                  <p class="text-dark me-1 fs-3 mb-0">+9%</p>
                  <p class="fs-3 mb-0">last year</p>
                </div>
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

<div class="row">
  <div class="col-lg-12 d-flex align-items-stretch">
    <div class="card w-100">
      <div class="card-body p-4">
        <h5 class="card-title fw-semibold mb-4">Tabel Data Harian</h5>
        <div class="table-responsive">
          <table class="table text-nowrap mb-0 align-middle">
            <thead class="text-dark fs-4">
              <tr>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">No</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Nilai Sensor</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Kelembapan</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Status</h6>
                </th>
                <th class="border-bottom-0">
                  <h6 class="fw-semibold mb-0">Timezone</h6>
                </th>
              </tr>
            </thead>
            <tbody>
              <?php $normal = 1 ?>
              <?php foreach ($data as $row) : ?>
                <tr>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0"><?= $normal++; ?></h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4"><span><?= $row['suhu']; ?></span></h6>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4"><span><?= $row['kelembapan'] ?></span>%</h6>
                  </td>
                  <td class="border-bottom-0">
                    <div class="d-flex align-items-center gap-2">
                      <span class="badge bg-success rounded-3 fw-semibold">Normal</span>
                    </div>
                  </td>
                  <td class="border-bottom-0">
                    <h6 class="fw-semibold mb-0 fs-4"><span><?= $row['updated_at'] ?></span></h6>
                  </td>
                <?php endforeach; ?>
                </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>