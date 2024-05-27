<!-- v_barang.php -->
<?= $this->extend('v_template') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        #searchContainer {
            text-align: center;
            margin-bottom: 20px;
        }

        #searchInput {
            padding: 8px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        #searchButton {
            padding: 8px 20px;
            background-color: #28a745; /* Warna hijau */
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        #searchButton:hover {
            background-color: #218838; /* Warna hijau yang sedikit lebih gelap */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            overflow: hidden;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        .action-container {
            display: flex;
            align-items: center;
        }

        .action-button {
            margin-right: 10px;
            padding: 8px 20px;
            background-color: #007bff; /* Warna biru */
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
            display: inline-block;
        }

        .action-button:hover {
            background-color: #0056b3; /* Warna biru yang sedikit lebih gelap */
        }

        .action-button.delete-button {
            background-color: #ff0000; /* Warna merah */
        }

        .action-button.delete-button:hover {
            background-color: #cc0000; /* Warna merah yang sedikit lebih gelap */
        }

        /* Warna abu-abu untuk tombol Edit */
        .action-button.edit-button {
            background-color: #ccc; /* Warna abu-abu */
        }

        .action-button.edit-button:hover {
            background-color: #999; /* Warna abu-abu yang sedikit lebih gelap */
        }
    </style>
</head>
<body>

<h1>Daftar Barang</h1>

<div id="searchContainer">
    <input type="text" id="searchInput" placeholder="Cari nama barang...">
    <button id="searchButton" onclick="searchTable()">Cari</button> <!-- Mengubah teks tombol menjadi "Cari" -->
</div>

<!-- Tombol untuk menambah barang -->
<a href="/barang/tambah" class="action-button" style="background-color: #17a2b8; margin-left: 20px;">Tambah Barang</a>

<table>
    <tr>
        <th>Kode</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($barang as $b) : ?>
        <tr>
            <td><?= $b['kode'] ?></td>
            <td><?= $b['nama_barang'] ?></td>
            <td><?= $b['harga'] ?></td>
            <td class="action-container">
                <form action="/barang/hapus/<?= $b['kode'] ?>" method="post">
                    <button class="action-button delete-button" type="submit">Hapus</button>
                </form>
                <!-- Button Edit -->
                <a href="/barang/edit/<?= $b['kode'] ?>" class="action-button edit-button">Edit</a> <!-- Menambahkan tombol "Edit" -->
                <!-- Button View -->
                <a href="/barang/lihat/<?= $b['kode'] ?>" class="action-button" style="background-color: #ffc107;">Lihat</a> <!-- Mengubah warna tombol "Lihat" menjadi kuning -->
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<script>
    function searchTable() {
        let input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("searchInput");
        filter = input.value.toUpperCase();
        table = document.querySelector("table");
        tr = table.getElementsByTagName("tr");
        for (i = 1; i < tr.length; i++) { // Start loop from index 1 to skip header row
            td = tr[i].getElementsByTagName("td")[1]; // Index 1 corresponds to the column of 'Nama Barang'
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
</script>

</body>
</html>
<?= $this->endSection() ?>