         
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<form class="w3-container" method="post" action="<?= base_url('surat/tambahSuratMasuk'); ?>">
		<?= $this->session->flashdata('message'); ?>
			<div style="max-width: 45%;" class="w3-col">
				<p>
					<label>Tanggal Surat</label>
					<input class="w3-input" type="date" id="tgl_surat" name="tgl_surat" value="<?= set_value('tgl_surat') ?>">
				</p>

				<p>
					<label>Tujuan</label>
					<input class="w3-input" type="text" id="tujuan" name="tujuan" value="<?= set_value('tujuan') ?>">
				</p>

				<p>
					<label>Penerima</label>
					<input class="w3-input" type="text" id="penerima" name="penerima" value="<?= set_value('penerima') ?>">
				</p>
				<p>
					<label>Sifat Surat:</label>
					<input class="w3-radio" type="radio" id="sifatSurat" name="sifatSurat" value="Penting" checked>
					<label class="w3-validate">Penting</label>

					<input class="w3-radio" type="radio" id="sifatSurat" name="sifatSurat" value="Biasa">
					<label class="w3-validate">Biasa</label>

				</p>
			</div>

			<div style="max-width: 45%;" class="w3-col w3-margin-left">
				<p>
					<label>Nomor Surat Masuk</label>
					<input class="w3-input" type="text" id="noSuratMasuk" name="noSuratMasuk" value="<?= set_value('noSuratMasuk') ?>">
				</p>

				<p>
					<label>Perihal</label>
					<input class="w3-input" type="text" id="perihal" name="perihal" value="<?= set_value('perihal') ?>">
				</p>
				<p>
					<label>Pengirim</label>
					<input class="w3-input" type="text" id="pengirim" name="pengirim" value="<?= set_value('pengirim') ?>">
				</p>
			</div>
			<button type="submit" name="submit" value="Enter" class="w3-col w3-button w3-block w3-teal" style="max-width:25%">SIMPAN</button>
			<button class="w3-col w3-button w3-block w3-red w3-margin-left" onclick="window.location.href='<?= base_url('surat'); ?>'" style="max-width:25%">BATAL</button>
	</form>
</div>