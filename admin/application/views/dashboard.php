<div class="p-3">  
    <h2>Hi, admin</h2>  
    <p class="lead">Selamat Datang di dashboard admin CariTukang</p>  
    <hr>  
  
    <div class="row">  
        <div class="col-lg-6 col-12">  
            <div class="small-box bg-info">  
                <div class="inner">  
                    <h3><?php echo $total_bookings; ?></h3>  
                    <p>Total booking</p>  
                </div>  
                <div class="icon">  
                    <i class="fas fa-shopping-cart"></i>  
                </div>  
                <a href="<?php echo base_url('booking') ?>" class="small-box-footer">  
                    More info <i class="fas fa-arrow-circle-right"></i>  
                </a>  
            </div>  
        </div>  
  
        <div class="col-lg-6 col-12">  
            <div class="small-box bg-gradient-success">  
                <div class="inner">  
                    <h3><?php echo $total_mitra; ?></h3>  
                    <p>Daftar sebagai tukang</p>  
                </div>  
                <div class="icon">  
                    <i class="fas fa-user-plus"></i>  
                </div>  
                <a href="<?php echo base_url('mitra') ?>" class="small-box-footer">  
                    More info <i class="fas fa-arrow-circle-right"></i>  
                </a>  
            </div>  
        </div>  
    </div>  
</div>  
