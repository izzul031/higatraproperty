<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
    <!-- <div>Icons made from <a href="https://www.onlinewebfonts.com/icon">svg icons</a>is licensed by CC BY 4.0</div> -->
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

    <style>
        .header-image {
            width: 100%;
            height: auto;
        }

        .container {
            display: block;
            gap: 20px;
            width: 80%;
            /* margin: 0 auto; */
            padding-top: 50px;
            text-align: center;
            /* margin-top: 50px;
            margin-bottom: 50px; */
            /* background: #000; */
        }

        .header {
            font-size: 36px;
            color: #b59a3b;
            font-weight: bold;
        }

        .content {
            font-size: 16px;
            color: #333;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
        }

        .content a {
            color: #fff;
            text-decoration: underline;
            font-weight: bold;
        }

        .section {
            background-color: #B69957;
            padding: 50px 0;
            margin: auto;
        }

        .section h2 {
            font-size: 24px;
            color: #ffffff;
            font-weight: bold;
        }

        .section p {
            font-size: 16px;
            color: #ffffff;
            max-width: 600px;
            margin: 0 auto;
        }

        .section-2 p {
            font-size: 16px;
            color: #000;
            max-width: 600px;
            margin: 0 auto;
        }

        .section-2 {
            background-color: #fff;
            padding: 50px 0;
        }

        .section-2 h2 {
            font-size: 24px;
            color: #000;
            font-weight: bold;
        }

        .section-2 p {
            font-size: 16px;
            color: #000;
            max-width: 600px;
            margin: 0 auto;
        }

        .logo {
            display: block;
            margin: 20px auto;
        }

        .contact-button {
            background-color: #00b140;
            color: #fff;
            padding: 10px 20px;
            border-radius: 20px;
            text-decoration: none;
            display: inline-block;
            margin-top: 20px;
        }

        .contact-button i {
            margin-right: 10px;
        }

        .footer {
            margin-bottom: auto;
        }

        .section {
            padding: 20px 0;
            background-color: #000;
        }

        .container-3 {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        .text-center {
            text-align: center;
        }

        .text-justify {
            text-align: justify;
        }

        @media (max-width: 576px) {
            .container-3 {
                padding: 10px;
            }

            .text-center {
                font-size: 18px;
            }

            .text-justify {
                font-size: 14px;
            }
        }

        @media (min-width: 577px) and (max-width: 992px) {
            .container-3 {
                padding: 15px;
            }

            .text-center {
                font-size: 20px;
            }

            .text-justify {
                font-size: 16px;
            }
        }

        @media (min-width: 993px) {
            .container-3 {
                padding: 20px;
            }

            .text-center {
                font-size: 22px;
            }

            .text-justify {
                font-size: 18px;
            }
        }

        .row {
                display: flex;
                flex-wrap: wrap;
                padding: 0 4px;
            }

            /* Create four equal columns that sits next to each other */
            .column {
                flex: 15%;
                /* max-width: 15%; */
                /* padding: 0 4px; */
            }

            .column img {
                margin-top: 20px;
                /* vertical-align: middle; */
                width: 95%;
                justify-content: center;
            }
    </style>
</head>
<body>
     <?php include "layout/navbar2.html" ?>
    <div class="container">
        <div class="header">
            Higatra Properti
        </div>
        <div class="content">
            <p style="text-align: justify; color:#fff">
                <b style="color: #AA8D3F;">Higatra Property</b> adalah perusahaan kontruksi yang didirikan pada <b style="color: #AA8D3F;">tahun 2017</b> oleh <b style="color: #AA8D3F;">Eko
                    Heri Supriyanto.</b> Berawal dari keresahan, Higatra hadir di Masyarakat dengan <b style="color: #AA8D3F;">harga bangun
                    menyesuaikan dengan Komitmen produk inovasi dengan Garansi resmi 1 Tahun.</b>
            </p>
            <p style="text-align: justify; color:#fff">
                Mewujudkan Rumah Impian merupakan suatu kebanggan bagi kami dengan <b style="color: #AA8D3F;">mengatur tata letak, pencahayaan,
                    dan elemen desain dengan cermat, kami membantu Anda menciptakan ruang yang harmonis, menenangkan,
                    dan menginspirasi. </b>
            </p>
            <p style="text-align: justify; color:#FFF">
                Higatra Property siap memberikan pengalaman yang menyenangkan. Kami akan mengurus semuanya, mulai dari
                desain hingga pengawasan proyek sampai terbangun rumah impian anda.
            </p>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <h2 class="text-center" style="color: #AA8D3F;">
                Visi
            </h2>
            <p class="text-justify">
                Menjadi perusahaan konstruksi yang <b style="color: #AA8D3F;">mengedepankan kualitas dan jaminan produk terbaik di
                    Indonesia.</b> memberikan kontribusi positif bagi klien yang membutuhkan jasa bangun
                <b style="color: #AA8D3F;">BERGARANSI</b> di Indonesia.
            </p>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <h2 class="text-center" style="color: #AA8D3F;">
                Misi
            </h2>
            <p class="text-justify">
                Berusaha mengembangkan <b style="color: #AA8D3F;">produk pelayanan terbaik dan memberikan inovasi kreatif pada jasa kontruksi
                    serta</b> memberikan kontribusi positif bagi masyarakat tentang jasa bangun dan renovasi
                <b style="color: #AA8D3F;">BERGARANSI</b> di Indonesia.
            </p>
        </div>
    </div>

    <!-- LEGALITAS -->

    <div class="section-2" style="background-color: #000;">
        <h2 class="text-center" style="color:#b59a3b; font-family: 'Poppins', sans-serif;">
            LEGALITAS
        </h2>
        <div class="row">
            <div class="column">
                <img src="images/Legalitas/potret1.jpg">
            </div>
            <div class="column">
                <img src="images/Legalitas/Picture23.jpg">
                <img src="images/Legalitas/Picture13.jpg">
            </div>
            <div class="column">
                <img src="images/Legalitas/potret3.jpg">
            </div>
            <div class="column">
                <img src="images/Legalitas/Picture33.jpg">
                <img src="images/Legalitas/Picture43.jpg">
            </div>
            <div class="column">
                <img src="images/Legalitas/potret2.jpg">
            </div>
        </div>

                <!-- partner -->
        <section class="section_partner pb-5">
            <div class="heading_container navy3 mb-2 ">
            <h2>Our Partners</h2>
            </div>
            <div class="slider slider_partner">
            <div class="slider-items slider-items_partner">
                <?php
                include 'kon/koneksi.php';
                $query = "SELECT * FROM partners";
                $result = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_assoc($result)): ?>
                <img src="images/partners/<?= $row['image_url']; ?>" alt="Partner">
                <?php endwhile; ?>
            </div>
            </div>
        </section>

        <!-- <a href="https://wa.me/6287849880465?text=Halo,%20saya%20tertarik%20dengan%20jasa%20Anda." target="_blank" class="whatsapp-float">
            <i class="fab fa-whatsapp" style="margin-right: 10px;"></i>
            HUBUNGI KAMI!
        </a> -->
        <div class="social-media-float">
            <a href="https://wa.me/6287849880465?text=Halo,%20saya%20tertarik%20dengan%20jasa%20Anda." target="_blank" class="whatsapp-float">
            <i class="fab fa-whatsapp"></i>
            </a>
            <a href="https://www.instagram.com/higatra_property" target="_blank" class="instagram-float">
            <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.facebook.com/username" target="_blank" class="facebook-float">
            <i class="fab fa-facebook"></i>
            </a>
            <a href="https://www.youtube.com/@HigatraProperty" target="_blank" class="youtube-float">
            <i class="fab fa-youtube"></i>
            </a>
            <a href="https://www.tiktok.com/@higatraproperty" target="_blank" class="tiktok-float">
            <i class="fab fa-tiktok"></i>
            </a>
        </div>



        <!-- end partner -->
        <footer>
            <div class="footer">
            <div class="container">
                <div class="row align-items-center row_footer">
                <div class="col-md-3">
                    <div class="map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.900066300759!2d113.84915147483633!3d-7.021031992980595!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd9e70057ed749f%3A0x92004152aeafb8ed!2sHIGATRA%20PROPERTY!5e0!3m2!1sid!2sid!4v1726040814118!5m2!1sid!2sid"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy">
                    </iframe>
                    </div>
                </div>
                <div class="col-md-3 isi_footer" style="margin-top: 2%;">
                    <h5>Address</h5>
                    <p class="small"><i class="fas fa-map-marker-alt"></i> Jln. Jokotole No.7000, Dusun Toros, Babbalan,
                    Kec.
                    Batuan, Kabupaten Sumenep, Jawa Timur 69416</p>
                </div>
                <div class="col-md-3 isi_footer" style="margin-bottom: 3%;">
                    <h5>Work hours</h5>
                    <p class="small"><i class="fas fa-clock"></i> Senin-Sabtu 08:00 - 16:00 WIB</p>
                </div>
                <div class="col-md-3 isi_footer" style="margin-bottom: 2%;">
                    <h5>Contact</h5>
                    <p class="small"><i class="fas fa-envelope"></i> higatraapropertyy@gmail.com<br>
                    <i class="fas fa-phone"></i> +62 877 - 2979 - 1118
                    </p>
                </div>
                </div>
                <div class="row">
                <div class="col text-center social-icons">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-tiktok"></i>
                </div>
                </div>
            </div>
            </div>
        </footer>
        <?php include "layout/footer.html" ?>



        <!-- footer section -->

        <script src="js/jquery-3.4.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <script src="js/carousel.js"></script>
        <script src="js/index.js"></script>
</body>
</html>