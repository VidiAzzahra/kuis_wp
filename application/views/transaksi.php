<!doctype html>
<html lang="en" class="h-100">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Tiket</title>

    <link rel="canonical" href="index.html">
    <link href="<?= base_url() ?>assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <!-- <link href="<?= base_url() ?>assets/cover.css" rel="stylesheet"> -->
</head>

<body class="d-flex h-100 bg-secondary p-2 text-white bg-opacity-25">
    <div class="container p-4">
        <div class="row">
            <?php foreach ($pesanan as $item) { ?>
                <div class="col m-4">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <center><h5>TIKET PESAWAT</h5>
                            <p>JAKARTA - MALAYSIA</p></center>
                            <hr>
                            <h5 class="card-title">No. Tiket :
                                <?= $item->no_tiket ?>
                            </h5>
                            <p class="card-text">Nama :
                                <?= $item->nama_pemesan ?>
                            </p>
                            <p class="card-text">Nama Pesawat :
                                <?= $item->nama_pesawat ?>
                            </p>
                            <p class="card-text">Kelas :
                                <?= $item->kelas ?>
                            </p>
                            <p class="card-text">Harga Tiket :
                                <?= $item->harga_tiket ?>
                            </p>
                            <p class="card-text">Jumlah Tiket :
                                <?= $item->jml_tiket ?>
                            </p>
                            <p class="card-text">Total Bayar :
                                <?= $item->total_bayar ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
    <script src="<?= base_url() ?>assets/dist/js/bootstrap.min.js"></script>


</body>


</html>