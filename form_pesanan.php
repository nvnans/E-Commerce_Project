<?php require_once "atas.php" ?>
<section>
<form action="proses_pemesanan.php" method="POST" class="order-form">
    <h2 class="baru"> Form Pemesanan </h2>
    <div class="form-group">
        <label for="nama"> Nama Lengkap </label>
        <input type="text" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="nama"> Alamat Lengkap </label>
        <input type="text" id="nama" name="nama" required>
    </div>
    <div class="form-group">
        <label for="email"> Email </label>
        <input type="email" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="hp"> No.Hp </label>
        <input type="text" id="hp" name="hp" required>
    </div>
    <div class="form-group">
        <label for="catat"> Catatan </label>
        <textarea id="catatan" name="catatan" rows="3" required></textarea>
    </div>
    <div class="form-group">
        <label for="produk"> Produk </label>
        <select id="produk" name="produk" required>
            <option value=""> -- Pilih Produk -- </option>
            <option value="handphone"> HandPhone </option>
            <option value="laptop"> Laptop </option>
            <option value="kamera"> Kamera </option>
            <option value="headset"> Headset </option>
            <option value="tablet"> Tablet </option>
        </select>
    </div>
    <div class="form-group">
        <label for="jumlah"> Jumlah </label>
        <input type="number" id="jumlah" name="jumlah" min="1" max="10" required>
    </div>
    <button type="submit" class="order-button" onclick="location.href='thanks.php'">Pesan Sekarang </button>
</form>
</section>
<?php require_once "bawah.php" ?>