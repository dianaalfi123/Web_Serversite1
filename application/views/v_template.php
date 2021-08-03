<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Majoo Teknologi Indonesia</title>

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/templatemo-breezed.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl-carousel.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/lightbox.css')?>">

    </head>
            
</style>
    <body>
    <header class="header clearfix element_to_stick">
        <div class="container">
        <div id="logo">
            <a href="index.html">
                Majoo Teknologi Indonesia
            </a>
        </div>
        <ul id="top_menu">
            <li><a style="color: #589442" href="#sign-in-dialog" id="sign-in" class="login">Sign In</a></li>
        </ul>
        <!-- /top_menu -->
        <a href="#0" class="open_close">
            <i class="icon_menu" ></i><span>Menu</span>
        </a>
        <nav class="main-menu">
            <div id="header_menu">
                <a href="#0" class="open_close">
                    <i class="icon_close"></i><span>Menu</span>
                </a>
                <a href="index.html"><img src="<?=base_url()?>assets/assets1/img/logo.svg" width="20" height="20" alt=""></a>
            </div>
            <ul class="nav">
                            <li class="scroll-to-section"><a href="" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="" class="active">Keranjang</a></li>
                            <li class="scroll-to-section"><a href="" class="active">Konfirmasi Pembayaran</a></li>
                            <?php if($this->session->userdata('status')){?>
                            <div>
                               
                                <li style='' class="submenu">
                                <div class="pull-left image">
                                  <img width="30" height="30" src="<?=base_url()?>assets/images/service-item-01.png" class="img-circle" alt="User Image">
                                </div>
                                <ul>
                                    <li><a href="">Profile</a></li>
                                    <li><a href="">Setting</a></li>
                                    <li><a href="<?=base_url('login/do_logout')?>">Logout</a></li>

                                </ul>
                                
                                </li>
                             
                            </div>
                        <?php }?>
        </nav>
    </div>
    </header>


    <?php $this->load->view($view); ?>

    <footer style="padding: 10px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-xs-12">
                    <div class="left-text-content">
                        <p>2021 &copy; PT Majoo Teknologi Indonesia.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><p>Follow Us</p></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-facebook"></i></a></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-twitter"></i></a></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-linkedin"></i></a></li>
                                <li><a rel="nofollow" href="https://fb.com/templatemo"><i class="fa fa-dribbble"></i></a></li>
                            </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/js/jquery-2.1.0.min.js')?>"></script>

    <!-- Bootstrap -->
    <script src="<?php echo base_url('assets/js/popper.js')?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>

    <!-- Plugins -->
    <script src="<?php echo base_url('assets/js/owl-carousel.js')?>"></script>
    <script src="<?php echo base_url('assets/js/scrollreveal.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/waypoints.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.counterup.min.js')?>"></script>
    <script src="<?php echo base_url('assets/js/imgfix.min.js')?>"></script> 
    <script src="<?php echo base_url('assets/js/slick.js')?>"></script> 
    <script src="<?php echo base_url('assets/js/lightbox.js')?>"></script> 
    <script src="<?php echo base_url('assets/js/isotope.js')?>"></script> 
    
    <!-- Global Init -->
    <script src="<?php echo base_url('assets/js/custom.js')?>"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>