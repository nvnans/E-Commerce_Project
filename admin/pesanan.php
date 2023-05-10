<?php
require_once "header.php";
require_once "sidebar.php";
require_once 'dbkoneksi.php';

$sql = "SELECT produk.*, kategori_produk.nama AS kategori FROM produk
        INNER JOIN kategori_produk ON kategori_produk.id = produk.kategori_produk_id";
$rs = $dbh->query($sql);

?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section style="background-color: white;" class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Pesanan Pelanggan</h1>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section style="background-color: white;" class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Alamat Lengkap</th>
                                <th scope="col">Produk</th>
                                <th scope="col">No.HP</th>
                                <th scope="col">Email</th>
                                <th scope="col">Catatan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Nopi</td>
                                <td>Cimanggis</td>
                                <td>HandPhone</td>
                                <td>08888899999</td>
                                <td>nopi@gmail.com</td>
                                <td>okeh</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Adit</td>
                                <td>Tugu</td>
                                <td>Laptop</td>
                                <td>08888765434</td>
                                <td>adit@gmail.com</td>
                                <td>mantep</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Rapli</td>
                                <td>Jakarta</td>
                                <td>Headset</td>
                                <td>08981725562</td>
                                <td>rapli@gmail.com</td>
                                <td>halo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php

require_once "footer.php";

?>