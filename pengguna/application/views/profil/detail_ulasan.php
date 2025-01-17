<style>

</style>

<div class="container-fluid dashboard-content flex-grow-1">
    <h1 class="mt-4">Ulasan Saya</h1>
    <div class="d-flex justify-content-end mb-3">
        <a href="#" class="btn btn-primary" style="background-color: #024CAA; color: #fff;" id="tambahUlasanBtn">
            <i class="bi bi-plus"></i>
            <span>Tambah Data</span>
        </a>
    </div>
    <div class="col-md-12">
        <?php if (!empty($ulasan)): ?>
            <?php foreach ($ulasan as $item): ?>
                <div class="card">
                    <div class="mx-3 my-3">
                        <div class="rating">
                            <span><?php echo str_repeat('⭐', $item['jumlah_ulasan']); ?></span>
                        </div>
                        <p class="mb-0 text-start">
                            <?php echo htmlspecialchars($item['deskripsi_ulasan']); ?>
                        </p>
                        <small class="text-muted"><?php echo date('d-m-Y', strtotime($item['waktu_ulasan'])); ?></small>
                    </div>
                </div>
                <div class="d-flex btn-card my-3">
                    <a class="btn btn-orange flex-grow-1 me-2 py-2" href="<?php echo base_url('ulasan/ubah/' . $item['id_ulasan']); ?>">Ubah</a>
                    <a class="btn btn-danger flex-grow-1 py-2" href="<?php echo base_url('ulasan/hapus/' . $item['id_ulasan']); ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus ulasan ini?');">Hapus</a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Tidak ada ulasan yang tersedia.</p>
        <?php endif; ?>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#tambahUlasanBtn').on('click', function(e) {
            e.preventDefault(); // Mencegah aksi default  
            // Cek apakah customer sudah memiliki ulasan  
            <?php if ($this->Mulasan->cek_ulasan($this->session->userdata('id_customer'))): ?>
                alert("Anda sudah memiliki ulasan. Hanya diperbolehkan satu ulasan per customer.");
            <?php else: ?>
                window.location.href = "<?php echo base_url('ulasan/tambah'); ?>"; // Redirect ke halaman tambah ulasan  
            <?php endif; ?>
        });
    });
</script>