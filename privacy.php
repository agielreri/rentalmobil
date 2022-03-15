<?php
include 'admin/proses.php';
$do = new ClassMobil();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Rental Mobil</title>
<meta http-equiv="Content-Type" content="text/html; charset-utf-8" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar,0); }, false); function hideURLbar(){ window.scrollTo(0,1); }</script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
  <script>
        new WOW().init();
  </script>
<!--//end-animate-->
</head>
<body>
<!-- top header -->
<div class="top-header navbar navbar-fixed-top">
 <div class="container">
  <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
   <li class="hm"><a href="index.php"><i class="fa fa-home"></i>
   <!-- <li class="prnt"><a href="javascript:window.print()">Print/SMS Ticket</a></li> -->

</ul>
<?php

if(empty($_SESSION['namamember'])){
    ?>
    <script type="text/javascript">
    function validasi_input(form){
        if (form.username.value == "" && form.password.value== ""){
          alert("Username atau password masih kosong!");
            form.username.focus();
            return (false);
        }
        return (true);
    }
    </script>
    <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
    <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Daftar</a></li>
    <li class="sigi"><a href="#" data-toggle="modal" data-target="myModal4" >/ Masuk</a></li>
    </ul>
    <?php
}else{
    ?>

    <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
        <li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Halo <?php echo"$_SESSION[nama]";?></a></li>
        <li class="sigi"><a href="logout.php">/ Keluar</a></li>
    </ul>
    <?php
    }
    ?>
    <div class="clearfix"></div>
</div>
</div>
<!-- /top header ---->
<!-- header ---->
<div class="header">
<div class="container">
<div class="logo wow fadeInDown animated" data-wow-delay=".5s">
<a href="index.php">Rental <span>Mobil</span> <span>Agiel Reri</span></a>
</div>
<div class="bus wow fadeInUp animated" data-wow-delay=".5s">
  <a href="bus.php" class="buses active">Daftar Mobil</a>
</div>
<div class="lock fadeInDown animated" data-wow-delay=".5s">
    <li><i class="fa fa-lock"></i></li>
    <li><div class="securetxt">Aman &amp; Terpercaya<br></div></li>
    <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
</div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
    <div class="container">
        <div class="navigation">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                 <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                         <span class="sr-only">Toggle navigation</span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                         <span class="icon-bar"></span>
                     </button>
                 </div>
                 <!-- Collect the nav links, forms, and other content for toggling -->
                 <div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
                     <nav class="cl-effect-1">
                         <ul class="nav navbar-nav">
                             <li><a href="about.php">Tentang</a></li>
                             <li><a href="privacy.php">Privasi</a></li>
                             <li><a href="#">Syarat dan Ketentuan </a> </li>
                             <div class="clearfix"></div>
                         </ul>
                     </nav>
                 </div><!-- /.navbar-collapse -->
            </nav>
        </div>

        <div class="clearfix"></div>
    </div>
</div>

<div class="banner-1">
    <div class="container">
    <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn; color: navy;"> <br> Rental Mobil - Agiel Reri</h1>
        </div>
</div>

<div class="privacy">
    <div class="container">
        <h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5; animation-name: fadeInDown;">Kebijakan Privasi</h3>
        <p class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5; animation-name: fadeInDown;">Privasi anda penting bagi kami.Dan kami berkomitmen untuk melindungi informasi pribadi apa pun yang anda berikan kepada kami. Dokumen ini, yang kami perbarui dari waktu ke waktu, menjelaskan tentang apa yang kami lakukan dengan informasi pribadi anda. Ini juga memberi tahu anda cara menghubungi kami jika anda mempunyai pertanyaan tentang hal ini.</p>
        <p class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5; animation-name: fadeInDown;">Kami menawarkan mobil sewaan online dan produk tambahan melalui situs web dan aplikasi seluler kami sendiri dan melalui "platform" online lain, seperti situs web mitra. Kebijakan ini berlaku pada semua platform ini. </p>
        <h4 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5; animation-name: fadeInDown;">Privasi</h4>
        <p>Saat anda memesan mobil atau meminta penawaran, kami meminta anda untuk memberikan informasi yang kami butuhkan untuk memberi apa yang anda inginkan, ini mungkin termasuk nama, usia, perincian kontak pengemudi utama (email, alamat, dan nomer telepon),tanggal dan tempat lahir, informasi paspor,informasi SIM,dan informasi pembayaran.

        Agar segalanya lebih mudah, Anda dapat membuat akun pengguna.ini  memungkinkan Anda untuk menyimpan pengaturan pribai Anda, dan meninjau serta mengelola pemesanan Anda.

        Saat anda mengunjungi situs web kami,kami mungkin mengumpulkan informasi tertentu,bahkan jika Anda tidak memesan mobil.ini mungkin termasuk alamat IP Anda dan premban yang anda gunakan,serta informasi tentang sistem operasi kantor anda,versi aplikasi,pengaturan bahasa,dan halaman yang dikunjungi.Jika Anda menggunakan perangkat seluler,kami juga mungkin akan mengumpulkan data yang mengidentifikasi perangkat anda,pengaturan dan karakteristik spesifik perangkat,dan garis lintang/bujur.kami juga mungkin akan menghitung dan memproses data yang terkait dengan aplikasi yang diinstal pada perangkat seluler anda (misalnya, nama, deskripsi, dan kategori). Tidak ada data informasi itu sendiri yang akan dapat memberi tahu kami siapa anda, tetapi masih tetap dapat dianggap sebagi informasi 'pribadi'

        kami juga mungkin menerima informasi tentang anda saat anda menggunakan layanan media sosial tertentu.</p>

    </div>
</div>
<div class="clearfix"></div>
            </div>
            </div>
            </div>
            <!--- /about --->
            <!--- footer-top --->
            <div class="footer-top">
                <div class="container">
                    <div class="col-md-6 footer-left wow fadeInLeft animated" data-wow-delay=".5s">
                        <h3>Kategori Mobil</h3>
                        <ul>
                            <?php
                            $row = $do->selectMerek();
                            $no = 1;
                            foreach ($row as $val) {

                                echo "<li><a href='bus.php?id=$val[0]'>$val[1]</a></li>";
                                $no++;
                            }
                            ?>
                            <div class="clearfix"></div>
                       </ul>
                    </div>
                    <div class="col-md-6 footer-left wow fadeInRight animated" data-wow-delay=".5s">
                        <h3>Perjalanan</h3>
                        <ul>
                            <?php
                            $row =$do->selectKota();
                            $no = 1;
                            foreach ($row as $val) {
                                echo "<li><a href='#'>$val[1] - $val[2]</a></li>";
                                $no++;
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="copy-right">
                                    <div class="container">

                                    <div class="footer-social-icons wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
                                    <ul>
                                        <li><a class="facebook" href="#"><span>Facebook</span></a></li>
                                        <li><a class="twitter" href="#"><span>Twitter</span></a></li>
                                        <li><a class="googleplus" href="#"><span>Google</span></a></li>
                                </ul>
                                </div>
                                <p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">@ Rental Mobil. <a href="#">SMK</a> </p>
                                </div>
                                </div>
        <!--- /copy-right ---->
        <!-- sign -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
                    </div>
                <section>
                    <div class="modal-body modal-spa">
                        <div class="login-grids">
                            <div class="login">
                                <div class="login-right">
                                    <form action="prosesdaftar.php" method="post" onsubmit="return validasi_input(this)">
                                <h3>Buat akun Anda</h3>
                                <input type="text" name="nama" placeholder="Masukkan Nama Lengkap Anda">
                                <input type="text" name="username" placeholder="Masukkan Username Anda">
                                <input type="text" name="alamat" placeholder="Masukkan Alamat Anda">
                                <input type="text" name="telepon" placeholder="Masukkan Telepon Anda">
                                <input type="password" name="password" placeholder="Masukkan Password Anda">
                                <input type="text" name="noktp" placeholder="Masukkan No KTP anda">
                                <input type="submit" name="daftar" value="CREATE ACCOUNT">
                                </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </section>
                </div>
            </div>
        </div>

        <!-- //sign -->
        <!-- signin -->
        <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content modal-info">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">x</span></button>
                    </div>
                    <div class="modal-body modal-spa">
                        <div class="login-grids">
                            <div class="login">
                                <div class="login-right">
                                    <form action="prosesdaftar.php" method="post" onsubmit="return validasi_input(this)">
                                <h3>Masuk Dengan Akun Anda</h3>
                                <input type="text" name="username" placeholder="Masukkan Username Anda">
                                <input type="password" name="password" placeholder="Masukkan password Anda">
                                <input type="submit" value="SIGNIN" name="masuk">
                                </form>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- //signin -->
        <!-- write us -->
        <!-- //write us -->
</body>
</html>