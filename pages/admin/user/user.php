<?php
session_start();
// include '../../connection/security.php'; 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="../../../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../../../assets/img/logoaverroes.png">
    <title>
        Siakad Averroes
    </title>

    <link href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700,800" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- CSS Files -->
    <link id="pagestyle" href="../../../assets/css/soft-ui-dashboard.css?v=1.1.0" rel="stylesheet" />
    <link
        rel="stylesheet"
        href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">
</head>

<body class="g-sidenav-show  bg-gray-100">

    <!-- Sidebar Content -->
    <?php include '../../layout/sidebar.php'; ?>
    <!-- Sidebar End -->

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <?php include '../../layout/header.php'; ?>
        <!-- End Navbar -->

        <!-- Content Start -->
        <div class="container-fluid py-4">
            <div class="row">
                <!-- make table -->
                <div class="col-lg-12 col-12">
                    <div class="card mb-4">
                        <div class="card-header d-flex justify-content-between align-items-center pb-0">
                            <h6>Daftar User</h6>
                            <!-- Add button -->
                            <a href="../../../controller/admin/user_controller.php?action=add" class="btn bg-gradient-success mt-2"><i class="fas fa-plus"></i> Tambah User</a>
                        </div>

                        <div class="card-body px-0 pt-0 pb-2">
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead>
                                        <tr>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Username</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Role</th>
                                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-center opacity-7">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../../../controller/admin/user_controller.php';
                                        $no = 1;
                                        $data = get_all_user();
                                        while ($row = mysqli_fetch_assoc($data)) {
                                        ?>
                                            <tr>
                                                <td>
                                                    <p class="text-sm font-weight-bold mb-0"><?= $no++ ?></p>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bold mb-0"><?= $row['nama_user'] ?></p>
                                                </td>
                                                <td>
                                                    <p class="text-sm font-weight-bold mb-0"><?= $row['username'] ?></p>
                                                </td>
                                                <td class="text-sm">
                                                    <span class="badge badge-sm bg-gradient-primary"><?= $row['role'] ?></span>
                                                </td>
                                                <td class="align-middle text-center">
                                                    <a href="../../../controller/admin/user_controller.php?id=<?= $row['id'] ?>?action=edit" class="text-secondary font-weight-bold text-xs">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    <a href="../../../controller/admin/user_controller.php?id=<?= $row['id'] ?>?action=delete" class="text-secondary font-weight-bold text-xs">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php } ?>



                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer End -->
    </main>

    <!-- Settings Start -->
    <?php include '../../layout/setting.php'; ?>
    <!-- Settings End -->

    <!--   Core JS Files   -->
    <script src="../../../assets/js/core/popper.min.js"></script>
    <script src="../../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../../../assets/js/plugins/chartjs.min.js"></script>

    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../../assets/js/soft-ui-dashboard.min.js?v=1.1.0"></script>
</body>

</html>