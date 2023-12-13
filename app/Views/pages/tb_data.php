<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
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
                            <?php foreach ($sensor as $row) : ?>
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
                                            <?php
                                            $status = $row['status'];

                                            //buat pengkondisiannya
                                            $badgeClass = '';

                                            switch ($status) {
                                                case 'sangat kering':
                                                    $badgeClass = 'bg-primary';
                                                    break;
                                                case 'kering':
                                                    $badgeClass = 'bg-danger';
                                                    break;
                                                case 'netral':
                                                    $badgeClass = 'bg-success';
                                                    break;
                                                case 'basah':
                                                    $badgeClass = 'bg-warning';
                                                    break;
                                                case 'sangat basah':
                                                    $badgeClass = 'bg-primary';
                                                    break;

                                                default:
                                                    $badgeClass = 'bg-secondary';
                                                    break;
                                            }
                                            ?>

                                            <span class="badge <?= $badgeClass ?> rounded-3 fw-semibold"><?= $row['status']?></span>
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