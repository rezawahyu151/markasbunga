<?php
error_reporting(0);
include 'db.php';
$kontak = mysqli_query($conn, "SELECT admin_telp, admin_email, admin_address FROM tb_admin WHERE admin_id = 1");
$a = mysqli_fetch_object($kontak);

$produk = mysqli_query($conn, "SELECT * FROM tb_product WHERE product_id = '" . $_GET['id'] . "' ");
$p = mysqli_fetch_object($produk);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Markas Bunga</title>
    <link rel="icon" type="image/x-icon" href="img/bg.png">
    <link rel="stylesheet" type="text/css" href="css/style.css">
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

    <!-- product detail -->
    <div class="section">
        <div class="container">
            <h3>Detail Produk</h3>
            <div class="box">
                <div class="col-2">
                    <img src="produk/<?php echo $p->product_image ?>" width="100%">
                </div>
                <div class="col-2">
                    <h3><?php echo $p->product_name ?></h3>
                    <h4>Rp. <?php echo number_format($p->product_price) ?></h4>
                    <p>Deskripsi :<br>
                        <?php echo $p->product_description ?>
                    </p>
                    <p><a href="https://api.whatsapp.com/send?phone=<?php echo $a->admin_telp ?>&text=Hai, saya tertarik dengan produk Anda."
                            target="_blank">
                            Hubungi via Whatsapp
                    </p>
                    <p><a href="#">Beli Di Tokopedia</a></p>
                    <p><a href="#">Beli Di Shoppe</a></p>
                </div>
            </div>
        </div>
    </div>

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