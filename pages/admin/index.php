<?php
session_start();
// include '../../connection/security.php'; 

include '../../controller/admin/dashboard_controller.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../../assets/img/logoaverroes.png">
  <title>
    Siakad Averroes
  </title>

  <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link id="pagestyle" href="../../assets/css/soft-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
  <link
    rel="stylesheet"
    href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">
</head>

<body class="g-sidenav-show  bg-gray-100">

  <!-- Sidebar Content -->
  <?php include '../layout/sidebar.php'; ?>
  <!-- Sidebar End -->

  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <?php include '../layout/header.php'; ?>
    <!-- End Navbar -->

    <div class="container-fluid py-4">

      <!-- Content Start -->



      <!-- Content End -->
      <div class="container-fluid py-4">
        <div class="row">
          <div class="col-lg-6 col-12">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="card">
                  <span class="mask bg-primary opacity-10 border-radius-lg"></span>
                  <div class="card-body p-3 position-relative">
                    <div class="row">
                      <div class="col-8 text-start">
                        <div class="icon icon-shape bg-dark shadow text-center border-radius-2xl">
                          <i class="fa-solid fa-user"></i>
                        </div>
                        <h5 class="text-white font-weight-bolder mb-0 mt-3">
                          <?= $data_guru['jumlah_guru']?>
                        </h5>
                        <span class="text-white text-sm">Guru</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
                <div class="card">
                  <span class="mask bg-dark opacity-10 border-radius-lg"></span>
                  <div class="card-body p-3 position-relative">
                    <div class="row">
                      <div class="col-8 text-start">
                        <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                          <i class="fa-solid fa-users text-dark"></i>
                        </div>
                        <h5 class="text-white font-weight-bolder mb-0 mt-3">
                          <?= $data_siswa['jumlah_siswa']?>
                        </h5>
                        <span class="text-white text-sm">Siswa</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-lg-6 col-md-6 col-12">
                <div class="card">
                  <span class="mask bg-dark opacity-10 border-radius-lg"></span>
                  <div class="card-body p-3 position-relative">
                    <div class="row">
                      <div class="col-8 text-start">
                        <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                          <i class="fa-solid fa-chalkboard-user text-dark"></i>
                        </div>
                        <h5 class="text-white font-weight-bolder mb-0 mt-3">
                          <?= $data_kelas['jumlah_kelas']?>
                        </h5>
                        <span class="text-white text-sm">Kelas</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-12 mt-4 mt-md-0">
                <div class="card">
                  <span class="mask bg-dark opacity-10 border-radius-lg"></span>
                  <div class="card-body p-3 position-relative">
                    <div class="row">
                      <div class="col-8 text-start">
                        <div class="icon icon-shape bg-white shadow text-center border-radius-2xl">
                          <i class="fa-solid fa-books text-dark"></i>
                        </div>
                        <h5 class="text-white font-weight-bolder mb-0 mt-3">
                          <?= $data_mapel['jumlah_mapel']?>
                        </h5>
                        <span class="text-white text-sm">Pelajaran</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-12 mt-4 mt-lg-0">
            <div class="card shadow h-100">
              <div class="card-header pb-0 p-3">
                <h6 class="mb-0">Reviews</h6>
              </div>
              <div class="card-body pb-0 p-3">
                <ul class="list-group">
                  <li class="list-group-item border-0 d-flex align-items-center px-0 mb-0">
                    <div class="w-100">
                      <div class="d-flex mb-2">
                        <span class="me-2 text-sm font-weight-bold text-dark">Positive Reviews</span>
                        <span class="ms-auto text-sm font-weight-bold">80%</span>
                      </div>
                      <div>
                        <div class="progress progress-md">
                          <div class="progress-bar bg-primary w-80" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                    <div class="w-100">
                      <div class="d-flex mb-2">
                        <span class="me-2 text-sm font-weight-bold text-dark">Neutral Reviews</span>
                        <span class="ms-auto text-sm font-weight-bold">17%</span>
                      </div>
                      <div>
                        <div class="progress progress-md">
                          <div class="progress-bar bg-primary w-10" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2">
                    <div class="w-100">
                      <div class="d-flex mb-2">
                        <span class="me-2 text-sm font-weight-bold text-dark">Negative Reviews</span>
                        <span class="ms-auto text-sm font-weight-bold">3%</span>
                      </div>
                      <div>
                        <div class="progress progress-md">
                          <div class="progress-bar bg-primary w-5" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="card-footer pt-0 p-3 d-flex align-items-center">
                <div class="w-60">
                  <p class="text-sm">
                    More than <b>1,500,000</b> developers used Creative Tim's products and over <b>700,000</b> projects were created.
                  </p>
                </div>
                <div class="w-40 text-end">
                  <a class="btn btn-dark mb-0 text-end" href="javascript:;">View all reviews</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Footer Start -->
        <?php include '../layout/footer.php'; ?>
      </div>
      <!-- Footer Start -->
      <?php include '../layout/footer.php'; ?>
    </div>
    <!-- Footer End -->
  </main>

  <!-- Settings Start -->
  <?php include '../layout/setting.php'; ?>
  <!-- Settings End -->

  <!--   Core JS Files   -->
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="./assets/js/plugins/chartjs.min.js"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/soft-ui-dashboard.min.js?v=1.1.0"></script>
</body>

</html>