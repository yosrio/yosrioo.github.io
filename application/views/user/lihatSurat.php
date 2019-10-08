<!-- Begin Page Content -->
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

	<div class="row">
		<div class="col-lg">
			<table class="table">
				<thead>
					<tr>
						<th scope="col">No</th>
						<th scope="col">No Surat Masuk</th>
						<th scope="col">Pengirim</th>
						<th scope="col">Tujuan Surat</th>
						<th scope="col">Perihal</th>
						<th scope="col">Sifat Surat</th>
						<th scope="col"></th>
					</tr>
				</thead>
				<tbody>
					<?php $i = 1; ?>
					<?php foreach($menu as $sm) : ?>
						<?php if (empty($sm['disposisi'])): ?>
							<tr>
								<th scope="row"><?= $i; ?></th>
								<td><?= $sm['no_surat_masuk']; ?></td>
								<td><?= $sm['pengirim']; ?></td>
								<td><?= $sm['tujuan']; ?></td>
								<td><?= $sm['perihal']; ?></td>
								<td><?= $sm['sifat_surat']; ?></td>
								<div>
									<td><button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-teal">Konfirmasi</button>

										<div id="id01" class="w3-modal w3-animate-opacity">
											<div class="w3-modal-content w3-card-4" style="max-width: 50%">
												<span onclick="document.getElementById('id01').style.display='none'" 
												class="w3-button w3-large w3-display-topright w3-red">&times;</span>
												<form method="post" action="<?= base_url('surat/disposisi'); ?>">
													<div class="w3-container">
														<br>
														<label>Keterangan</label>
														<textarea class="w3-input w3-border" id="keterangan" name="keterangan" rows="4" cols="20"></textarea>
													</div>
													<br>
													<div class="col w3-container">
														<select class="w3-select" name="option" style="max-width: 15%">
															<option value="" disabled selected>Konfirmasi</option>
															<option value="terima">Terima</option>
															<option value="tolak">Tolak</option>
														</select>
													</div>
													<hr>
													<div class="col w3-container">
														<button type="submit" name="submit" value="Enter" class="w3-col w3-button w3-block w3-teal" style="max-width:25%">SIMPAN</button>
													</div>
												</form>
												<br>
											</div>
										</div>
									</td>
								</tr>
								<?php $i++; ?>
							<?php endif ?>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>