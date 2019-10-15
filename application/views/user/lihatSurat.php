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
						<?php if ($role['role'] == 'Keuangan'): ?>
							<th scope="col">Tanggal Masuk</th>
							<th scope="col">Penerima</th>
							<th scope="col">Disposisi</th>
							<th scope="col">Status</th>
							<?php else: ?>
								<th scope="col">Sifat Surat</th>
							<?php endif; ?>
							<th scope="col"></th>
							<th scope="col"></th>
						</tr>
					</thead>
					<tbody>
						<?php if ($role['role'] == 'Keuangan'): ?>
							<?php $i = 1; ?>
							<?php foreach($menu2 as $sm) : ?>
								<tr>
									<th scope="row"><?= $i; ?></th>
									<td><?= $sm['no_surat_masuk']; ?></td>
									<td><?= $sm['pengirim']; ?></td>
									<td><?= $sm['tujuan']; ?></td>
									<td><?= $sm['perihal']; ?></td>
									<td><?= $sm['tanggal_masuk']; ?></td>
									<td><?= $sm['penerima']; ?></td>
									<td><?= $sm['disposisi']; ?></td>
									<td><?= $sm['status']; ?></td>
									<?php if (!empty($sm['disposisi'])): ?>
										<td>
											<form method="post" action="<?= base_url('surat/laporan')?>">
												<button type="w3-input" name="noUrut" id="noUrut" value="<?= $sm['no_urut']; ?>" class="w3-button w3-teal">print PDF</button>
											</form>
										</td>
									<?php endif; ?>
								</tr>
								<?php $i++; ?>
							<?php endforeach; ?>
							<?php else: ?>
								<?php $i = 1; ?>
								<?php foreach($menu as $sm) : ?>
									<?php if (empty($sm['disposisi'])): ?>
										<?php $a = $sm['no_urut']; ?>
										<?php if ($sm['sifat_surat'] == 'Penting'): ?>
											<tr style="background-color: red; color: white;">
												<?php else: ?>
													<tr>
													<?php endif ?>
													<th scope="row"><?= $i; ?></th>
													<td><?= $sm['no_surat_masuk']; ?></td>
													<td><?= $sm['pengirim']; ?></td>
													<td><?= $sm['tujuan']; ?></td>
													<td><?= $sm['perihal']; ?></td>
													<td><?= $sm['sifat_surat']; ?></td>
													<td>
														<a onclick="document.getElementById('id0<?= $i; ?>').style.display='block'"  class="w3-button w3-teal">Konfirmasi</a>
														<!-- <a href="<?= base_url('surat/laporanpdf'.$a); ?>" class="w3-button w3-teal">Print PDF</a> -->
														<div id="id0<?= $i; ?>" class="w3-modal w3-animate-opacity">
															<div class="w3-modal-content w3-card-4" style="max-width: 50%">
																<span onclick="document.getElementById('id0<?= $i; ?>').style.display='none'" class="w3-button w3-large w3-display-topright w3-red">&times;</span>
																<!-- <label><?= $a; ?></label> -->
																<form method="post" action="<?= base_url('surat/disposisi')?>">
																	<input type="text" name="noUrut" id="noUrut" value="<?= $a; ?>" hidden="">
																	<div class="w3-container">
																		<br>
																		<label>Keterangan</label>
																		<textarea class="w3-input w3-border" id="keterangan" name="keterangan" rows="4" cols="20"></textarea>
																	</div>
																	<br>
																	<div class="col w3-container">
																		<!-- <input class="w3-input" type="text" id="status" name="status" value="<?= set_value('status') ?>"> -->
																		<select class="w3-select" name="status" id="status" style="max-width: 15%">
																			<option value="" disabled selected>Konfirmasi</option>
																			<option value="terima">Terima</option>
																			<option value="tolak">Tolak</option>
																		</select>
																	</div>
																	<hr>
																	<div class="col w3-container">
																		<button type="submit" name="submit" value="Enter" class="w3-col w3-button w3-block w3-teal" style="max-width:25%" >SIMPAN</button>
																	</div>
																</form>
																<br>
															</div>
														</td>
													</tr>
													<?php $i++; ?>
												<?php endif ?>
											<?php endforeach; ?>
										<?php endif ?>
									</tbody>
								</table>
							</div>
						</div>
					</div>