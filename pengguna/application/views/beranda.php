<style>
    body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

/* NAVBAR */
/* Hover effect: underline animation from left to right */
.navbar-nav .nav-link {
    position: relative;
    display: inline-block;
    text-decoration: none;
}

.nav-link::after {
    content: '';
    position: absolute;
    width: 0;
    height: 2px;
    display: block;
    background: blue;
    transition: width 0.3s ease;
    left: 0;
    bottom: 0;
}

.nav-link:hover::after {
    width: 100%;
}

/* Style for the orange button */
a.btn-orange {
    background-color: orange;
    color: white;
}

a.btn-orange:hover {
    background-color: darkorange;
    /* Ubah warna sesuai preferensi */
    color: white;
    /* Pastikan teks tetap terlihat */
    text-decoration: none;
    /* Opsional: jika ingin menghilangkan garis bawah */
}

/* Adjust margin for fixed navbar */
.mt-navbar {
    margin-top: 80px;
}


/* HERO */
.hero {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #0056b3;
    color: white;
    padding: 50px;
    position: relative;
}

.hero .text {
    font-size: 2rem;
    font-weight: bold;
    max-width: 50%;
    /* Limits the width of the text */
}

.hero img {
    max-width: 40%;
    /* Limits the width of the image */
    height: auto;
}

.hero button {
    background-color: #ff6a00;
    color: white;
    padding: 15px 30px;
    border: none;
    cursor: pointer;
    font-size: 1.2rem;
    margin-top: 20px;
    display: inline-block;
}

.fade {
    opacity: 0;
    transition: opacity 0.5s ease;
}

/* LAYANAN */
.carousel-slider>image-container img {
    max-width: 100%;
    height: auto;
}

.card {
    border: 1px solid #ddd;
    transition: transform 0.3s, box-shadow 0.3s;
    box-shadow: 0px 8px 12px rgba(0, 0, 0, 0.1);
    /* Shadow lembut */
}

.card:hover {
    transform: translateY(-5px);
    /* Tambahkan efek hover */
    box-shadow: 0px 10px 16px rgba(0, 0, 0, 0.2);
    /* Shadow lebih besar saat hover */
}

.card-image img {
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
}

.card-body {
    padding: 15px;
}


/* PENCAPAIAN */
.achievement-section {
    background-color: #0052CC;
    color: white;
}

.circle {
    width: 120px;
    height: 120px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
    font-size: 36px;
}

.achievement-section h2 {
    font-size: 28px;
}

.achievement-section p {
    font-size: 18px;
}

.achievement-item h3 {
    margin: 0;
}


/* TESTIMONI */
@media (max-width: 576px) {
    .carousel-item .col-md-4 {
        display: none;
    }

    .carousel-item .col-md-4:first-child {
        display: block;
        width: 100%;
    }

    .hero {
        margin-top: 50px;
    }
}


/* ALUR BOOKING */
.alur-booking {
    background-image: url('./assets/bg-alur.png');
    /* Sesuaikan dengan gambar latar belakang Anda */
    background-size: cover;
    background-position: center;
    color: white;
}

.alur-booking .alur-card {
    background: rgba(0, 0, 0, 0.3);
    /* Transparan gelap */
    backdrop-filter: blur(2px);
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
    color: white;
}

.alur-booking .alur-number {
    width: 50px;
    height: 50px;
    background: #1a73e8;
    /* Warna biru */
    color: white;
    font-size: 20px;
    font-weight: bold;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 15px;
}

.alur-booking h5 {
    margin-bottom: 10px;
}

.alur-booking p {
    font-size: 14px;
    color: #d1d1d1;
}


/* FOOTER */
.footer-logo {
    max-width: 150px;
    /* Adjust logo size */
}

.footer-title {
    font-size: 1.5rem;
    font-weight: bold;
    margin-top: 20px;
}

.social-icons img {
    width: 30px;
    margin: 0 10px;
    transition: transform 0.3s ease;
}

.social-icons img:hover {
    transform: scale(1.1);
    /* Hover effect for social icons */
}

.text-white {
    color: white;
}

.container {
    padding-top: 20px;
    padding-bottom: 20px;
}
</style> 
 
 <!-- HERO -->
 <div class="hero">
        <div class="text" id="hero-text">
            Temukan Tukang Terbaik Untuk Semua Kebutuhan Renovasi Anda
            <br>
            <button id="booking-button">Booking Sekarang</button>
        </div>
        <img src="./assets/hero.png" alt="Tukang">
    </div>

    <!-- LAYANAN -->
    <section id="layanan" class="container mt-5 text-center">
        <div class="row g-4">
            <h1 class="text-start">Kategori Layanan Kami</h1>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="card h-100 p-3">
                    <div class="card-image">
                        <img src="./assets/interior.png" class="card-img-top" alt="Desain Interior"
                            style="width: 130px;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Layanan Perbaikan & Renovasi</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet
                            consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="card h-100 p-3">
                    <div class="card-image">
                        <img src="./assets/plumbing.png" class="card-img-top" alt="Desain Interior"
                            style="width: 130px;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Layanan Plumbing</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet
                            consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="card h-100 p-3">
                    <div class="card-image">
                        <img src="./assets/elektrikal.png" class="card-img-top" alt="Desain Interior"
                            style="width: 130px;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Layanan Elektrikal</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet
                            consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="card h-100 p-3">
                    <div class="card-image">
                        <img src="./assets/interior.png" class="card-img-top" alt="Desain Interior"
                            style="width: 130px;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Layanan Interior & Furniture</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet
                            consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="card h-100 p-3">
                    <div class="card-image">
                        <img src="./assets/eksterior.png" class="card-img-top" alt="Desain Interior"
                            style="width: 130px;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Layanan Eksterior</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet
                            consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="card h-100 p-3">
                    <div class="card-image">
                        <img src="./assets/pengelasan.png" class="card-img-top" alt="Desain Interior"
                            style="width: 130px;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Layanan Pengelasan & Besi</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet
                            consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="card h-100 p-3">
                    <div class="card-image">
                        <img src="./assets/konstruksi.png" class="card-img-top" alt="Desain Interior"
                            style="width: 130px;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Layanan Khusus Konstruksi</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet
                            consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-6">
                <div class="card h-100 p-3">
                    <div class="card-image">
                        <img src="./assets/dapur.png" class="card-img-top" alt="Desain Interior"
                            style="width: 130px;">
                    </div>
                    <div class="card-body text-center">
                        <h5 class="card-title">Layanan Dapur & Rumah Tangga</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur. Lorem ipsum dolor sit amet
                            consectetur.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- PENCAPAIAN -->
    <section id="pencapaian" class="achievement-section py-5">
        <div class="container text-center">
            <h2 class="mb-5 text-start">
                <span class="fw-bold">Pencapaian</span> <span class="text-warning">CariTukang</span>
            </h2>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-6 mb-5">
                    <div class="achievement-item">
                        <div class="circle bg-warning text-white mb-3">
                            <h3>117+</h3>
                        </div>
                        <p class="text-white">Pekerjaan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6 mb-5">
                    <div class="achievement-item">
                        <div class="circle bg-warning text-white mb-3">
                            <h3>117+</h3>
                        </div>
                        <p class="text-white">Pekerjaan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="achievement-item">
                        <div class="circle bg-warning text-white mb-3">
                            <h3>117+</h3>
                        </div>
                        <p class="text-white">Pekerjaan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-6">
                    <div class="achievement-item">
                        <div class="circle bg-warning text-white mb-3">
                            <h3>117+</h3>
                        </div>
                        <p class="text-white">Pekerjaan</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TESTIMONI -->
    <div id="testimoni" class="container carousel-slider bg-light my-5">
        <div class="row">
            <!-- Left Image Section -->
            <h1><b>Penilaian Mereka</b></h1>
            <h5 class="mb-4">Rating dan Testimoni</h5>
            <div class="col-12 col-md-4 text-center image-container mb-4 mb-md-0">
                <img src="./assets/img-testimoni.png" alt="Placeholder Image" style="width: 400px; height: 400px;">
            </div>

            <!-- Right Slider Section -->
            <div class="col-12 col-md-8">
                <div class="owl-carousel owl-theme owl-testimoni">
                    
                    <div class="item bg-white shadow-sm rounded p-3 text-center">
                        
                        <div class="d-flex align-items-center">
                            <div class="text-center me-3">
                                <img src="./assets/download (1).png" style="width:60px; display: inline;">
                                
                            </div>
                            <div>
                                <h6>2. bjirr</h6>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                        
                        <span class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Saepe, nisi!</span>
                    </div>
                    <div class="item bg-white shadow-sm rounded p-3 text-center">
                        
                        <div class="d-flex align-items-center">
                            <div class="text-center">
                                <img src="./assets/download (1).png" style="width:60px; display: inline;">
                                
                            </div>
                            <div>
                                <h6>3. bjirr</h6>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                        
                        <span class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque enim quod reprehenderit recusandae est laboriosam necessitatibus saepe impedit nostrum similique excepturi illum sint itaque nam quidem debitis, eveniet quas soluta.</span>
                    </div>
                    <div class="item bg-white shadow-sm rounded p-3 text-center">
                        
                        <div class="d-flex align-items-center">
                            <div class="text-center">
                                <img src="./assets/download (1).png" style="width:60px; display: inline;">
                                
                            </div>
                            <div>
                                <h6>4. bjirr</h6>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                        
                        <span class="text-muted">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam fuga ad nihil facere voluptatibus, vero cum officiis iure a, iusto esse enim rerum molestiae qui dicta quam ipsum doloribus, odio ducimus nisi sint dolore amet explicabo. Odit cupiditate adipisci numquam.</span>
                    </div>
                    <div class="item bg-white shadow-sm rounded p-3 text-center">
                        
                        <div class="d-flex align-items-center">
                            <div class="text-center">
                                <img src="./assets/download (1).png" style="width:60px; display: inline;">
                                
                            </div>
                            <div>
                                <h6>5. bjirr</h6>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                        </div>
                        
                        <span class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto soluta voluptatibus nesciunt natus illum fugiat architecto, laborum illo veritatis provident quaerat eveniet repudiandae error quo placeat temporibus delectus sequi. Eligendi iste et fugit, distinctio quaerat eos recusandae nobis, eveniet ad impedit dolorum minima sint. Non provident ipsum aliquid consequatur iste?</span>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>

    <!-- ALUR -->
    <section id="alur" class="alur-booking py-5">
        <div class="container text-center">
            <div class="text-start font-white">
                <h2 class="fw-bold fs-2">Alur Booking Jasa Tukang</h2>
                <p class="fw-normal fs-4">Dengan 3 Langkah Lebih Mudah! Tukang Siap UTIWI</p>
            </div>

            <div class="row g-4 mt-4">
                <div class="col-md-4">
                    <div class="alur-card p-4">
                        <div class="alur-number">1</div>
                        <h5 class="fw-bold">Isi Form Booking</h5>
                        <p>Lorem ipsum dolor sit amet consectetur. At sit morbi porttitor malesuada vestibulum.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="alur-card p-4">
                        <div class="alur-number">2</div>
                        <h5 class="fw-bold">Tunggu Konfirmasi</h5>
                        <p>Lorem ipsum dolor sit amet consectetur. At sit morbi porttitor malesuada vestibulum.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="alur-card p-4">
                        <div class="alur-number">3</div>
                        <h5 class="fw-bold">Tukang OTW</h5>
                        <p>Lorem ipsum dolor sit amet consectetur. At sit morbi porttitor malesuada vestibulum.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script>
        $('.owl-testimoni').owlCarousel({
            loop: true,
            margin: 10,
            dots: true, // Menambahkan titik navigasi
            responsive: {
                0: { items: 1 },
                600: { items: 2 },
                1000: { items: 3 }
            }
        });
    </script>
    <script>
        $(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,1],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:true,
        transitionStyle:"backSlide",
        autoPlay:true
    });
});
    </script>