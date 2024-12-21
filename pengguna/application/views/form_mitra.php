    <!-- HERO -->
    <div class="hero_mitra text-center" style="background: #024CAA;">
        <div class="row align-items-center">
            <div class="col-md-5">
                <img src="<?php echo $this->config->item('url_mitra'); ?>" alt="Tukang">
            </div>
            <div class="col-md-6">
                <div class="text-end text-white fw-bold mx-5" id="hero-text">
                    <h1>
                        <h1>
                            <span style="color: white;">BERSAMA</span>
                            <span style="color: orange;">CARITUKANG</span><span style="color: white;">,</span> <br>
                            <span style="color: white;">DAPATKAN PELANGGAN LEBIH </span><br>
                            <span style="color: white;">BANYAK!</span>
                        </h1>

                    </h1>
                    <br>
                    <button type="button" class="btn btn-warning mt-2 text-white" style="background-color: #EC8305">Gabung Sekarang</button>
                </div>
            </div>
        </div>
    </div>

    <!-- HEADLINE -->
    <div class="text-center mt-3">
        <h1>Pendaftaran Mitra CariTukang</h1>
        <p>Silahkan diisi dengan lengkap para mitra CariTukang. <br>
            jika ada kendala, silahkan hubungi Customer Services di halaman bawah.</p>
    </div>

    <!-- FORM -->
    <div class="container mt-5">
        <h3 class="mb-3 text-center">Data Diri</h3>
        <form class="needs-validation" novalidate="" method="post">
            <div class="row g-3">
                <div class="col-sm-12">
                    <label for="firstName" name='nama_mitra' class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="firstName" placeholder="Misal : Abdul Aziz" value=""
                        required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="firstName" class="form-label">Nomor Telepon</label>
                    <input type="number" name='wa_mitra' class="form-control" id="firstName"
                        placeholder="Inputkan Nomor yang bisa Dihubungi lewat WA" value="" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Usia</label>
                    <input type="number" name='usia_mitra' class="form-control" id="lastName" placeholder="Misal : 31 Tahun" value=""
                        required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

                <div class="col-sm-12">
                    <label for="firstName" class="form-label">Alamat Lengkap</label>
                    <input type="text" name='nama_mitra' class="form-control" id="firstName"
                        placeholder="Misal : Jalan Pandega Marta XI No.1, Manggung, Caturtunggal, Kec. Depok, Kab. Sleman, Daerah Istimewa Yogyakarta"
                        value="" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="firstName" class="form-label">Kota/Kabupaten</label>
                    <input type="text" name='kabupaten/kota' class="form-control" id="firstName" placeholder="Misal : Kabupaten Sleman"
                        value="" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Kecamatan</label>
                    <input type="text" name='kecamatan' class="form-control" id="lastName" placeholder="Misal : Kecamatan Depok" value=""
                        required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

                <h4 class="mt-5 mb-1 text-center">Data Pekerjaan</h4>

                <div class="col-sm-6">
                    <label for="firstName" class="form-label">Peran/Profesi Tukang</label>
                    <select class="form-control mb-3" name="id_peran" required>
                        <option value="">Pilih Peran</option>
                        <?php foreach ($peran as $p): ?>
                            <option value="<?php echo $p['id_peran']; ?>">
                                <?php echo $p['nama_peran']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="col-sm-6">
                    <label for="lastName" name='pengalaman_mitra' class="form-label">Pengalaman menjadi Tukang</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Misal : 5 Tahun" value=""
                        required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

                <h4 class="mt-5 mb-3 text-center">Keahlian Khusus</h4>

                <form action="<?php echo base_url('mitra'); ?>" method="post">
                    <label for="keahlian">Pilih Keahlian (Maks 3):</label>
                    <select id="keahlian" name="keahlian[]" multiple class="form-control" required>
                        <?php foreach ($keahlian as $k): ?>
                            <option value="<?php echo $k['id_keahlian']; ?>">
                                <?php echo $k['nama_keahlian']; ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                </form>

                <!-- <div class="container">
                    <div class="row">
                        <div class="col-md-3">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangCat">
                                <label class="form-check-label" for="tukangCat">
                                    Tukang Cat
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangKeramik">
                                <label class="form-check-label" for="tukangKeramik">
                                    Tukang Keramik
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangDinding">
                                <label class="form-check-label" for="tukangDinding">
                                    Tukang Dinding
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangPlafon">
                                <label class="form-check-label" for="tukangPlafon">
                                    Tukang Plafon
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangToilet">
                                <label class="form-check-label" for="tukangToilet">
                                    Tukang Toilet
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangPipa">
                                <label class="form-check-label" for="tukangPipa">
                                    Tukang Pipa
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangSumur">
                                <label class="form-check-label" for="tukangSumur">
                                    Tukang Sumur
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangListrik">
                                <label class="form-check-label" for="tukangListrik">
                                    Tukang Listrik
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangAC">
                                <label class="form-check-label" for="tukangAC">
                                    Tukang AC
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangKayu">
                                <label class="form-check-label" for="tukangKayu">
                                    Tukang Kayu
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangPintuJendela">
                                <label class="form-check-label" for="tukangPintuJendela">
                                    Tukang Pintu/Jendela
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangKusen">
                                <label class="form-check-label" for="tukangKusen">
                                    Tukang Kusen
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangTaman">
                                <label class="form-check-label" for="tukangTaman">
                                    Tukang Taman
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangPaving">
                                <label class="form-check-label" for="tukangPaving">
                                    Tukang Paving
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangKanopi">
                                <label class="form-check-label" for="tukangKanopi">
                                    Tukang Kanopi
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangBesi">
                                <label class="form-check-label" for="tukangBesi">
                                    Tukang Besi
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangLas">
                                <label class="form-check-label" for="tukangLas">
                                    Tukang Las
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangAtap">
                                <label class="form-check-label" for="tukangAtap">
                                    Tukang Atap
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangBatu">
                                <label class="form-check-label" for="tukangBatu">
                                    Tukang Batu
                                </label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="tukangDapur">
                                <label class="form-check-label" for="tukangDapur">
                                    Tukang Dapur
                                </label>
                            </div>

                        </div>
                    </div>
                    <span>
                        <p class="text-muted">*bisa memilih lebih dari 1 keahlian</p>
                    </span>
                </div> -->
            </div>


            <button class="w-100 btn btn-primary btn-lg my-5" type="submit" style="background-color: #EC8305">Daftar menjadi Mitra</button>
        </form>
    </div>
    <script>
        const selectElement = document.getElementById('keahlian');
        const maxSelection = 3;

        selectElement.addEventListener('change', function() {
            const selectedOptions = Array.from(selectElement.selectedOptions);
            if (selectedOptions.length > maxSelection) {
                alert(`Maksimal hanya ${maxSelection} pilihan!`);
                selectedOptions[selectedOptions.length - 1].selected = false; // Batalkan pilihan terakhir
            }
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>