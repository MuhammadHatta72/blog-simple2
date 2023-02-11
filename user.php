<?php
session_start();
include 'connect.php';

if (!$_SESSION['login']) {
    header("location:./login.php");
    exit;
}

$id = $_SESSION['id_user'];
$result = mysqli_query($connect, "SELECT * FROM users WHERE id_user = $id");
$queryUser = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User - Rania Rahmi Blog</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Messages Dropdown Menu -->
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="./dashboard.php" class="brand-link text-center">
                <span class="text-warning">Rania </span><span class="text-info">Rahmi</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <?php
                        if ($queryUser["picture_profile"] == 'Belum Ditambahkan') {
                            if ($queryUser["gender"] == "Laki-laki") {
                        ?>
                                <img src="dist/img/male.png" class="img-circle elevation-2" alt="User Image">
                            <?php
                            } else {
                            ?>
                                <img src="dist/img/female.png" class="img-circle elevation-2" alt="User Image">
                            <?php
                            }
                        } else {
                            ?>
                            <img src="dist/img/users/<?= $queryUser['picture_profile']; ?>" class="img-circle elevation-2" alt="User Image">
                        <?php
                        }
                        ?>
                    </div>
                    <div class="info">
                        <p class="text-white"><?= $queryUser['first_name']; ?> <?= $queryUser['last_name']; ?></p>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-header">Menu</li>
                        <li class="nav-item">
                            <a href="./dashboard.php" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./blogs.php" class="nav-link">
                                <i class="nav-icon fas fa-file"></i>
                                <p>Blogs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./users.php" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>Users</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./user.php" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./logout.php" class="nav-link" onclick="return confirm('Apakah yakin ingin logout?');">
                                <i class="nav-icon fa fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1 class="m-0">User</h1>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4">

                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Foto Profil</h3>
                                </div>
                                <form method="POST" action="./uploadPictureUserAction.php" enctype="multipart/form-data">
                                    <div class="card-body">
                                        <div class="form-group">
                                            <?php
                                            if ($queryUser["picture_profile"] == 'Belum Ditambahkan') {
                                                if ($queryUser["gender"] == "Laki-laki") {
                                            ?>
                                                    <img src="dist/img/male.png" style="width: 100%;" alt="User Image">
                                                <?php
                                                } else {
                                                ?>
                                                    <img src="dist/img/female.png" style="width: 100%;" alt="User Image">
                                                <?php
                                                }
                                            } else {
                                                ?>
                                                <img src="dist/img/users/<?= $queryUser['picture_profile']; ?>" style="width: 100%;" alt="User Image">
                                            <?php
                                            }
                                            ?>
                                        </div>
                                        <div class="form-group">
                                            <label for="picture_profile">File input</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="hidden" name="id" value="<?= $queryUser['id_user']; ?>">
                                                    <input type="file" class="custom-file-input" id="picture_profile" name="picture_profile">
                                                    <label class="custom-file-label" for="picture_profile">Choose file</label>
                                                </div>
                                                <div class="input-group-append">
                                                    <span class="input-group-text">Upload</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <?php
                                        if ($queryUser["picture_profile"] !== 'Belum Ditambahkan') {
                                        ?>
                                            <a href="./deletePictureUser.php?id=<?= $queryUser['id_user']; ?>" class="btn btn-danger">Hapus Foto</a>
                                        <?php
                                        }
                                        ?>
                                        <input type="submit" name="submit" value="Update Foto" class="btn btn-info" />
                                    </div>
                                </form>
                            </div>

                        </div>
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Biodata</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form class="form-horizontal" action="./editProfile.php" method="POST">
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <input type="hidden" name="id" value="<?= $queryUser['id_user']; ?>">
                                            <label for="first_name" class="col-sm-2 col-form-label">Nama Depan</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Nama Depan" value="<?= $queryUser['first_name']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="last_name" class="col-sm-2 col-form-label">Nama Belakang</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Nama Belakang" value="<?= $queryUser['last_name']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="gender" class="col-sm-2">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <select class="custom-select" id="gender" name="gender" required>
                                                    <option value="">Pilih Jenis Kelamin</option>
                                                    <option <?= $queryUser['gender'] == "Laki-laki" ? "selected" : ""; ?> value="Laki-laki">Laki-laki</option>
                                                    <option <?= $queryUser['gender'] == "Perempuan" ? "selected" : ""; ?> value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="<?= $queryUser['email']; ?>" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password_old" class="col-sm-2 col-form-label">Password Lama</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="password_old" class="form-control" id="password_old" placeholder="Password Lama">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="password_new" class="col-sm-2 col-form-label">Password Baru</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="password_new" class="form-control" id="password_new" placeholder="Password Baru">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <input type="submit" name="submit" value="Update" class="btn btn-warning float-right" />
                                    </div>
                                    <!-- /.card-footer -->
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyrights© 2022 <a href="https://adminlte.io"><span class="text-warning">Rania</span> Rahmi</a>.</strong>
            All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->


    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="plugins/chart.js/Chart.min.js"></script>
    <script src="plugins/sparklines/sparkline.js"></script>
    <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="plugins/moment/moment.min.js"></script>
    <script src="plugins/daterangepicker/daterangepicker.js"></script>
    <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="plugins/summernote/summernote-bs4.min.js"></script>
    <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="dist/js/adminlte.js"></script>
    <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>