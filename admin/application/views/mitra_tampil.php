<div class="container mt-4 mb-4">
	<h5>Data mitra</h5>
	<table class="table table-bordered" id="tableku">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Usia</th>
				<th>No HP</th>
				<th>Alamat Lengkap</th>
				<th>Kabupaten/Kota</th>
				<th>Kecamatan</th>
				<th>Pengalaman</th>
				<th>Peran</th>
				<th>Keahlian</th>
				<!-- <th>Opsi</th> -->
			</tr>
		</thead>
		<tbody>

			<?php foreach ($mitra as $key => $value) : ?>
				<tr>
					<td><?php echo $key + 1 ?></td>
					<td><?php echo $value['nama_mitra'] ?></td>
					<td><?php echo $value['usia_mitra'] ?> Tahun</td>
					<td><?php echo $value['wa_mitra'] ?></td>
					<td><?php echo $value['alamat_lengkap'] ?></td>
					<td><?php echo $value['kabupaten/kota'] ?></td>
					<td><?php echo $value['kecamatan'] ?></td>
					<td><?php echo $value['pengalaman_mitra'] ?> Tahun</td>
					<td><?php echo $value['nama_peran'] ?></td>
					<td><?php echo $value['nama_keahlian'] ?></td>
					<!-- <td>
						<a href="<?php echo base_url("mitra/detail/" . $value['id_mitra']) ?>" class="btn btn-primary">Opsi</a>
					</td> -->
				</tr>
			<?php endforeach ?>

		</tbody>
	</table>
</div>