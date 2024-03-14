<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?= $data['judul']; ?></title>
    <link rel="stylesheet" href="<?= BASE_URL; ?>/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="<?= BASE_URL; ?>">SMAN 1 Otak Kanan</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav ml-auto">
				<a class="nav-item nav-link active" href="<?= BASE_URL; ?>">Home <span class="sr-only">(current)</span></a>
				<a class="nav-item nav-link" href="<?= BASE_URL; ?>/siswa">Siswa</a>
				<a class="nav-item nav-link" href="<?= BASE_URL; ?>/kelas">Kelas</a>
			</div>
		</div>
	</div>
</nav>