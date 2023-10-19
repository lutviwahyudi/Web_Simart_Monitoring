<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | Smart.ir</title>
  <link rel="shortcut icon" type="image/png" href="<?= base_url('template2')?>/assets/images/logos/logo2.png" />
  <link rel="stylesheet" href="<?= base_url('template2')?>/assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
      <div class="d-flex align-items-center justify-content-center w-100">
        <div class="row justify-content-center w-100">
          <div class="col-md-8 col-lg-6 col-xxl-3">
            <div class="card mb-0">
              <div class="card-body">
                <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3 w-100">
                  <img src="<?= base_url('template2')?>/assets/images/logos/logo1.png" width="180" alt="">
                </a>
                <form action="<?= base_url('auth/input');?>" method="post">
                  <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-4">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>
            
                  <button type="submit" class="btn btn-success w-100 py-8 fs-4 mb-4 rounded-2">Sign In</button>
                  <div class="d-flex align-items-center justify-content-center">
                    <p class="fs-4 mb-0 fw-bold">Register Now?</p>
                    <a class="text-success fw-bold ms-2" href="<?= base_url('auth/')?>">Create an account</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="<?= base_url('template2')?>/assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="<?= base_url('template2')?>/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>