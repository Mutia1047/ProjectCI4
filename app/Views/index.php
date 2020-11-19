<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Komunitas Baca</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
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
						<a class="nav-link" href="<?= base_url('dasbor') ?>">Dashboard</a>
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

	<header class="jumbotron text-center">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="h1">Selamat Datang</h1>
					<p class="p">Tingkatkan Skill Baca Kamu Dengan Mengikuti Komunitas Ini</p>
				</div>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">One Week One Book</h5>
					<p>ini adalah salah satu bagian dari usaha mengajak teman-teman untuk membaca minimal satu buku satu minggu dalam menyerukan gerakan literasi. 
					Biar banyak readers lain yang ikut serta membaca sampai habis dan mengulasnya.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Desa Literasi</h5>
					<p>Gagasan tentang desa Literasi adalah satu usaha kecil di level daerah, dalam skup yang terjangkau agar mudah dioperasionalkan dalam bentuk kegiatan kegiatan praktis. 
					Tujuannya adalah agar capaian dan target bisa terukur, mudah dievaluasi dan dilakukan perbaikan. Membangun Indonesia Dari Kampoeng Halaman</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Book Buster</h5>
					<p>BOOKBUSTER adalah program yang bertujuan untuk mengatasi kesenjangan akses terhadap buku bacaan, terutama bagi anak anak dan remaja di pelosok daerah. 
					Dengan kata lain, program ini memiliki misi pemerataan penyebaran buku di masyarakat.</p>
				</div>
			</div>
			<div class="col-md-12 my-2 card">
				<div class="card-body">
					<h5 class="h5">Wisata Rumah Baca</h5>
					<p>komunitas ini sedang dalam proses menyiapkan paket kegiatan baru bernama WISATA RUMAH BACA. Sejenis paket kunjungan atau perjalanan yang berkonten pendidikan dan pelatihan didesain untuk pengunjung berbagai kategori umur dan kebutuhan, dari pelajar hingga professional.
					Program ini disiapkan agar Program Kepariwisataan tidak melulu berbicara Hiburan dan Belanja, namun juga Wawasan dan Pengalaman.</p>
				</div>
			</div>
		</div>
	</div>

	<footer class="jumbotron jumbotron-fluid mt-5 mb-0">
		<div class="container text-center">Copyright &copy <?= Date('Y') ?> Komunitas Baca</div>
	</footer>

	<!-- Jquery dan Bootsrap JS -->
	<script src="<?= base_url('js/jquery.min.js') ?>"></script>
	<script src="<?= base_url('js/bootstrap.min.js') ?>"></script>

</body>

</html>