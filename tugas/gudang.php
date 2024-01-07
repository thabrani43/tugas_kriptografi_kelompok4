<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Sim Gudang</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Navbar & Hero Start -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
            <div class="container-xxl position-relative p-0 hero-header">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                    <a href="" class="navbar-brand p-0">
                        <a class="navbar-brand" href="menuadmin.php"><img src="img/logo.jpg" width="50px" height="50px"></a>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0 pe-4">
                            <div class="navbar-nav ms-auto py-0 pe-4">
                                <a href="menuadmin.php" class="nav-item nav-link active">Home</a>
                                <a href="menutransaksi.php" class="nav-item nav-link">Transaksi</a>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Master</a>
                                    <div class="dropdown-menu m-0">
                                        <a href="barang.php" class="dropdown-item">Barang</a>
                                        <a href="gudang.php" class="dropdown-item">Gudang</a>
                                    </div>
                                </div>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Laporan</a>
                                    <div class="dropdown-menu m-0">
                                        <a href="daftarbarang.php" class="dropdown-item">Daftar Barang</a>
                                        <a href="daftargudang.php" class="dropdown-item">Daftar Gudang</a>
                                        <a href="rekapbarang.php" class="dropdown-item">Rekap Barang</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </nav>

        <div class="container-xxl py-5 bg-dark hero-header mb-5">
        </div>
        <div class="container">
            <h1>Form Gudang</h1>
            <form method="post">
                <div class="form-group row">
                    <label for="KodeGudang" class="col-4 col-form-label">Kode Gudang</label>
                    <div class="col-8">
                        <input id="KodeGudang" name="KodeGudang" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Alamat" class="col-4 col-form-label">Alamat</label>
                    <div class="col-8">
                        <textarea id="Alamat" name="Alamat" cols="40" rows="5" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Simpan Gudang Baru</button>
                    </div>
                </div>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                $KodeGudang = filter_var($_POST['KodeGudang'], FILTER_SANITIZE_STRING);
                $Alamat = filter_var($_POST['Alamat'], FILTER_SANITIZE_STRING);
                include('koneksidb.php');
                $sql = "INSERT INTO `gudang`(`KodeGudang`, `Alamat`) VALUES ('" . $KodeGudang . "','" . $Alamat . "')";
                $q = mysqli_query($koneksi, $sql);
                if ($q) {
                    echo '<div class="alert alert-success alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Success!</strong> Rekord sukses disimpan !.
    </div>';
                } else {
                    echo '<div class="alert alert-danger alert-dismissible">
      <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
      <strong>Gagal!</strong> Rekord gagal disimpan !.
    </div>';
                }
            }
            ?>
        </div>
    </div>
    <!-- JavaScript Libraries -->
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>