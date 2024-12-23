<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover Majalengka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .hero {
            background-image: url('your-image-url-here.jpg');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            padding: 100px 0;
        }
        .footer {
            background-color: black;
            color: white;
            padding: 20px 0;
        }
        .assets img {
            width: 100%;
            height: auto;
        }
        .section-title {
            text-align: center;
            margin-top: 50px;
            margin-bottom: 30px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Discover Majalengka</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="pemesanan.php">Pemesanan</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="main/daftar.php">Daftar Pemesanan</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="hero" style="background-image: url(asset/foto\ \(3\).jpeg);">
        <h1>Discover Majalengka</h1>
        <p>Popular Destination</p>
        <button class="btn btn-primary">GO NOW</button>
    </div>

    <section class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <h2>Terasering Panyaweuyan</h2>
                <p>
                    Terasering Panyaweuyan adalah destinasi wisata alam di Majalengka
                    yang menawarkan panorama hamparan sawah dan perbukitan yang ditanami sayuran.
                </p>
                <p><strong>Lokasi:</strong> Terletak di Kecamatan Argapura, Majalengka.</p>
                <button class="btn btn-dark">Book Now</button>
            </div>
            <div class="col-md-6">
                <img src="asset/foto (1).jpg" class="img-fluid" alt="Terasering">
                <div class="row">
                    <div class="col-md-3">
                        <img src="asset/foto (7).jpeg" class="w-100" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="asset/foto (4).jpeg" class="w-100" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="asset/panyaw.jpg" class="w-100" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="asset/foto (6).jpeg" class="w-100" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container mt-5">
        <div class="row">
            <div class="col-md-6 order-md-2">
                <h2>Situ Janawi</h2>
                <p>
                    Danau yang terkenal karena keindahannya. Destinasi ini menawarkan
                    pemandangan yang menakjubkan dengan air yang tenang dan suasana yang damai.
                </p>
                <p><strong>Lokasi:</strong> Desa Payung, Kecamatan Rajagaluh, Majalengka.</p>
                <button class="btn btn-dark">Book Now</button>
            </div>
            <div class="col-md-6 order-md-1">
                <img src="asset/foto1.jpeg" class="img-fluid" alt="Situ Janawi">
                <div class="row">
                    <div class="col-md-3">
                        <img src="asset/foto (2).jpeg" class="w-100" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="asset/foto (3).jpg" class="w-100" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="asset/foto (9).jpeg" class="w-100" alt="">
                    </div>
                    <div class="col-md-3">
                        <img src="asset/Situ-Janawi.png" class="w-100" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="container mt-5">
        <h2 class="section-title"></h2>
        <div class="row g-3">
            <div class="col-6 col-md-3"><img src="your-image-url.jpg" alt="" class="assets"></div>
            <div class="col-6 col-md-3"><img src="your-image-url.jpg" alt="" class="assets"></div>
            <div class="col-6 col-md-3"><img src="your-image-url.jpg" alt="" class="assets"></div>
            <div class="col-6 col-md-3"><img src="your-image-url.jpg" alt="" class="assets"></div>
        </div>
    </section>


    <footer class="footer text-center">
        <p>© 2024 Majalengka. All Rights Reserved.</p>
        <p>
            Contact: <a href="mailto:ilhamfadilah329@gmail.com">ilhamfadilah329@gmail.com</a> | Phone: 085590701159
        </p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
