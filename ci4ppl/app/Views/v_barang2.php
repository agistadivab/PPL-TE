<?= $this->extend('v_template') ?>

<?= $this->section('content') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
    <!-- Link ke Bootstrap CSS -->
    <style>
    .pager {
        text-align: center;
        margin-top: 20px;
    }

    .pager .pagination li {
        display: inline-block;
        margin-right: 5px;
    }

    .pager .pagination li a {
        display: inline-block;
        padding: 8px 16px;
        border: 1px solid #ccc;
        background-color: #fff;
        color: #333;
        text-decoration: none;
        border-radius: 5px;
    }

    .pager .pagination li.active a {
        background-color: #5B6063;
        color: #fff;
    }

    .pager .pagination li a:hover {
        background-color: #f0f0f0;
    }
</style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h2 class="mt-4">Daftar Barang</h2>

    <div class="row mb-3">
        <div class="col-md-6">
            <div class="input-group">
                <input type="text" class="form-control" id="searchInput" placeholder="Cari nama barang...">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button" onclick="searchTable()">Cari</button>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <a href="/barang/tambah" class="btn btn-dark">Tambah Barang</a>
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barang as $b) : ?>
                <tr>
                    <td><?= $b['kode'] ?></td>
                    <td><?= $b['nama_barang'] ?></td>
                    <td><?= $b['harga'] ?></td>
                    <td>
                        <?php if (!empty($b['gambar'])) : ?>
                            <img src="<?= base_url('upload/' . $b['gambar']) ?>" alt="Gambar Barang" style="max-width: 100px; max-height: 100px;">
                        <?php else : ?>
                            Tidak ada gambar tersedia
                        <?php endif; ?>
                    </td>
                    <td>
                        <a href="/barang2/lihat/<?= $b['kode'] ?>" class="btn btn-secondary">Lihat</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Link Pagination -->
    <div class="pager">
        <?= $pager->links() ?>
    </div>

</div>

<!-- Link ke Bootstrap JS (optional jika Anda membutuhkannya) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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
