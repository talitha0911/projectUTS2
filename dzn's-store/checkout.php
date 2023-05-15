<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dzn's store</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cookie&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__close">+</div>
        <ul class="offcanvas__widget">
            <li><span class="icon_search search-switch"></span></li>
            <li><a href="#"><span class="icon_heart_alt"></span>
                <div class="tip">2</div>
            </a></li>
            <li><a href="#"><span class="icon_bag_alt"></span>
                <div class="tip">2</div>
            </a></li>
        </ul>
        <div class="offcanvas__logo">
            <a href="./admint.php"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__auth">
            <a href="/login.php">Login</a>
            <a href="/login.php">Register</a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-lg-2">
                    <div class="header__logo">
                        <a href="./admint.php"><img src="img/logo3.png" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <nav class="header__menu">
    
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__right">
                        <div class="header__right__auth">
                            <a href="./login.php">Login</a>
                        </div>
                        <ul class="header__right__widget">
                            <li><span class="icon_search search-switch"></span></li>
                            </a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__links">
                        <a href="./index.html"><i class="fa fa-home"></i> Home</a>
                        <span>Shopping cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
        <?php 
        require_once 'dbkoneksi.php';
        ?>
            <form method="POST" action="proses_pelanggan.php">
                <div class="row">
                    <div class="col-lg-8">
                        <h5>Form_Pembelian</h5>
                        <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-5">
                                <div class="checkout__form__input">
                                    <p>Kode <span>*</span></p>
                                    <input id="kode" name="kode" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <div class="checkout__form__input">
                                    <p>Tanggal <span>*</span></p>
                                    <input id="tanggal" name="tanggal" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="checkout__form__input">
                                    <p>Nama_pemesan <span>*</span></p>
                                    <input id="nama" name="nama" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="checkout__form__input">
                                    <p>alamat_pemesan <span>*</span></p>
                                    <input id="alamat" name="alamat" type="text" class="form-control">
                                </div>
                                <div class="checkout__form__input">
                                    <p>no_hp <span>*</span></p>
                                    <input id="no_hp" name="no_hp" type="text" class="form-control">
                                </div>
                                <div class="checkout__form__input">
                                    <p>email <span>*</span></p>
                                    <input id="email" name="email" value=""
                                        type="email" class="form-control">
                                </div>
                                <div class="checkout__form__input">
                                    <p>Jumlah_pesanan <span>*</span></p>
                                    <input id="jml_pesanan" name="jml_pesanan" type="text" class="form-control">
                                </div>
                                <div class="checkout__form__input">
                                    <p>Deskripsi <span>*</span></p>
                                    <input id="desc" name="desc" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="checkout__form__input">
                                    <p>Produk_id<span>*</span></p>
                                    <input id="pd_id" name="pd_id" type="text" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class=" col-5">
                                    <input type="submit" name="proses" type="submit" 
                                        class="btn btn-primary" value="Simpan"/>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                            <div class="checkout__order">
                                <h5>Your order</h5>
                                <div class="checkout__order__product">
                                <form method="POST" action="proses_produk.php">
                            <div class="form-group row">
                             <label for="kode" class="col-6 col-sm-6 col-form-label">Kode</label> 
                                <div class="col-8">
                                      <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                 <i class="fa fa-anchor"></i>
                                      </div>
                                 </div> 
                             <input id="kode" name="kode" type="text" class="form-control"
                              value="">
                                </div>
                            </div>
                         </div>
                     <div class="form-group row">
                          <label for="nama" class="col-6 col-form-label">Nama Produk</label> 
                                 <div class="col-8">
                                <div class="input-group">
                                <div class="input-group-prepend">
                                <div class="input-group-text">
                             <i class="fa fa-adjust"></i>
                             </div>
                         </div> 
                          <input id="nama" name="nama" type="text" class="form-control" 
                            value="">
                           </div>
                         </div>
                      </div>
                    </div>
                        <button type="submit" class="site-btn">Place oder</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- Checkout Section End -->

        

       <!-- Footer Section Begin -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-7">
                <div class="footer__about">
                    <div class="footer__logo">
                        <a href="./index.html"><img src="img/logo3.png" alt=""></a>
                    </div>
                    <p>Pembayaran bisa dilakukan dengan mudah seperti contoh dibawah ini</p>
                    <div class="footer__payment">
                        <a href="#"><img src="img/payment/payment-1.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-2.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-3.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-4.png" alt=""></a>
                        <a href="#"><img src="img/payment/payment-5.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-5">
                <div class="footer__widget">
                    <h6>Quick links</h6>
                    <ul>
                        <li>About</a></li>
                        <li>Blogs</a></li>
                        <li>Contact</a></li>
                        <li>FAQ</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4">
                <div class="footer__widget">
                    <h6>Account</h6>
                    <ul>
                        <li>My Account</a></li>
                        <li>Orders Tracking</a></li>
                        <li>Checkout</a></li>
                        <li>Wishlist</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-8 col-sm-8">
                <div class="footer__newslatter">
                    <h6>Nwuuf u</h6>
                    <form action="#">
                        <input type="text" placeholder="Email">
                        <button type="submit" class="site-btn">Subscribe</button>
                    </form>
                    <div class="footer__social">
                        <a href="www.facebook.com"><i class="fa fa-facebook"></i></a>
                        <a href="www.twitter.com"><i class="fa fa-twitter"></i></a>
                        <a href="www.youtube.com"><i class="fa fa-youtube-play"></i></a>
                        <a href="www.instagran.com"><i class="fa fa-instagram"></i></a>
                        <a href="www.pinterest.com"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <div class="footer__copyright__text">
                    <p>Copyright &copy; <script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
                </div>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </div>
        </div>
    </div>
</footer>
<!-- Footer Section End -->

        <!-- Search Begin -->
        <div class="search-model">
            <div class="h-100 d-flex align-items-center justify-content-center">
                <div class="search-close-switch">+</div>
                <form class="search-model-form">
                    <input type="text" id="search-input" placeholder="Search here.....">
                </form>
            </div>
        </div>
        <!-- Search End -->

        <!-- Js Plugins -->
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/mixitup.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.slicknav.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.nicescroll.min.js"></script>
        <script src="js/main.js"></script>
    </body>

    </html>