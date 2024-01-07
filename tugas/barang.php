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
                                    <a href="menuadmin.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Master</a>
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
            <h1>Form Barang</h1>
            <form method="post">
                <div class="form-group row">
                    <label for="KodeBarang" class="col-4 col-form-label">Kode Barang</label>
                    <div class="col-8">
                        <input id="KodeBarang" name="KodeBarang" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="NamaBarang" class="col-4 col-form-label">Nama Barang</label>
                    <div class="col-8">
                        <input id="NamaBarang" name="NamaBarang" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="JumlahStok" class="col-4 col-form-label">Jumlah Stok</label>
                    <div class="col-8">
                        <input id="JumlahStok" name="JumlahStok" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text" class="col-4 col-form-label">Harga</label>
                    <div class="col-8">
                        <input id="Harga" name="Harga" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="Satuan" class="col-4 col-form-label">Satuan</label>
                    <div class="col-8">
                        <input id="Satuan" name="Satuan" type="text" class="form-control" required="required">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="TglAuditTerakhir" class="col-4 col-form-label">Tgl. Audit Terakhir</label>
                    <div class="col-8">
                        <input id="TglAuditTerakhir" name="TglAuditTerakhir" type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
            <?php
            if (isset($_POST['submit'])) {
                $KodeBarang = filter_var($_POST['KodeBarang'], FILTER_SANITIZE_STRING);
                $NamaBarang = filter_var($_POST['NamaBarang'], FILTER_SANITIZE_STRING);
                $JumlahStok = filter_var($_POST['JumlahStok'], FILTER_SANITIZE_STRING);
                $Harga = filter_var($_POST['Harga'], FILTER_SANITIZE_STRING);
                $Satuan = filter_var($_POST['Satuan'], FILTER_SANITIZE_STRING);
                $TglAuditTerakhir = filter_var($_POST['TglAuditTerakhir'], FILTER_SANITIZE_STRING);
                include('koneksidb.php');
                $sql = "INSERT INTO `barang`(`KodeBarang`, `NamaBarang`, `JumlahStok`, `Harga`, `Satuan`, `TglAuditTerakhir`) VALUES ('" . $KodeBarang . "','" . $NamaBarang . "','" . $JumlahStok . "','" . $Harga . "','" . $Satuan . "','" . $TglAuditTerakhir . "')";
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