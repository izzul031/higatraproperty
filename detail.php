<?php
include 'kon/koneksi.php'; // Sesuaikan path koneksi.php

// Ambil id klien dari URL
$id_klien = $_GET['id'];

// Query untuk mengambil data klien dari testimonials
$queryKlien = "SELECT * FROM testimonials WHERE id = $id_klien";
$resultKlien = mysqli_query($conn, $queryKlien);
$klien = mysqli_fetch_assoc($resultKlien);

// Query untuk mengambil data gambar 3D, progres, hasil jadi, dan BAST berdasarkan id klien
$queryGambar3D = "SELECT * FROM gambar_3d WHERE id_klien = $id_klien";
$queryProgres = "SELECT * FROM progres WHERE id_klien = $id_klien";
$queryHasilJadi = "SELECT * FROM hasil_jadi WHERE id_klien = $id_klien";
$queryBast = "SELECT * FROM bast WHERE id_klien = $id_klien";

$resultGambar3D = mysqli_query($conn, $queryGambar3D);
$resultProgres = mysqli_query($conn, $queryProgres);
$resultHasilJadi = mysqli_query($conn, $queryHasilJadi);
$resultBast = mysqli_query($conn, $queryBast);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Klien - <?= $klien['nama']; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            color: white;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: black;
        }

        .img-fluid {
            max-width: 100%;
            height: auto;
        }

        .detail-header {
            margin-top: 30px;
            font-weight: bold;
            font-size: 24px;
            text-transform: uppercase;
            margin-bottom: 60px;
        }

        .detail-row {
            display: flex;
            justify-content: flex-start;
            margin-top: 15px;
        }

        .detail-item {
            margin-right: 20px;
        }

        .carousel-inner img {
            width: 100%;
            height: 500px;
        }

        .carousel-indicators {
            bottom: -50px;
            /* Atur jarak dari bagian bawah carousel */
        }

        .carousel-indicators li {
            background-color: #007bff;
            /* Warna untuk indikator tidak aktif */
        }

        .carousel-indicators .active {
            background-color: #ffc107;
            /* Warna untuk indikator aktif */
        }

        .carousel-inner img {
            border-radius: 10px;
            gap: 10px;
        }

        .slide {
            margin-bottom: 100px;
        }

        .container-detail {
            background-color: black;
        }

        @media (max-width: 576px) {
            .carousel-inner img {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 480px) {
            .carousel-inner img {
                margin-bottom: 20px;
            }
        }

        @media (max-width: 768px) {
            .carousel-inner img {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container container-detail mt-5">
        <h2>Nama Klien: <?= $klien['nama']; ?></h2>

        <!-- Bagian Gambar 3D -->
        <h3 class="detail-header text-center">Gambar 3D</h3>

        <div id="carouselGambar3D" class="carousel slide" data-ride="carousel">
            <!-- Indikator -->
            <ol class="carousel-indicators">
                <?php
                $totalGambar = mysqli_num_rows($resultGambar3D);
                $jumlahSlide = ceil($totalGambar / 3);
                for ($i = 0; $i < $jumlahSlide; $i++) : ?>
                    <li data-target="#carouselGambar3D" data-slide-to="<?= $i; ?>" class="<?= $i === 0 ? 'active' : ''; ?>"></li>
                <?php endfor; ?>
            </ol>

            <!-- Wrapper untuk slide -->
            <div class="carousel-inner">
                <?php
                $i = 0;
                while ($gambar3d = mysqli_fetch_assoc($resultGambar3D)) :
                    if ($i % 3 === 0) : // Mulai slide baru setiap 3 gambar 
                ?>
                        <div class="carousel-item <?= $i === 0 ? 'active' : ''; ?>">
                            <div class="row">
                            <?php endif; ?>
                            <div class="col-md-4">
                                <img src="images/gambar_3d/<?= $gambar3d['gambar']; ?>" class="d-block w-100 img-fluid" alt="<?= $gambar3d['deskripsi']; ?>">
                                <!-- <div class="carousel-caption d-none d-md-block">
                                    <p><?= $gambar3d['deskripsi']; ?></p>
                                </div> -->
                            </div>
                            <?php
                            if ($i % 3 === 2 || $i === $totalGambar - 1) : // Tutup row dan slide 
                            ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php
                    $i++;
                endwhile; ?>
            </div>
        </div>


        <!-- Bagian Progres -->
        <h3 class="detail-header text-center">Progres</h3>

        <div id="carouselProgres" class="carousel slide" data-ride="carousel">
            <!-- Indikator -->
            <ol class="carousel-indicators">
                <?php
                $totalProgres = mysqli_num_rows($resultProgres);
                $jumlahSlide = ceil($totalProgres / 3);
                for ($i = 0; $i < $jumlahSlide; $i++) : ?>
                    <li data-target="#carouselProgres" data-slide-to="<?= $i; ?>" class="<?= $i === 0 ? 'active' : ''; ?>"></li>
                <?php endfor; ?>
            </ol>

            <!-- Wrapper untuk slide -->
            <div class="carousel-inner">
                <?php
                $i = 0;
                while ($progres = mysqli_fetch_assoc($resultProgres)) :
                    if ($i % 3 === 0) : // Mulai slide baru setiap 3 gambar 
                ?>
                        <div class="carousel-item <?= $i === 0 ? 'active' : ''; ?>">
                            <div class="row">
                            <?php endif; ?>
                            <div class="col-md-4">
                                <img src="images/progres/<?= $progres['gambar']; ?>" class="d-block w-100 img-fluid" alt="<?= $progres['deskripsi']; ?>">
                                <!-- <div class="carousel-caption d-none d-md-block">
                                    <p><?= $progres['deskripsi']; ?></p>
                                </div> -->
                            </div>
                            <?php
                            if ($i % 3 === 2 || $i === $totalProgres - 1) : // Tutup row dan slide 
                            ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php
                    $i++;
                endwhile; ?>
            </div>
        </div>

        <!-- Bagian Hasil Jadi -->
        <h3 class="detail-header text-center">Hasil Jadi</h3>

        <div id="carouselHasilJadi" class="carousel slide" data-ride="carousel">
            <!-- Indikator -->
            <ol class="carousel-indicators">
                <?php
                $totalHasilJadi = mysqli_num_rows($resultHasilJadi);
                $jumlahSlide = ceil($totalHasilJadi / 3);
                for ($i = 0; $i < $jumlahSlide; $i++) : ?>
                    <li data-target="#carouselHasilJadi" data-slide-to="<?= $i; ?>" class="<?= $i === 0 ? 'active' : ''; ?>"></li>
                <?php endfor; ?>
            </ol>

            <!-- Wrapper untuk slide -->
            <div class="carousel-inner">
                <?php
                $i = 0;
                while ($hasilJadi = mysqli_fetch_assoc($resultHasilJadi)) :
                    if ($i % 3 === 0) : // Mulai slide baru setiap 3 gambar 
                ?>
                        <div class="carousel-item <?= $i === 0 ? 'active' : ''; ?>">
                            <div class="row">
                            <?php endif; ?>
                            <div class="col-md-4">
                                <img src="images/hasil_jadi/<?= $hasilJadi['gambar']; ?>" class="d-block w-100 img-fluid" alt="<?= $hasilJadi['deskripsi']; ?>">
                                <!-- <div class="carousel-caption d-none d-md-block">
                                    <p><?= $hasilJadi['deskripsi']; ?></p>
                                </div> -->
                            </div>
                            <?php
                            if ($i % 3 === 2 || $i === $totalHasilJadi - 1) : // Tutup row dan slide 
                            ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php
                    $i++;
                endwhile; ?>
            </div>
        </div>



        <!-- Bagian BAST -->
        <h3 class="detail-header text-center">BAST</h3>

        <div id="carouselBast" class="carousel slide" data-ride="carousel">
            <!-- Indikator -->
            <ol class="carousel-indicators">
                <?php
                $totalBast = mysqli_num_rows($resultBast);
                $jumlahSlide = ceil($totalBast / 3);
                for ($i = 0; $i < $jumlahSlide; $i++) : ?>
                    <li data-target="#carouselBast" data-slide-to="<?= $i; ?>" class="<?= $i === 0 ? 'active' : ''; ?>"></li>
                <?php endfor; ?>
            </ol>

            <!-- Wrapper untuk slide -->
            <div class="carousel-inner">
                <?php
                $i = 0;
                while ($bast = mysqli_fetch_assoc($resultBast)) :
                    if ($i % 3 === 0) : // Mulai slide baru setiap 3 gambar 
                ?>
                        <div class="carousel-item <?= $i === 0 ? 'active' : ''; ?>">
                            <div class="row">
                            <?php endif; ?>
                            <div class="col-md-4">
                                <img src="images/bast/<?= $bast['gambar']; ?>" class="d-block w-100 img-fluid" alt="<?= $bast['deskripsi']; ?>">
                                <!-- <div class="carousel-caption d-none d-md-block">
                                    <p><?= $bast['deskripsi']; ?></p>
                                </div> -->
                            </div>
                            <?php
                            if ($i % 3 === 2 || $i === $totalBast - 1) : // Tutup row dan slide 
                            ?>
                            </div>
                        </div>
                    <?php endif; ?>
                <?php
                    $i++;
                endwhile; ?>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>