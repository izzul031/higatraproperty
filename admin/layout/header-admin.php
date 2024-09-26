<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link rel="icon" href="../../images/logo.png" type="image/x-icon">

    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- Custom CSS -->
    <style>
        #sidebar-wrapper {
            min-height: 100vh;
            margin-left: -15rem;
            transition: margin 0.25s ease-out;
        }

        #sidebar-wrapper .sidebar-heading {
            padding: 0.875rem 1.25rem;
            font-size: 1.2rem;
        }

        #sidebar-wrapper .list-group {
            width: 15rem;
        }

        #page-content-wrapper {
            min-width: 100vw;
        }

        body.sb-sidenav-toggled #sidebar-wrapper {
            margin-left: 0;
        }




        @media (min-width: 768px) {
            #sidebar-wrapper {
                margin-left: 0;
            }

            #page-content-wrapper {
                min-width: 0;
                width: 100%;
            }

            body.sb-sidenav-toggled #sidebar-wrapper {
                margin-left: -15rem;
            }
        }
    </style>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="sidebar-heading d-flex justify-content-center">
                <img src="../../images/logo.png" alt="Icon Usaha" width="80" class="img-fluid">
            </div>
            <div class="list-group list-group-flush">
                <!-- <a href="../karyawan/" class="list-group-item list-group-item-action bg-light">Karyawan</a>
                <a href="../testimonial/" class="list-group-item list-group-item-action bg-light">Klien</a> -->

                <!-- Dropdown Informasi & Layanan -->
                <div class="dropdown">
                    <a href="#" class="list-group-item list-group-item-action bg-light dropdown-toggle" id="servicesDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Beranda
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <li><a class="dropdown-item" href="../services/">Informasi dan Layanan</a></li>
                        <li><a class="dropdown-item" href="../tabel_harga/">Tabel Harga Jasa Bangun</a></li>
                        <li><a class="dropdown-item" href="../alasan_memilih/">Alasan Memilih Kami</a></li>
                        <li><a class="dropdown-item" href="../karyawan/">Karyawan</a></li>
                        <li><a class="dropdown-item" href="../testimonial/">Apa Kata Clien Kita!!!</a></li>
                        <li><a class="dropdown-item" href="../partners/">Partner</a></li>
                    </ul>
                </div>

                <!-- Dropdown Galeri -->
                <div class="dropdown">
                    <a href="#" class="list-group-item list-group-item-action bg-light dropdown-toggle" id="galeriDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Galeri
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="galeriDropdown">
                        <li><a class="dropdown-item" href="../gambar3d/">Gambar 3D</a></li>
                        <li><a class="dropdown-item" href="../progres/">Progres</a></li>
                        <li><a class="dropdown-item" href="../hasil_jadi/">Hasil Jadi</a></li>
                        <li><a class="dropdown-item" href="../bast/">BAST</a></li>
                    </ul>
                </div>

                <div class="dropdown">
                    <a href="#" class="list-group-item list-group-item-action bg-light dropdown-toggle" id="legalitasDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="legalitasDropdown">
                        <li><a class="dropdown-item" href="../reports/">Legalitas</a></li>
                    </ul>
                </div>


                <!-- <a href="../gambar3d/" class="list-group-item list-group-item-action bg-light">Gambar 3D</a>
                <a href="../progres/" class="list-group-item list-group-item-action bg-light">Progres</a>
                <a href="../hasil_jadi/" class="list-group-item list-group-item-action bg-light">Hasil Jadi</a>
                <a href="../bast/" class="list-group-item list-group-item-action bg-light">BAST</a> -->


                <!-- <a href="../reports/" class="list-group-item list-group-item-action bg-light">Reports</a> -->
                <!-- <a href="../tabel_harga/" class="list-group-item list-group-item-action bg-light">Tabel Harga Bangun</a>
                <a href="../alasan_memilih/" class="list-group-item list-group-item-action bg-light">Alasan Memilih</a> -->
            </div>
        </div>

        <!-- Script Bootstrap 5 -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <div class="container-fluid">
                    <div class="container-fluid">
                        <button class="btn btn-link d-md-none me-3" id="menu-toggle">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <button class="btn btn-link d-none d-md-block me-3" id="menu-toggle-desktop">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse">

                        </div>
                    </div>
            </nav>
            <div class="container-fluid">