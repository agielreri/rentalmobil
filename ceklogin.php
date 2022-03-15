<?php
include 'admin/proses.php';
$do = new ClassMobil();
?>
<?php
session_start();
if(empty($_SESSION['namamember'])){
    ?>
    <script type="text/javascript">
        alert("untuk melakukan pemesanan Mobil, anda diwajibkan untuk In terbelih dahulu.\nJika belum member, silahkan mendaftar terlebih dahulu...!!!");
        </script>
        
<?php
 echo "<meta http-equiv='refresh' content='0; url=reservasi.php?pesan=$pesan'>";
}

?>