<!doctype html>
<html lang="en">

<head>

	<title><?= $title; ?></title>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
	<link rel="shortcut icon" href="upload/logo.png">

	<!-- Global style START -->
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/surat/css/materialize.css'); ?>">
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/surat/css/jquery-ui.css'); ?>">
	<link type="text/css" rel="stylesheet" href="<?= base_url('assets/surat/css/masuk.css'); ?>">
	<!-- Global style END -->
	<style>

</style>
</head>

<!-- Body START -->
<body class="bg">
	<!-- Main START -->
	<main>
		<!-- container START -->
		<div class="container">

			<!-- Row Start -->
			<div class="row">
				<!-- Secondary Nav START -->
				<div class="col s12">
					<nav class="secondary-nav">
						<div class="nav-wrapper blue-grey darken-1">
							<ul class="left">
								<li class="waves-effect waves-light"><a href="#" class="judul"><i class="material-icons">mail</i> Tambah Surat Masuk</a></li>
							</ul>
						</div>
					</nav>
				</div>
				<!-- Secondary Nav END -->
			</div>
			<!-- Row END -->

			<!-- Row form Start -->
			<div class="row jarak-form">

				<!-- Form START -->
				<form class="col s12" method="post" action="<?= base_url('surat/surat_Masuk'); ?>">
					<?= $this->session->flashdata('message'); ?>
					<!-- Row in form START -->
					<div class="row">
						<div class="input-field col s6">
							<i class="material-icons prefix md-prefix">date_range</i>
							<input id="tgl_surat" type="text" name="tgl_surat" class="datepicker" value="<?= set_value('tgl_surat') ?>" required>
							<label for="tgl_surat">Tanggal Surat</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix md-prefix">place</i>
							<input id="tujuan" type="text" class="validate" name="tujuan" value="<?= set_value('tujuan') ?>" required>
							<label for="tujuan">Tujuan</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix md-prefix">people</i>
							<input id="penerima" type="text" class="validate" name="penerima" value="<?= set_value('penerima') ?>" required>
							<label for="penerima">Penerima</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix md-prefix">looks_one</i>
							<input id="noSuratMasuk" type="text" class="validate" name="noSuratMasuk" value="<?= set_value('noSuratMasuk') ?>" required>
							<label for="noSuratMasuk">Nomor Surat Masuk</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix md-prefix">people</i>
							<input id="pengirim" type="text" class="validate" name="pengirim" value="<?= set_value('pengirim') ?>" required>
							<label for="pengirim">Pengirim</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix md-prefix">featured_play_list</i>
							<input id="perihal" type="text" class="validate" name="perihal" value="<?= set_value('perihal') ?>" required>
							<label for="perihal">Perihal</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix md-prefix">description</i>
							<input id="keterangan" type="text" class="validate" name="keterangan" value="<?= set_value('keterangan') ?>" required>
							<label for="keterangan">Keterangan</label>
						</div>
						<div class="input-field col s6">
							<i class="material-icons prefix md-prefix">warning</i>
							<input id="sifatSurat" type="text" class="validate" name="sifatSurat" value="<?= set_value('sifatSurat') ?>" required>
							<label for="sifatSurat">Sifat Surat (Urgent/Biasa)</label>
						</div>
						<!-- <div class="input-field col s6">
							<div class="file-field input-field">
								<div class="btn light-green darken-1">
									<span>File</span>
									<input type="file" id="file" name="file">
								</div>
								<div class="file-path-wrapper">
									<input class="file-path validate" type="text" placeholder="Upload file/scan gambar surat masuk">
									<small class="red-text">*Format file yang diperbolehkan *.JPG, *.PNG, *.DOC, *.DOCX, *.PDF dan ukuran maksimal file 2 MB!</small>
								</div>
							</div>
						</div> -->
					</div>
					<!-- Row in form END -->

					<div class="row">
						<div class="col 6">
							<button type="submit" name="submit" class="btn-large blue waves-effect waves-light">SIMPAN <i class="material-icons">done</i></button>
						</div>
						<div class="col 6">
							<a href="<?= base_url('User/surat'); ?>" class="btn-large deep-orange waves-effect waves-light">BATAL <i class="material-icons">clear</i></a>
						</div>
					</div>

				</form>
				<!-- Form END -->

			</div>
			<!-- Row form END -->

		</div>
		<!-- container END -->

	</main>
	<!-- Main END -->

	<!-- Javascript START -->
	<script>
	</script>
	<script type="text/javascript" src="<?= base_url('assets/surat/js/jquery-2.1.1.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/surat/js/materialize.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/surat/js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?= base_url('assets/surat/js/jquery.autocomplete.min.js'); ?>"></script>
	<script data-pace-options='{ "ajax": false }' src='<?= base_url('assets/surat/js/pace.min.js');?>'></script>
	<script type="text/javascript" src="<?= base_url('assets/surat/js/masuk.js'); ?>"></script>
	<!-- Javascript END -->
</body>
<!-- Body END -->

</html>

