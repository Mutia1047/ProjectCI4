<!DOCTYPE html>
<html>
<head>
	<title>Informasi Kepengurusan</title>
	<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>		
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>"><strong>Komunitas Baca</strong></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                     <li class="nav-item">
					    <a class="nav-link" href="<?= base_url('admin') ?>">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('about') ?>">Tentang Komunitas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('login') ?>">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('register') ?>">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('detail') ?>">Informasi Kepengurusan</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1">Daftar Kepengurusan</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container">
		<ul class="list-group">
        <div class="row">
            <div class="col-md-12">
                <?php foreach ($data_pengurus as $detail) : ?>
                    <h2 class="h2"><?= $detail['siapa'] ?></h2>
                    <p><?= $detail['apa'] ?></p>
                <?php endforeach; ?>
            </div>
        </div>
        </ul>
    </div>
    
    <footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Copyright &copy <?= Date('Y') ?> Komunitas Baca</div>
	</footer>

</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>