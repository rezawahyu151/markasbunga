<?php
include 'db.php';
$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
$a = mysqli_fetch_object($kontak);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Markas Bunga</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/bg.png">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>

<body>
    <!-- header -->

    <header id="home">
        <img src="img/bg.png" alt="">
        <h1><a href="#" class="logo">Markas Bunga</a></h1>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </header>

    <!-- <section class="home" id="home">

        <div class="home-slider">
            <div class="slide">
                <div class="content">
                    <h3>Markas Bunga Jakarta</h3>
                    <p>Menyediakan bebrapa jenis bunga</p>
                    <a href="#" class="btn">Pesan Sekarang</a>
                </div>
                <div class="image">
                    <img src="img/12.png" alt="">
                </div>
            </div>
        </div>
    </section> -->

    <div class="search">
        <div class="container">
            <form action="produk.php">
                <input type="text" name="search" placeholder="Cari ">
                <input type="submit" name="cari" value="Cari ">
            </form>
        </div>
    </div>

    <!-- category -->
    <div class="section">
        <div class="container">
            <h3>Kategori</h3>
            <div class="box">
                <?php
                $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
                if (mysqli_num_rows($kategori) > 0) {
                    while ($k = mysqli_fetch_array($kategori)) {
                ?>
                <a href="produk.php?kat=<?php echo $k['category_id'] ?>">
                    <div class="col-5">
                        <img src="produk/<?php echo $k['category_image'] ?>" width="50px" style="margin-bottom:5px;">
                        <p><?php echo $k['category_name'] ?></p>
                    </div>
                </a>
                <?php }
                } else { ?>
                <p>Kategori tidak ada</p>
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- new product -->
    <div class="section">
        <div class="container">
            <h3>Produk Terbaru</h3>
            <div class="box">
                <?php
                $produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_status = 1 ORDER BY product_id DESC LIMIT 8 ");
                if (mysqli_num_rows($produk) > 0) {
                    while ($p = mysqli_fetch_array($produk)) {
                ?>
                <a href="detail-produk.php?id=<?php echo $p['product_id'] ?>">
                    <div class="col-4">
                        <img src="produk/<?php echo $p['product_image'] ?>">
                        <p class="nama"><?php echo substr($p['product_name'], 0, 30) ?></p>
                        <p class="harga">Rp. <?php echo number_format($p['product_price']) ?></p>
                    </div>
                </a>
                <?php }
                } else { ?>
                <p>Produk tidak ada</p>
                <?php } ?>
            </div>
        </div>
    </div>



    <a href="#" target="_blank">
        <button class="btn-floating whatsapp">
            <img src="img/whatsapp.png" alt="whatsapp">
            <span>+62 857-7423-6397</span>
        </button>
    </a>

    <!-- footer -->
    <footer class="footer-distributed">

        <div class="footer-left">
            <!-- <img src="https://www.blogger.com/img/blogger-logotype-color-black-1x.png"> -->
            <h3>Markas <span>Bunga</span></h3>
            <p><a href="https://shopee.co.id/markas_bunga25" style="color: #44740E;"> Belanja di shopee</a></p>
            <p><a href="https://www.tokopedia.com/markasbunga?source=universe&st=product"
                    style="color: #44740E;">Belanja di tokopedia</a></p>
            <p><a href="" style="color: #44740E;">Hubungi via whatsapp</a></p>

            <br>
            <br>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Sukabumi Utara,
                        Kebon Jeruk, Kota Jakarta Barat</span>
                    DKI Jakarta - 11530</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+62 657-7423-6397</p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>Tentang Kami</span>
                Markas bunga adalah toko bunga 24 jam yang menjual berbagai macam bunga seperti bunga papan, bunga
                rangkaian
                meja, dan lain-lain. <b>Gratis ongkir</b> untuk area jakarta. Tujuan kami adalah
                kepuasan pelanggan nomor satu.
            </p>
            <div class="footer-icons">
                <a href="#">
                    <ion-icon name="logo-instagram"></ion-icon>
                    </i>
                </a>
                <a href="#">
                    <ion-icon name="logo-whatsapp"></ion-icon>
                    </i>
                </a>
            </div>
        </div>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>