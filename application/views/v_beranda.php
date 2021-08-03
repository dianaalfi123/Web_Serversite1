<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<!-- Favicons-->
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/assets1/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="<?php echo base_url()?>assets/assets1/css/bootstrap_customized.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/assets1/css/style.css" rel="stylesheet">

    <!-- SPECIFIC CSS -->
    <link href="<?php echo base_url()?>assets/assets1/css/home.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="<?php echo base_url()?>assets/assets1/css/custom.css" rel="stylesheet">
<input type="hidden" name="DETAIL" id="DETAIL" />

 <style type="text/css">
    .bg_gray{
        background: url(<?=base_url('assets/images/slide-01.jpg');?>);
    }
    .list_home{
        background: url(<?=base_url('assets/images/slide-01.jpg');?>);
    }
    
    #item{
        background-color: transparent;
    }
    #item:hover{
        background-color: rgba(0, 0, 0, 0.6);
    }
    .list_home ul li a{
        border-color: transparent;
    }
    #beli{
        background-color: #589442;
        color: white;
    }
</style>
<main>
        <div class="hero_single version_2">
            <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.6)">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-9 col-lg-10 col-md-8">
                            <h1>Discover &amp; Book</h1>
                            <p>The best restaurants at the best price</p>
                            <form method="post" action="grid-listings-filterscol.html">
                                <div class="row no-gutters custom-search-input">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="What are you looking for...">
                                            <i class="icon_search"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input class="form-control no_border_r" type="text" placeholder="Address, neighborhood...">
                                            <i class="icon_pin_alt"></i>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <input type="submit" value="Search">
                                    </div>
                                </div>
                                <!-- /row -->
                            </form>
                        </div>
                    </div>
                    <!-- /row -->
                </div>
            </div>
        </div>
       
    </main>
 <div class="bg_gray">
            <div class="container margin_60_40">
                <div class="main_title center">
                    <span><em></em></span>
                    
                </div>
                <!-- /main_title -->
                <?php 
                $q= 0;
                for($i=$q; $i<count($data); $i++){ 
                $i--; ?>
                <div class="owl-carousel owl-theme categories_carousel">
                    <?php $i++; if(isset($data[$i])){ 
                    $gambar = json_decode($data[$i]->gambar);
                   
                   
                        echo "<div class='item'>
                        <a href='".base_url("home/detail/").$data[$i]->id_produk."'>
                            <img src='http://localhost/majooteknologi/assets/img_produk/".$data[$i]->gambar."' alt='Paris'>
                            <p>".$data[$i]->nama."</p><br>
                            <p>Rp".number_format($data[$i]->harga, 0, ".", ".")."</p>
                            <br>
                            <p>".$data[$i]->deskripsi."</p>
                            <p id='beli'>BELI</p>
                        </a>

                         </div>";
                    
                    
                    }?>
                    <?php $i++; if(isset($data[$i])){ 
                    $gambar = json_decode($data[$i]->gambar);
                   
                    
                    
                        echo "<div class='item'>
                        <a href='".base_url("home/detail/").$data[$i]->id_produk."'>
                            <img src='http://localhost/majooteknologi/assets/img_produk/".$data[$i]->gambar."' alt='Paris'>
                            <p>".$data[$i]->nama."</p><br>
                            <p>Rp".number_format($data[$i]->harga, 0, ".", ".")."</p>
                            <br>
                            <p>".$data[$i]->deskripsi."</p>
                            <p id='beli'>BELI</p>
                        </a>

                         </div>";
                    
                    
                    }?>
                    <?php $i++; if(isset($data[$i])){ 
                    $gambar = json_decode($data[$i]->gambar);
                   
                    
                    
                        echo "<div class='item'>
                        <a href='".base_url("home/detail/").$data[$i]->id_produk."'>
                            <img src='http://localhost/majooteknologi/assets/img_produk/".$data[$i]->gambar."' alt='Paris'>
                            <p>".$data[$i]->nama."</p><br>
                            <p>Rp".number_format($data[$i]->harga, 0, ".", ".")."</p>
                            <br>
                            <p>".$data[$i]->deskripsi."</p>
                            <p id='beli'>BELI</p>
                        </a>

                         </div>";
                    
                    
                    }?>
                    
                </div>
                <?php }?>
                <!-- /carousel -->
            </div>
            <!-- /container -->
        </div>
      
