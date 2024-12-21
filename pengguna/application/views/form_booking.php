  <!-- HERO -->
  <div class="hero text-center py-5" style="background: #024CAA;">
        <div class="row align-items-center py-5">
            <div class="col">
                <div class="text-white text-start p-5" id="hero-text">
                    <h1 class="fw-bold">SIAPKAN MATERIALMU YA!</h1<br>
                    <h3 class="fw-light">PASTIKAN BAHAN-BAHAN UNTUK PENGERJAAN PROYEK SUDAH SIAP YAAA!</h3>
                    <br>
                    <button type="button" class="btn btn-warning mt-2 text-white" style="background-color: #EC8305">Booking Sekarang</button>
                </div>
            </div>
            <div class="col">
            <img src="<?php echo $this->config->item('url_booking'); ?>" width="800px" alt="Tukang">
            </div>
        </div>
    </div>

    <!-- HEADLINE -->
    <div class="text-center mt-3">
        <h1 class="fw-bold">Pendaftaran Boking Tukang</h1>
        <p>Silahkan diisi dengan lengkap.<br>
            jika ada kendala, silahkan hubungi Customer Services di halaman bawah.</p>
    </div>

    <!-- FORM -->
    <div class="container mt-5">
        <h4 class="mb-5 text-center">Silahkan Pilih Keahlian Tukang Anda!</h4>
        
        <form class="needs-validation" novalidate="">
            <div class="row g-3">
                <div class="container">
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
                </div>

                <h4 class="mb-5 text-center">Silahkan Isi Lokasi Perbaikan anda!</h4>
                <div class="col-sm-6">
                    <label for="firstName" class="form-label">Kota/Kabupaten</label>
                    <input type="text" class="form-control" id="firstName" placeholder="Misal : Kabupaten Sleman" value="" required="">
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Kecamatan</label>
                    <input type="text" class="form-control" id="lastName" placeholder="Misal : Kecamatan Depok" value="" required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

                <div class="col-sm-6">
                    <label for="exampleFormControlTextarea1" class="form-label">Alamat Lengkap</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Misal : Jalan Pandega Marta XI No.1, Manggung, Caturtunggal, Kec. Depok, Kab. Sleman, Daerah Istimewa Yogyakarta"></textarea>
                </div>

                <div class="col-sm-6">
                    <label for="lastName" class="form-label">Tanggal Pemesanan</label>
                    <input type="date" class="form-control" id="lastName" placeholder="" value="" required="">
                    <div class="invalid-feedback">
                        Valid last name is required.
                    </div>
                </div>

                <h4 class="mb-3">Fotokan Kendala yang Anda Alami</h4>
                
                <div class="row">
                    <div class="col-sm-2">
                        <img src="./assets/fotokerusakan.png" alt="" style="width: 150px; height: 150px;">
                    </div>
                </div>
                

                <div class="col-sm-12">
                    <h4 for="exampleFormControlTextarea" class="form-label">Deskripsikan Masalah Anda!</h4>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Contoh : AC tidak dingin meskipun sudah dinyalakan lama. Mungkin perlu servis atau pengisian freon."></textarea>
                </div>

            </div>


            <button class="w-100 btn btn-primary btn-lg my-5"  type="submit" style="background-color: #024CAA">Booking</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>