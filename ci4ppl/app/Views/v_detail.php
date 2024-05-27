<!-- v_detail.php -->
<?= $this->extend('v_template') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Barang</title>
    <style>
        /* body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }  */

        h2 {
            text-align: center;
            color: #333;
        }

        .detail {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .detail h3 {
            margin-bottom: 10px;
            color: #333;
        }

        .detail p {
            color: #666;
        }

        .detail img {
            max-width: 100%; /* Membuat gambar tidak lebih lebar dari container */
            max-height: 300px; /* Atur tinggi maksimum sesuai kebutuhan */
            display: block; /* Untuk memastikan gambar memiliki ruang kosong di bawahnya */
            margin: 0 auto; /* Pusatkan gambar */
        }
        
    </style>
</head>
<body>

<div class="detail">
    <h2>Detail Barang</h2>
    <h3>Kode: <?= $barang['kode'] ?></h3>
    <p>Nama Barang: <?= $barang['nama_barang'] ?></p>
    <p>Harga: <?= $barang['harga'] ?></p>
    <p>Gambar: 
        <?php if (!empty($barang['gambar'])): ?>
            <img src="<?= base_url('upload/' . $barang['gambar']) ?>" alt="Gambar Barang">
        <?php else: ?>
            <p>Tidak ada gambar tersedia</p>
        <?php endif; ?></p>
</div>

</body>
</html>
<?= $this->endSection() ?>
