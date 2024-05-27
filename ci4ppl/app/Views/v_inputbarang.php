<!-- v_inputbarang.php -->
<?= $this->extend('v_template') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Barang</title>
    <style>
        .container {
            width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            margin-top: 0;
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #462C47;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #000;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Input Barang Baru</h2>

    <form action="/barang/create" method="post" enctype="multipart/form-data">
    <label for="kode">Kode Barang:</label><br>
    <input type="text" id="kode" name="kode"><br>
    <label for="nama_barang">Nama Barang:</label><br>
    <input type="text" id="nama_barang" name="nama_barang"><br>
    <label for="harga">Harga:</label><br>
    <input type="text" id="harga" name="harga"><br>
    <label for="gambar">Upload Gambar:</label><br>
    <input type="file" id="gambar" name="gambar"><br><br>
    <input type="submit" value="Submit">
</form>

</div>

</body>
</html>
<?= $this->endSection() ?>