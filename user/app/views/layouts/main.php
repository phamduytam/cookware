
<!DOCTYPE html>
<html lang="vi">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="content-language" content="vi" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="noodp,index,follow" />
        <meta http-equiv="content-language" content="vi" />
        <meta name="keywords" content="Cookware,Themes,DKT,Bizweb">
        <meta name='revisit-after' content='1 days' />
        <title>
            Cookwave theme  
        </title>
        

        <link rel="canonical" href="">

        

    <meta property="og:type" content="website">
    <meta property="og:title" content="Cookwave theme">
    <meta property="og:image" content="assets/logo.png?1493875157619">
    <meta property="og:image:secure_url" content="https:assets/logo.png?1493875157619">

	<meta property="og:description" content="">
	<meta property="og:url" content="">
	<meta property="og:site_name" content="Cookwave theme">
        
        <link rel="icon" href="<?php echo app()->baseUrl;?>/assets/favicon.png?1493875157619" type="image/x-icon" />
        <!-- Bootstrap -->
        <link href='<?php echo app()->baseUrl;?>/assets/bootstrap.min.css?1493875157619' rel='stylesheet' type='text/css' />
        <!-- Roboto Fonts Google -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,700,700italic&subset=latin,vietnamese' rel='stylesheet' type='text/css'>
        <!-- Fonts Awesome -->
        <link href='<?php echo app()->baseUrl;?>/assets/font-awesome.min.css?1493875157619' rel='stylesheet' type='text/css' />
        <!-- Owl Carousel -->
        <link href='<?php echo app()->baseUrl;?>/assets/owl.carousel.css?1493875157619' rel='stylesheet' type='text/css' />
        <!-- Animate -->
        <link href='<?php echo app()->baseUrl;?>/assets/animate.min.css?1493875157619' rel='stylesheet' type='text/css' />
        <!-- Style -->
        <link href='<?php echo app()->baseUrl;?>/assets/style.css?1493875157619' rel='stylesheet' type='text/css' />
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
        <!-- jQuery -->
        
        <script src='<?php echo app()->baseUrl;?>/assets/jquery-1.11.3.min.js?1493875157619' type='text/javascript'></script>
        <!-- Bootstrap -->
        <script src='<?php echo app()->baseUrl;?>/assets/bootstrap.min.js?1493875157619' type='text/javascript'></script>
        <!-- Bootstrap -->
        <script src='<?php echo app()->baseUrl;?>/assets/owl.carousel.min.js?1493875157619' type='text/javascript'></script>
        <!-- Notify -->
        <script src='<?php echo app()->baseUrl;?>/assets/bootstrap-notify.min.js?1493875157619' type='text/javascript'></script>
        
        
        <!-- Bizweb API -->
        <script src='<?php echo app()->baseUrl;?>/assets/themes_support/api.jquery.js?4' type='text/javascript'></script>
        
        <script src='<?php echo app()->baseUrl;?>/assets/themes_support/common.js?4' type='text/javascript'></script>
        <script src='<?php echo app()->baseUrl;?>/assets/themes_support/customer.js?4' type='text/javascript'></script>
        <!-- Bootstrap -->
        <script src='<?php echo app()->baseUrl;?>/assets/main.js?1493875157619' type='text/javascript'></script>
        <link href='<?php echo app()->baseUrl;?>/assets/bw-statistics-style.css?1493875157619' rel='stylesheet' type='text/css' />
    </head>

    <body>
        <div id="content" >
            <script>
                function removeCart(cart) {
                    Bizweb.getCart(loadCart);
                }
                function cartItem(addItem) {
                    $.notify({
                        message: "Sản phẩm "+ addItem.name +" đã được thêm vào giỏ hàng",
                        type: 'success'
                    });
                    Bizweb.getCart(loadCart);
                }
                function loadCart(cart) {
                    $(".nav-cart > a > span").html(cart.item_count);
                    var html = "";
                    if( cart.items.length > 0 ) {       
                        html = "<ul>"

                        for (i = 0; i < cart.items.length; i++) {
                            var linkimg = cart.items[i].image;
                            if(
                                linkimg =="null" || linkimg =='' || linkimg == null){
                                linkimg = '<?php echo app()->baseUrl;?>/thumb/small/100/054/978/themes/591142/assets/no_image.jpg?1513930122605';
                            }
                            html += "<li>";
                            html += "<a class='cart-mini-image' href='" + cart.items[i].url + "'><img class='cart-mini-image' src='" + linkimg + "' alt='" + cart.items[i].name + "'></a>";
                            html += "<h3 class='cart-mini-name'>" + cart.items[i].name + "</h3>";
                            html += "<p class='cart-mini-price'>" + Bizweb.formatMoney(cart.items[i].price, '{{amount_no_decimals_with_comma_separator}}₫') + "</p>";
                            html += "<p class='cart-mini-quantity'>Số lượng: " + cart.items[i].quantity + "</p>";
                            html += "<a class='cart-mini-remove' href='javascript:void(0)' onclick='Bizweb.removeItem(" + cart.items[i].variant_id + " , removeCart);'><i class='fa fa-times'></i></a>";
                            html += "</li>";
                        }
                        html += "</ul>";
                        html += "<div class='cart-mini-total'>";
                        html += "<p>Tổng <span class='pull-right'>" + Bizweb.formatMoney(cart.total_price, '{{amount_no_decimals_with_comma_separator}}₫') + "</span></p>";
                        html += "</div>";
                        html += "<div class='cart-mini-bottom'>";
                        html += "<a href='/cart'><i class='fa fa-shopping-cart'></i>Giỏ hàng</a>";
                        html += "<a href='/checkout'><i class='fa fa-check'></i>Thanh toán</a>";
                        html += "</div>";
                    } else {
                        html += "<p class='no-cart'>Chưa có sản phẩm nào trong giỏ hàng</p>";
                    }
                    $(".cart-mini").html(html);
                }
            </script>
            <header id="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-4 col-sm-6 col-xs-12">
                    <a href="/" class="logo">
                        
                        <img src="<?php echo app()->baseUrl;?>/assets/logo.png?1493875157619" alt="Cookwave theme">
                        
                    </a>
                    <a class="nav-main-button" href="javascript:void(0)"><img src="<?php echo app()->baseUrl;?>/assets/nav-main-bars.png?1493875157619" alt="Danh mục"></a>
                </div>
                <div class="col-lg-7 col-md-8 col-sm-6 col-xs-12">
                    <div class="header-right">
                        <div class="nav-account-cart">
                            <ul>
                                <li class="nav-account">
                                    <a href="/account"><i class="fa fa-user"></i> Tài khoản </a><span id="click_show"><i class="fa fa-angle-down" ></i></span>
                                    <ul id="account_show">
                                        
                                        <li><a href="/account/login">Đăng nhập</a></li>
                                        <li><a href="/account/register">Đăng ký</a></li>
                                        
                                    </ul>
                                </li>
                                <li class="nav-cart">
                                    <a href="/cart"><i class="fa fa-shopping-cart"></i> Giỏ hàng: <span>1</span> <i class="fa fa-angle-down"></i></a>
                                    <div class="cart-mini">
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="form-search hidden-xs">
                            <form method="get" action="/search">
                                <input type="text" class="search-query" placeholder="Tìm kiếm sản phẩm" value="" name="query">
                                <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    
                    <div class="header-hotline hidden-sm hidden-xs">
                        <span><i class="fa fa-phone"></i></span>
                        <p> Tư vấn hỗ trợ</p>
                        <h2>(04) 6674 2332 - (04) 3786 8904</h2>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <nav class="nav-main">
                        <ul>
                            
                            <li class="active">
                                <a href="/">Trang chủ</a>
                                
                            </li>
                            
                            <li >
                                <a href="/gioi-thieu">Giới thiệu</a>
                                
                            </li>
                            
                            <li >
                                <a href="/collections/all">Sản phẩm</a>
                                
                                <ul class="nav-main-sub">
                                    
                                    <li>
                                        <a href="/frontpage">Sản phẩm mới</a>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="/san-pham-noi-bat">Sản phẩm nổi bật</a>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="/san-pham-khuyen-mai">Sản phẩm khuyến mãi</a>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="/xoong-noi">Xoong/Nồi</a>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="/do-nuong">Bếp nướng</a>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="/cac-loai-bep">Các loại bếp</a>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="/may-xay-sinh-to">Máy xay sinh tố</a>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="/am-dun-nuoc">Ấm đun nước</a>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="/do-gia-dung">Đồ gia dụng</a>
                                        
                                    </li>
                                    
                                    <li>
                                        <a href="/may-lam-kem-sua-chua">Máy làm kem, sữa chua</a>
                                        
                                    </li>
                                    
                                </ul>
                                
                            </li>
                            
                            <li >
                                <a href="/tin-tuc">Tin tức</a>
                                
                            </li>
                            
                            <li >
                                <a href="/lien-he">Liên hệ</a>
                                
                            </li>
                            
                            <li style="border-top: #fff 1px solid;">
                                <form method="get" action="/search">
                                    <input type="text" class="search-query" placeholder="Tìm kiếm sản phẩm" value="" name="query">
                                    <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                                </form>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
            <section class="slider">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="owl-slider">
				<?php
					$slide = $this->getSlide();
					if ($slide):
					foreach($slide as $v):
				?>
                    <div class="item">
                        <a href="#"><img src="<?php echo app()->baseUrl;?>/uploads/<?php echo $v->image?>" alt="<?php echo $v->name?>"></a>
                    </div>
				<?php
					endforeach;
				?>
				<?php endif;?>
                </div>
                
                <section class="feature">
                    <ul>
                        <li>
                            <img src="<?php echo app()->baseUrl;?>/assets/feature1.png?1493875157619" alt="Sản phẩm Chính hãng">
                            <p>Sản phẩm</p>
                            <h2>Chính hãng</h2>
                        </li>
                        <li>
                            <img src="<?php echo app()->baseUrl;?>/assets/feature2.png?1493875157619" alt="Giao hàng Toàn quốc">
                            <p>Giao hàng</p>
                            <h2>Toàn quốc</h2>
                        </li>
                        <li>
                            <img src="<?php echo app()->baseUrl;?>/assets/feature3.png?1493875157619" alt="Thanh toán Khi nhận hàng">
                            <p>Thanh toán</p>
                            <h2>Khi nhận hàng</h2>
                        </li>
                        <li>
                            <img src="<?php echo app()->baseUrl;?>/assets/feature4.png?1493875157619" alt="Bảo hành Toàn quốc">
                            <p>Bảo hành</p>
                            <h2>Toàn quốc</h2>
                        </li>
                    </ul>
                </section>
                
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="row">
                    
                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6">
                        <a class="slider-banner-top" href="#"><img class="img-responsive" src="<?php echo app()->baseUrl;?>/assets/banner1.jpg?1493875157619" alt="Banner 1"></a>
                    </div>
                    
                    
                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-6">
                        <a class="slider-banner-bottom" href="#"><img class="img-responsive" src="<?php echo app()->baseUrl;?>/assets/banner2.jpg?1493875157619" alt="Banner 2"></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<?php echo $content;?>

            <footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 hidden-sm hidden-xs">
                    <nav class="nav-footer">
                        <ul>
                            
                            <li class="active"><a href="/">Trang chủ</a></li>
                            
                            <li ><a href="/gioi-thieu">Giới thiệu</a></li>
                            
                            <li ><a href="/collections/all">Sản phẩm</a></li>
                            
                            <li ><a href="/tin-tuc">Tin tức</a></li>
                            
                            <li ><a href="/lien-he">Liên hệ</a></li>
                            
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <nav class="nav-social">
                        <ul>
                            <li>Kết nối với chúng tôi</li>
                            <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-google"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li class="social-youtube"><a href="#"><i class="fa fa-youtube "></i></a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-6 col-md-6 col-xs-12 footer-about">
                    
                    <img src="assets/logo-footer.png?1493875157619" alt="Cookwave theme">
                    

                    <ul>
                        
                        <li>
                            <i class="fa fa-map-marker"></i>
                            <p>Tầng 4 - Tòa nhà Hanoi Group, 442 Đội Cấn, Ba Đình, Hà Nội</p>
                        </li>
                        
                        
                        <li>
                            <i class="fa fa-phone"></i>
                            <p>(84-4) 6655.8868</p>
                        </li>
                        
                        
                        <li>
                            <i class="fa fa-fax"></i>
                            <p>(84-4) 3786.8904</p>
                        </li>
                        
                        
                        <li>
                            <i class="fa fa-envelope"></i>
                            <a href="mailto:support@bizweb.vn">support@bizweb.vn</a>
                        </li>
                        
                    </ul>
                </div>

                
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 footer-menu">
                    <div class="heading-small">
                        <h3>Chính sách</h3>
                    </div>
                    <ul>
                        
                        <li ><a href="/chinh-sach">Chính sách thanh toán</a></li>
                        
                        <li ><a href="/chinh-sach">Chính sách vận chuyển</a></li>
                        
                        <li ><a href="/chinh-sach">Chính sách đổi trả</a></li>
                        
                        <li ><a href="/chinh-sach">Chính sách bảo hành</a></li>
                        
                        <li ><a href="/chinh-sach">Chính sách đối tác</a></li>
                        
                    </ul>
                </div>
                

                
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12 footer-menu">
                    <div class="heading-small">
                        <h3>Trợ giúp</h3>
                    </div>
                    <ul>
                        
                        <li ><a href="/huong-dan">Đổi trả và bảo hành</a></li>
                        
                        <li ><a href="/huong-dan">Đăng kí thành viên</a></li>
                        
                        <li ><a href="/huong-dan">Hướng dẫn mua hàng</a></li>
                        
                        <li ><a href="/huong-dan">Giao nhận và thanh toán</a></li>
                        
                        <li ><a href="/huong-dan">Đăng ký nhận khuyến mại</a></li>
                        
                    </ul>
                </div>
                

                
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 footer-subcribe">
                    <div class="heading-small">
                        <h3>Đăng ký nhận bản tin</h3>
                    </div>
                    <p>Nhận những tin tức khuyến mại từ chúng tôi</p>
                    <div class="form-subcribe">
                        <form accept-charset='UTF-8' action='/contact' id='contact' method='post'>
<input name='FormType' type='hidden' value='contact' />
<input name='utf8' type='hidden' value='true' />
                        <input id="name" name="contact[Name]" type="text" value="Guest" class="form-control hidden">
                        <input type="text" class="form-control hidden" name="contact[phone]" value="NaN"  placeholder="Phone number">
                        <textarea id="message" name="contact[Body]" class="form-control hidden" rows="7">Subcribe Email</textarea>
                        <div class="input-group" id="mail-box" >
                            <input id="email" class="subcribe-email form-control" name="contact[email]" type="email" value="" class="input_newsletter" placeholder="Email nhận tin">
                        </div>
                        <button type="submit" class="subcribe-submit"><span>Đăng ký</span></button>
                        
                        
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <p>
                        © Bản quyền thuộc về Avent Team <span class="hidden-xs">|</span> <span class="line-down">Cung cấp bởi <a href="https://www.bizweb.vn/?utm_source=site-khach-hang&utm_campaign=referral_bizweb&utm_medium=footer&utm_content=cung-cap-boi-bizweb" target="_blank" title="Bizweb">Bizweb</a></span>
                    </p>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 hidden-xs">
                    <nav class="nav-payments">
                        <ul>
                            <li>Phương thức thanh toán:</li>
                            <li><img src="assets/payments.png?1493875157619" alt="Thanh toán"></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</footer>
        </div>
    </body>

</html>