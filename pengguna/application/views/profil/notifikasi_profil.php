<!-- CONTENT -->
<div class="dashboard-content flex-grow-1">
  <h2 class="fw-bold mb-4">Notifikasi</h2>
  <div class="d-flex justify-content-between align-items-center mb-3">
    <div class="d-flex gap-3">
      <button class="btn btn-primary fw-bold shadow" style="Color: #024CAA;">Semua</button>
      <button class="btn bg-white fw-bold shadow">Belum Terbaca</button>
    </div>
    <button class="btn  bg-white fw-bold shadow">Pilih Notifikasi</button>
  </div>
  

  <div class="list-group">
    <!-- Notifikasi dengan Status Proses -->
    <div class="list-group-item d-flex flex-column p-3 mb-2 rounded-3 shadow">
      <div class="d-flex justify-content-between align-items-center">
        <span class="fw-bold">20 Okt 2025</span>
        <span class="badge bg-warning text-dark">Proses</span>
      </div>
      <p class="mb-0 mt-2">
        Tukang kami sedang melaksanakan tugasnya. Tetap tenang, dan tunggu hasil terbaik yang akan segera Anda nikmati! 🔧
      </p>
    </div>

    <!-- Notifikasi dengan Status Selesai -->
    <div class="list-group-item d-flex flex-column p-3 mb-2 rounded-3 shadow">
      <a href="<?php echo base_url('notifikasi/detail_notifikasi'); ?>" style="text-decoration:none; color:black;">
      <div class="d-flex justify-content-between align-items-center">
        <span class="fw-bold">20 Okt 2025</span>
        <span class="badge bg-success">Selesai</span>
      </div>
      <p class="mb-0 mt-2">
        Pekerjaan Anda sudah selesai. Semoga hasilnya sesuai dengan harapan Anda. Terima kasih telah memilih kami!
      </p>
      </a>
    </div>

    <!-- Notifikasi dengan Status Selesai -->
    <div class="list-group-item d-flex flex-column p-3 mb-2 rounded-3 shadow">
      <div class="d-flex justify-content-between align-items-center">
        <span class="fw-bold">20 Okt 2025</span>
        <span class="badge bg-success">Selesai</span>
      </div>
      <p class="mb-0 mt-2">
        Pekerjaan Anda sudah selesai. Semoga hasilnya sesuai dengan harapan Anda. Terima kasih telah memilih kami!
      </p>
    </div>

    <!-- Notifikasi dengan Status Selesai -->
    <div class="list-group-item d-flex flex-column p-3 mb-2 rounded-3 shadow">
      <div class="d-flex justify-content-between align-items-center">
        <span class="fw-bold">20 Okt 2025</span>
        <span class="badge bg-success">Selesai</span>
      </div>
      <p class="mb-0 mt-2">
        Pekerjaan Anda sudah selesai. Semoga hasilnya sesuai dengan harapan Anda. Terima kasih telah memilih kami!
      </p>
    </div>
  </div>
</div>