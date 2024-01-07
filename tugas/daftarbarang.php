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
            <div class="container my-5 py-5">

            </div>
        </div>
        <h2>Daftar Barang</h2>
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <form class="d-flex">
                    <input class="form-control me-2" type="text" onkeyup="myFunction()" placeholder="Search for names.." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </nav>

        <table class="table table-secondary">
            <thead>
                <tr class="header ">
                    <th scope="col">Kode Barang</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah Stok</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Harga Satuan</th>
                </tr>
            </thead>

            <?php include('koneksidb.php');
            $sql = "select * from barang";
            $q = mysqli_query($koneksi, $sql);
            $r = mysqli_fetch_array($q);
            if (!empty($r)) {
                do { ?>
                    <tr>
                        <td><?php echo $r['KodeBarang']; ?></td>
                        <td><?php echo $r['NamaBarang']; ?></td>
                        <td><?php echo $r['JumlahStok']; ?></td>
                        <td><?php echo $r['Satuan']; ?></td>
                        <td><?php echo $r['Harga']; ?></td>
                    </tr>
            <?php } while ($r = mysqli_fetch_array($q));
            } else {
                echo "<h2>Barang tidak ada !</h2>";
            } ?>

        </table>

        <script>
            function myFunction() {
                var input, filter, table, tr, td, i, txtValue;
                input = document.getElementById("myInput");
                filter = input.value.toUpperCase();
                table = document.getElementById("myTable");
                tr = table.getElementsByTagName("tr");
                for (i = 0; i < tr.length; i++) {
                    td = tr[i].getElementsByTagName("td")[0];
                    if (td) {
                        txtValue = td.textContent || td.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                        } else {
                            tr[i].style.display = "none";
                        }
                    }
                }
            }
        </script>
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