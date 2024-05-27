<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header style="text-align: center; padding: 20px; background-color: #333; color: #fff;">
        <h1>Header</h1>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('home') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('info') ?>">Info</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('barang2') ?>">Barang</a>
                    </li>
                </ul>
                <!-- Form untuk logout -->
                <form class="form-inline my-2 mr-3 my-lg-0" action="<?= base_url('auth/logout') ?>" method="post">
                    <button class="btn btn-outline-danger my-2 my-sm-0" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="content">
            <?= $this->renderSection('content') ?>
        </div>
    </div>
    <footer style="text-align: center; padding: 10px; background-color: #333; color: #fff;">
        Footer
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
