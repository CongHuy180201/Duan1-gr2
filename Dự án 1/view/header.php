<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Poly-Car</title>
  <LINK REL="SHORTCUT ICON" HREF="images/logo2.png">
</head>
<!-- CSS Style -->
<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylesheet/font-awesome.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/bootstrap-select.css">
<link rel="stylesheet" type="text/css" href="stylesheet/revslider.css">
<link rel="stylesheet" type="text/css" href="stylesheet/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="stylesheet/owl.theme.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.bxslider.css">
<link rel="stylesheet" type="text/css" href="stylesheet/jquery.mobile-menu.css">
<link rel="stylesheet" type="text/css" href="stylesheet/style.css" media="all">
<link rel="stylesheet" type="text/css" href="stylesheet/responsive.css" media="all">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700,800'
  rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Teko:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Saira+Condensed:300,400,500,600,700,800" rel="stylesheet">

<body>
  <header>
    <div class="container">
      <div class="row">
        <div id="header">
          <div class="header-container">
            <div class="header-logo"> <a href="index-2.html" title="Car HTML" class="logo">
                <div><img src="images/logo1.png" alt="Car Store"></div>
              </a> </div>
            <div class="header__nav">
              <div class="header-banner">
                <div class="col-lg-6 col-xs-12 col-sm-6 col-md-6">
                  <div class="assetBlock">
                    <div style="height: 20px; overflow: hidden;" id="slideshow">
                      <p style="display: block;">Hot days! - <span>50%</span> Trong tháng NNN </p>
                      <p style="display: none;">Save up to <span>40%</span> Trong tháng NNN </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="fl-header-right">
                <div class="fl-links">
                  <div class="no-js"> <a title="" class="clicker"></a>
                    <div class="fl-nav-links">
                      <h3>Tài Khoản </h3>
                      <ul class="links">
                        <li><a href="index.php?act=dangnhap" title="My Account">Đằng Nhập</a></li>
                        <li><a href="index.php?act=dangky" title="Wishlist">Đăng Ký</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="fl-cart-contain">
                  <div class="mini-cart">
                    <div class="basket"> <a href="shopping-cart.html"><span></span></a> </div>
                    <div class="fl-mini-cart-content" style="display: none;">
                      <div class="block-subtitle">
                        <div class="top-subtotal">2 items, <span class="price">$259.99</span> </div>
                        <!--top-subtotal-->
                        <!--pull-right-->
                      </div>
                      <!--block-subtitle-->
                      <ul class="mini-products-list" id="cart-sidebar">
                        <li class="item first">
                          <div class="item-inner"><a class="product-image"
                              title="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White" href="#l"><img
                                alt="timi &amp; leslie Sophia Diaper Bag, Lemon Yellow/Shadow White"
                                src="products-images/p4.jpg"></a>
                            <div class="product-details">
                              <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a
                                  class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span
                                    class="hidden">Edit item</span></a> </div>
                              <!--access-->
                              <strong>1</strong> x <span class="price">$179.99</span>
                              <p class="product-name"><a href="accessories-detail.html">timi &amp; leslie Sophia Diaper
                                  Bag...</a></p>
                            </div>
                          </div>
                        </li>
                        <li class="item last">
                          <div class="item-inner"><a class="product-image"
                              title="JP Lizzy Satchel Designer Diaper Bag - Slate Citron" href="#"><img
                                alt="JP Lizzy Satchel Designer Diaper Bag - Slate Citron"
                                src="products-images/p3.jpg"></a>
                            <div class="product-details">
                              <div class="access"><a class="btn-remove1" title="Remove This Item" href="#">Remove</a> <a
                                  class="btn-edit" title="Edit item" href="#"><i class="icon-pencil"></i><span
                                    class="hidden">Edit item</span></a> </div>
                              <!--access-->
                              <strong>1</strong> x <span class="price">$80.00</span>
                              <p class="product-name"><a href="accessories-detail.html">JP Lizzy Satchel Designer Diaper
                                  Ba...</a></p>
                            </div>
                          </div>
                        </li>
                      </ul>
                      <div class="actions">
                        <button class="btn-checkout" title="Checkout" type="button"
                          onClick="window.location=checkout.html"><span>Checkout</span></button>
                      </div>
                      <!--actions-->
                    </div>
                    <!--fl-mini-cart-content-->
                  </div>
                </div>
                <!--mini-cart-->
                <div class="collapse navbar-collapse">
                  <form class="navbar-form" role="search">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Search">
                      <span class="input-group-btn">
                        <button type="submit" class="search-btn"> <span class="glyphicon glyphicon-search"> <span
                              class="sr-only">Search</span> </span> </button>
                      </span>
                    </div>
                  </form>
                </div>
                <!--links-->
              </div>
              <div class="fl-nav-menu">
                <nav>
                  <div class="mm-toggle-wrap">
                    <div class="mm-toggle"><i class="fa fa-bars"></i><span class="mm-label">Menu</span> </div>
                  </div>
                  <div class="nav-inner">
                    <!-- BEGIN NAV -->
                    <ul id="nav" class="hidden-xs">
                      <li class="active"> <a class="level-top" href="index.php"><span>Trang Chủ</span></a></li>

                      <li class="level0 parent drop-menu"> <a class="level-top" href="index.php?act=sanpham"><span>Danh
                            Sách Xe</span></a></li>
                      <li class="level0 parent drop-menu"> <a class="level-top" href="#"><span>Giới Thiệu</span></a>
                      </li>
                      <li class="mega-menu hidden-sm"> <a class="level-top" href="index.php?act=huongdan"><span>Hướng
                            Dẫn</span></a> </li>
                      <li class="fl-custom-tabmenulink mega-menu"> <a href="#" class="level-top"> <span>Sản phẩm nổi
                            bật</span> </a>
                      </li>
                    </ul>
                    <!--nav-->
                  </div>
                </nav>
              </div>
            </div>
            <!--row-->
          </div>
        </div>
      </div>
    </div>
  </header>