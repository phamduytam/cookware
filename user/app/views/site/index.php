<section class="best-sell">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <nav class="nav-category block">
    <h2 id="click_show_cate">Danh mục</h2>
    <ul id="show_cate">
        <li >
            <a href="/frontpage"><img src="<?php echo app()->baseUrl;?>/assets/category1.png?1493875157619"  alt="Sản phẩm mới"><img src="assets/category-hover1.png?1493875157619"  alt="Sản phẩm mới"> Sản phẩm mới</a>
            
        </li>
        
        <li >
            <a href="/san-pham-noi-bat"><img src="<?php echo app()->baseUrl;?>/assets/category2.png?1493875157619"  alt="Sản phẩm nổi bật"><img src="assets/category-hover2.png?1493875157619"  alt="Sản phẩm nổi bật"> Sản phẩm nổi bật</a>
            
        </li>
        
        <li >
            <a href="/san-pham-khuyen-mai"><img src="<?php echo app()->baseUrl;?>/assets/category3.png?1493875157619"  alt="Sản phẩm khuyến mãi"><img src="assets/category-hover3.png?1493875157619"  alt="Sản phẩm khuyến mãi"> Sản phẩm khuyến mãi</a>
            
        </li>
    <?php
        $i = 0;
        $category = $this->getCategory();
        if($category):
            ?>
        <?php
        foreach ($category as $v):
            $i++;
    ?>
        <li>
            <a href="<?php echo app()->baseUrl;?>/san-pham/<?php echo $v->alias?>.html" title="<?php echo $v->name?>">
                <img src="assets/category<?php echo $i ?>.png" alt="<?php echo $v->name?>">
                <img src="assets/category-hover<?php echo $i ?>.png" alt="<?php echo $v->name?>">
                <?php echo $v->name?></a>
            </a>
        </li>
        <?php endforeach;?>
		<?php endif;?>
        
    </ul>
</nav>
                <div class="online_support block">
    <div class="new_title">
        <h2>Hỗ trợ trực tuyến</h2>
    </div>
    <div class="block-content">
        <?php
            $tuvan = $this->getTuvan();
            echo $tuvan;
        ?>
    </div>
</div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
				<?php if($new):?>
                <!-- Sản phẩm mới -->
                <div class="new-products block">
                    <div class="heading heading_rel">
                        <h2>Sản phẩm mới</h2>
                        <div class="view_all">
                            <a href="frontpage">Xem tất cả <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="item">
                            <div class="row">
							<?php foreach ($new as $value):?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<div class="product-item">
										<div class="product-item-thumbnail">
											<div class="product-item-background">
												<div class="product-item-button">
													
													
													<a class="product-item-view single_view" href="<?php echo url('/chi-tiet/' . $value->id . '/' . $value->alias)?>"><i class="fa fa-search"></i></a>
													

													
												</div>
											</div>
											<img class="img-responsive" src="<?php echo app()->baseUrl?>/uploads/thumbs/<?php echo $value->image?>" alt="<?php echo $value->name?>">
										</div>
										<h3 class="product-item-name"><a href="<?php echo url('/chi-tiet/' . $value->id . '/' . $value->alias)?>"><?php echo $value->name?></a></h3>
										<p class="product-item-price"><?php echo $value->price?></p>
									</div>
                                </div>
							<?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
                
				<!-- End Sản phẩm mới -->
				<?php endif;?>

				<?php if($banchay):?>
                <!-- Sản phẩm bán chạy -->
                <div class="best_sell block">
                    <div class="heading heading_rel">
                        <h2>Sản phẩm bán chạy</h2>
                        <div class="view_all">
                            <a href="san-pham-noi-bat">Xem tất cả <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <div class="block-content">
                        <div class="item">
                            <div class="row">
							<?php foreach ($banchay as $value):?>
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
									<div class="product-item">
										<div class="product-item-thumbnail">
											<div class="product-item-background">
												<div class="product-item-button">
													
													
													
													
													<a class="product-item-add" href="<?php echo url('/chi-tiet/' . $value->id . '/' . $value->alias)?>"><i class="fa fa-shopping-cart "></i></a>
													<a class="product-item-view" href="<?php echo url('/chi-tiet/' . $value->id . '/' . $value->alias)?>"><i class="fa fa-search"></i></a>
													
													

													
												</div>
											</div>
											<img class="img-responsive" src="<?php echo app()->baseUrl?>/uploads/thumbs/<?php echo $value->image?>" alt="<?php echo $value->name?>">
										</div>
										<h3 class="product-item-name"><a href="<?php echo url('/chi-tiet/' . $value->id . '/' . $value->alias)?>"><?php echo $value->name?></a></h3>
										<p class="product-item-price"><?php echo $value->price?></p>
									</div>
                                </div>
							<?php endforeach;?>
                            </div>
                        </div>
                    </div>
                </div>
                
				<!-- End Sản phẩm bán chạy -->
				<?php endif;?>
            </div>
        </div>
    </div>
</section>

<section class="banner-middle">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a href="#">
                <?php
                    $banner3 = $this->getBannerByCatId(5);
                    if ($banner3):
                ?>
                    <img class="img-responsive" src="<?php echo app()->baseUrl;?>/uploads/<?php echo $banner3->image?>" alt="<?php echo $banner3->name?>">
                <?php else: ?>
                    <img class="img-responsive" src="assets/banner3.jpg?1493875157619" alt="Banner 3">
                <?php endif; ?>
                </a>

            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                
                <div class="blog_news">
                    <div class="heading">
                        <h2>Tin tức</h2>
                        <div class="heading-button">
                            <span class="button-prev" onclick="$('#owl-news-blog').data('owlCarousel').prev();"><i class="fa fa-angle-left"></i></span>
                            <span class="button-next" onclick="$('#owl-news-blog').data('owlCarousel').next();"><i class="fa fa-angle-right"></i></span>
                        </div>
                    </div>
                    <div class="block-content">
                        <div id="owl-news-blog" class="owl-carousel owl-theme">
                            
                            
                            <div class="item blog-post">
                                <div class="blog-image">
                                    
                                    <a href="/co-nen-dung-lo-vi-song-de-nuong-banh"><img src="thumb/medium/articles/untitled-2.jpg?v=1455695925630" alt="Tin tức - Blog"/></a>
                                    
                                </div>
                                <div>
                                    <h3>
                                        <a class="article_title" href="/co-nen-dung-lo-vi-song-de-nuong-banh">Có nên dùng lò vi sóng để nướng bánh?</a>
                                    </h3>
                                    <p class="article_details">
                                        <span><i class="fa fa-user" aria-hidden="true"></i> Bizweb Theme</span>
                                        <span><i class="fa fa-calendar" aria-hidden="true"></i> 17/ 02/ 2016</span>
                                    </p>
                                    <p class="post_content"> Lò vi sóng và lò nướng là hai loại lò có chức năng khác biệt hẳn nhau. Lò nướng nướng bằng nhiệt điện trở làm chín từ mặt ngoài, lò vi sóng nướng bằng sóng cao tần, hay còn...<a href=/co-nen-dung-lo-vi-song-de-nuong-banh> [Xem thêm...] </a></p>
                                </div>
                            </div>
                            
                            <div class="item blog-post">
                                <div class="blog-image">
                                    
                                    <a href="/huong-dan-chon-dung-cu-lam-bep"><img src="thumb/medium/articles/untitled-3.jpg?v=1455696254083" alt="Tin tức - Blog"/></a>
                                    
                                </div>
                                <div>
                                    <h3>
                                        <a class="article_title" href="/huong-dan-chon-dung-cu-lam-bep">Hướng dẫn chọn dụng cụ làm bếp</a>
                                    </h3>
                                    <p class="article_details">
                                        <span><i class="fa fa-user" aria-hidden="true"></i> Bizweb Theme</span>
                                        <span><i class="fa fa-calendar" aria-hidden="true"></i> 17/ 02/ 2016</span>
                                    </p>
                                    <p class="post_content"> Chọn cỡ cho dụng cụ làm bếp không phụ thuộc vào không gian bếp lớn hay nhỏ, mà quan trọng nhất là tùy theo số lượng người trong gia đình. <a href=/huong-dan-chon-dung-cu-lam-bep> [Xem thêm...] </a></p>
                                </div>
                            </div>
                            
                            <div class="item blog-post">
                                <div class="blog-image">
                                    
                                    <a href="/may-xay-sinh-to-cach-bao-quan-va-su-dung"><img src="thumb/medium/articles/may-xay-sinh-to-ep-trai-cay-da-nang-philips-hr-1847.jpg?v=1455694622967" alt="Tin tức - Blog"/></a>
                                    
                                </div>
                                <div>
                                    <h3>
                                        <a class="article_title" href="/may-xay-sinh-to-cach-bao-quan-va-su-dung">Máy xay sinh tố - cách bảo quản và sử dụng</a>
                                    </h3>
                                    <p class="article_details">
                                        <span><i class="fa fa-user" aria-hidden="true"></i> Bizweb Theme</span>
                                        <span><i class="fa fa-calendar" aria-hidden="true"></i> 17/ 02/ 2016</span>
                                    </p>
                                    <p class="post_content"> Hiện nay, người tiêu dùng sử dụng nhiều nhất là các loại máy xay sinh tố đơn giản, có 2 chức năng xay khô, xay ướt. <a href=/may-xay-sinh-to-cach-bao-quan-va-su-dung> [Xem thêm...] </a></p>
                                </div>
                            </div>
                            
                            <div class="item blog-post">
                                <div class="blog-image">
                                    
                                    <a href="/cach-dung-noi-thuy-tinh-tren-bep-tu"><img src="thumb/medium/articles/bep-dien-tu-napoli-5.jpg?v=1455693996583" alt="Tin tức - Blog"/></a>
                                    
                                </div>
                                <div>
                                    <h3>
                                        <a class="article_title" href="/cach-dung-noi-thuy-tinh-tren-bep-tu">Cách dùng nồi thủy tinh trên bếp từ</a>
                                    </h3>
                                    <p class="article_details">
                                        <span><i class="fa fa-user" aria-hidden="true"></i> Bizweb Theme</span>
                                        <span><i class="fa fa-calendar" aria-hidden="true"></i> 17/ 02/ 2016</span>
                                    </p>
                                    <p class="post_content"> Trước đây gia đình bạn đã có một bộ nồi thủy tinh trên rất chi là đẹp của Visions, Luminarc hay Amberline bạn dùng nó cho bếp gas trong gia đình. <a href=/cach-dung-noi-thuy-tinh-tren-bep-tu> [Xem thêm...] </a></p>
                                </div>
                            </div>
                            
                            <div class="item blog-post">
                                <div class="blog-image">
                                    
                                    <a href="/bai-viet-mau"><img src="thumb/medium/articles/binh-dun-sieu-toc-philips-hd9303-6-org-1.jpg?v=1455693647503" alt="Tin tức - Blog"/></a>
                                    
                                </div>
                                <div>
                                    <h3>
                                        <a class="article_title" href="/bai-viet-mau">Chọn mua ấm đun nước dùng cho bếp từ</a>
                                    </h3>
                                    <p class="article_details">
                                        <span><i class="fa fa-user" aria-hidden="true"></i> Bizweb Theme</span>
                                        <span><i class="fa fa-calendar" aria-hidden="true"></i> 02/ 02/ 2016</span>
                                    </p>
                                    <p class="post_content"> Ấm đun nước bếp từ là một trong những từ khóa khi tôi check trên mạng thấy sao mà nhiều người tìm kiếm thế? <a href=/bai-viet-mau> [Xem thêm...] </a></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="view_all">
                        <a href="tin-tuc">Xem tất cả <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                    </div>
                </div>
                

                
                <div class="statistics block hidden-sm">
                    <div id="bw-statistics"></div>
                </div>
                

            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row">
                    <div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 sale">
                        <div class="heading">
                            <h2>Sản phẩm giảm giá</h2>
                            <div class="heading-button">
                                <span class="button-prev" onclick="$('.owl-sale').data('owlCarousel').prev();"><i class="fa fa-angle-left"></i></span>
                                <span class="button-next" onclick="$('.owl-sale').data('owlCarousel').next();"><i class="fa fa-angle-right"></i></span>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="owl-sale" class="owl-carousel owl-theme">
                                
                                
                                
                                
                                
                                <div class="item">
                                    
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-lam-bap-rang-bo-hot-air-popper-popcorn">
                <img class="img-responsive" src="thumb/medium/products/2-826f1905-aa85-40df-b160-20f83590607d.jpg?v=1455936545450" alt="Máy làm bắp rang bơ Hot Air">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-lam-bap-rang-bo-hot-air-popper-popcorn">Máy làm bắp rang bơ Hot Air</a></h3>
        
        
        
        <p class="product-item-price">Liên hệ</p>
        
        
        
        
        <div class="product-item-button">
            <a class="product-item-view" href="/may-lam-bap-rang-bo-hot-air-popper-popcorn"><i class="fa fa-search"></i></a>
        </div>
        
        
        
    </div>
</div>
                                    
                                
                                
                                
                                
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-ep-trai-cay-toc-do-cham-hurom-hu-600wn">
                <img class="img-responsive" src="thumb/medium/products/3-3741e331-95cb-4e09-b7b6-5d9032046ab6.jpg?v=1455936615040" alt="Máy ép trái cây Hurom HU">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-ep-trai-cay-toc-do-cham-hurom-hu-600wn">Máy ép trái cây Hurom HU</a></h3>
        
        
        
        
        
        <p class="product-item-price">4.900.000₫</p>
        <p class="product-item-price-sale">5.900.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2184963, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                
                                
                                
                                
                                    




 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-nuong-da-nang-xpress-redi-set-go">
                <img class="img-responsive" src="thumb/medium/products/11.jpg?v=1469592626547" alt="Máy nướng Redi Set Go">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-nuong-da-nang-xpress-redi-set-go">Máy nướng Redi Set Go</a></h3>
        
        
        
        
        
        <p class="product-item-price">500.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2184969, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                    <div style="clear:both;"></div>
                                </div>
                                
                                
                                
                                
                                
                                <div class="item">
                                    
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-xay-ca-phe-mini-kahchan">
                <img class="img-responsive" src="thumb/medium/products/kachan1.jpg?v=1455685358640" alt="Máy xay cà phê mini Kahchan">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-xay-ca-phe-mini-kahchan">Máy xay cà phê mini Kahchan</a></h3>
        
        
        
        
        
        <p class="product-item-price">1.350.000₫</p>
        <p class="product-item-price-sale">1.450.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2184976, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                
                                
                                
                                
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/noi-com-dien-midea-mr-sc18ma">
                <img class="img-responsive" src="thumb/medium/products/c3-9e12d638-ba7b-4196-8590-02de832f1635.jpg?v=1455697432443" alt="Nồi cơm điện Midea">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/noi-com-dien-midea-mr-sc18ma">Nồi cơm điện Midea</a></h3>
        
        
        
        
        
        <p class="product-item-price">819.000₫</p>
        <p class="product-item-price-sale">919.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2184956, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                
                                
                                
                                
                                    




 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-xay-ca-phe-molino">
                <img class="img-responsive" src="thumb/medium/products/may-xay-ca-phe-molino-4243-9121731-2-webp-zoom.jpg?v=1455685387380" alt="Máy xay cà phê Molino">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-xay-ca-phe-molino">Máy xay cà phê Molino</a></h3>
        
        
        
        
        
        <p class="product-item-price">2.100.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2184978, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                    <div style="clear:both;"></div>
                                </div>
                                
                                
                                
                                
                                
                                <div class="item">
                                    
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-pha-ca-phe-tiross-ts621">
                <img class="img-responsive" src="thumb/medium/products/may-pha-ca-phe-tiross-ts621.jpg?v=1455685415017" alt="Máy pha cà phê Tiross TS621">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-pha-ca-phe-tiross-ts621">Máy pha cà phê Tiross TS621</a></h3>
        
        
        
        
        
        <p class="product-item-price">1.129.000₫</p>
        <p class="product-item-price-sale">1.229.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2185005, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                
                                
                                
                                
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-danh-trung-de-ban-sinbo-smx-2725">
                <img class="img-responsive" src="thumb/medium/products/13.jpg?v=1455936472547" alt="Máy đánh trứng Sinbo">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-danh-trung-de-ban-sinbo-smx-2725">Máy đánh trứng Sinbo</a></h3>
        
        
        
        <p class="product-item-price">Liên hệ</p>
        
        
        
        
        <div class="product-item-button">
            <a class="product-item-view" href="/may-danh-trung-de-ban-sinbo-smx-2725"><i class="fa fa-search"></i></a>
        </div>
        
        
        
    </div>
</div>
                                    
                                
                                
                                
                                
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-xay-thuc-pham-iruka">
                <img class="img-responsive" src="thumb/medium/products/8.jpg?v=1455936444700" alt="Máy xay thực phẩm Iruka">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-xay-thuc-pham-iruka">Máy xay thực phẩm Iruka</a></h3>
        
        
        
        
        
        <p class="product-item-price">419.000₫</p>
        <p class="product-item-price-sale">790.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2185011, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                    <div style="clear:both;"></div>
                                </div>
                                
                                
                                
                                
                                
                                <div class="item">
                                    
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-nuong-banh-nikai">
                <img class="img-responsive" src="thumb/medium/products/7-7abc3ce0-5826-4aaf-8ac3-d7eda94352bc.jpg?v=1455936400473" alt="Máy nướng bánh Nikai">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-nuong-banh-nikai">Máy nướng bánh Nikai</a></h3>
        
        
        
        
        
        <p class="product-item-price">229.000₫</p>
        <p class="product-item-price-sale">440.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2185012, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                
                                
                                
                                
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/noi-chien-nuong-chan-khong-iruka">
                <img class="img-responsive" src="thumb/medium/products/6-8d207138-e544-4a0c-9da3-f372451b54b8.jpg?v=1455936385590" alt="Nồi chiên nướng chân không">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/noi-chien-nuong-chan-khong-iruka">Nồi chiên nướng chân không</a></h3>
        
        
        
        
        
        <p class="product-item-price">2.689.000₫</p>
        <p class="product-item-price-sale">4.199.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2185014, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                
                                
                                
                                
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/noi-chien-chan-khong-magic">
                <img class="img-responsive" src="thumb/medium/products/5-2fd11416-91b6-4107-93c2-1688b6a5ef25.jpg?v=1455936371353" alt="Nồi chiên chân không Magic">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/noi-chien-chan-khong-magic">Nồi chiên chân không Magic</a></h3>
        
        
        
        
        
        <p class="product-item-price">2.389.000₫</p>
        <p class="product-item-price-sale">3.390.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2185015, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                    <div style="clear:both;"></div>
                                </div>
                                
                                
                                
                            </div>
                            <div style="clear:both;"></div>
                        </div>
                        <div class="view_all">
                            <a href="san-pham-khuyen-mai">Xem tất cả <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    
                    </div>
                    <div>
                    
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 promotion">
                        <div class="heading">
                            <h2>Sản phẩm khuyến mãi</h2>
                            <div class="heading-button">
                                <span class="button-prev" onclick="$('.owl-promotion').data('owlCarousel').prev();"><i class="fa fa-angle-left"></i></span>
                                <span class="button-next" onclick="$('.owl-promotion').data('owlCarousel').next();"><i class="fa fa-angle-right"></i></span>
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="owl-promotion" class="owl-carousel owl-theme">
                                
                                
                                
                                
                                
                                <div class="item">
                                    
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-lam-bap-rang-bo-hot-air-popper-popcorn">
                <img class="img-responsive" src="thumb/medium/products/2-826f1905-aa85-40df-b160-20f83590607d.jpg?v=1455936545450" alt="Máy làm bắp rang bơ Hot Air">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-lam-bap-rang-bo-hot-air-popper-popcorn">Máy làm bắp rang bơ Hot Air</a></h3>
        
        
        
        <p class="product-item-price">Liên hệ</p>
        
        
        
        
        <div class="product-item-button">
            <a class="product-item-view" href="/may-lam-bap-rang-bo-hot-air-popper-popcorn"><i class="fa fa-search"></i></a>
        </div>
        
        
        
    </div>
</div>
                                    
                                
                                
                                
                                
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-ep-trai-cay-toc-do-cham-hurom-hu-600wn">
                <img class="img-responsive" src="thumb/medium/products/3-3741e331-95cb-4e09-b7b6-5d9032046ab6.jpg?v=1455936615040" alt="Máy ép trái cây Hurom HU">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-ep-trai-cay-toc-do-cham-hurom-hu-600wn">Máy ép trái cây Hurom HU</a></h3>
        
        
        
        
        
        <p class="product-item-price">4.900.000₫</p>
        <p class="product-item-price-sale">5.900.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2184963, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                
                                
                                
                                
                                    




 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-nuong-da-nang-xpress-redi-set-go">
                <img class="img-responsive" src="thumb/medium/products/11.jpg?v=1469592626547" alt="Máy nướng Redi Set Go">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-nuong-da-nang-xpress-redi-set-go">Máy nướng Redi Set Go</a></h3>
        
        
        
        
        
        <p class="product-item-price">500.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2184969, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                    <div style="clear:both;"></div>
                                </div>
                                
                                
                                
                                
                                
                                <div class="item">
                                    
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-xay-ca-phe-mini-kahchan">
                <img class="img-responsive" src="thumb/medium/products/kachan1.jpg?v=1455685358640" alt="Máy xay cà phê mini Kahchan">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-xay-ca-phe-mini-kahchan">Máy xay cà phê mini Kahchan</a></h3>
        
        
        
        
        
        <p class="product-item-price">1.350.000₫</p>
        <p class="product-item-price-sale">1.450.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2184976, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                
                                
                                
                                
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/noi-com-dien-midea-mr-sc18ma">
                <img class="img-responsive" src="thumb/medium/products/c3-9e12d638-ba7b-4196-8590-02de832f1635.jpg?v=1455697432443" alt="Nồi cơm điện Midea">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/noi-com-dien-midea-mr-sc18ma">Nồi cơm điện Midea</a></h3>
        
        
        
        
        
        <p class="product-item-price">819.000₫</p>
        <p class="product-item-price-sale">919.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2184956, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                
                                
                                
                                
                                    




 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-xay-ca-phe-molino">
                <img class="img-responsive" src="thumb/medium/products/may-xay-ca-phe-molino-4243-9121731-2-webp-zoom.jpg?v=1455685387380" alt="Máy xay cà phê Molino">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-xay-ca-phe-molino">Máy xay cà phê Molino</a></h3>
        
        
        
        
        
        <p class="product-item-price">2.100.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2184978, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                    <div style="clear:both;"></div>
                                </div>
                                
                                
                                
                                
                                
                                <div class="item">
                                    
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-pha-ca-phe-tiross-ts621">
                <img class="img-responsive" src="thumb/medium/products/may-pha-ca-phe-tiross-ts621.jpg?v=1455685415017" alt="Máy pha cà phê Tiross TS621">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-pha-ca-phe-tiross-ts621">Máy pha cà phê Tiross TS621</a></h3>
        
        
        
        
        
        <p class="product-item-price">1.129.000₫</p>
        <p class="product-item-price-sale">1.229.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2185005, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                
                                
                                
                                
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-danh-trung-de-ban-sinbo-smx-2725">
                <img class="img-responsive" src="thumb/medium/products/13.jpg?v=1455936472547" alt="Máy đánh trứng Sinbo">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-danh-trung-de-ban-sinbo-smx-2725">Máy đánh trứng Sinbo</a></h3>
        
        
        
        <p class="product-item-price">Liên hệ</p>
        
        
        
        
        <div class="product-item-button">
            <a class="product-item-view" href="/may-danh-trung-de-ban-sinbo-smx-2725"><i class="fa fa-search"></i></a>
        </div>
        
        
        
    </div>
</div>
                                    
                                
                                
                                
                                
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-xay-thuc-pham-iruka">
                <img class="img-responsive" src="thumb/medium/products/8.jpg?v=1455936444700" alt="Máy xay thực phẩm Iruka">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-xay-thuc-pham-iruka">Máy xay thực phẩm Iruka</a></h3>
        
        
        
        
        
        <p class="product-item-price">419.000₫</p>
        <p class="product-item-price-sale">790.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2185011, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                    <div style="clear:both;"></div>
                                </div>
                                
                                
                                
                                
                                
                                <div class="item">
                                    
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/may-nuong-banh-nikai">
                <img class="img-responsive" src="thumb/medium/products/7-7abc3ce0-5826-4aaf-8ac3-d7eda94352bc.jpg?v=1455936400473" alt="Máy nướng bánh Nikai">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/may-nuong-banh-nikai">Máy nướng bánh Nikai</a></h3>
        
        
        
        
        
        <p class="product-item-price">229.000₫</p>
        <p class="product-item-price-sale">440.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2185012, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                
                                
                                
                                
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/noi-chien-nuong-chan-khong-iruka">
                <img class="img-responsive" src="thumb/medium/products/6-8d207138-e544-4a0c-9da3-f372451b54b8.jpg?v=1455936385590" alt="Nồi chiên nướng chân không">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/noi-chien-nuong-chan-khong-iruka">Nồi chiên nướng chân không</a></h3>
        
        
        
        
        
        <p class="product-item-price">2.689.000₫</p>
        <p class="product-item-price-sale">4.199.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2185014, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                
                                
                                
                                
                                    






 



<div class="row product-item2">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
        <div class="product-item-thumbnail">
            <a href="/noi-chien-chan-khong-magic">
                <img class="img-responsive" src="thumb/medium/products/5-2fd11416-91b6-4107-93c2-1688b6a5ef25.jpg?v=1455936371353" alt="Nồi chiên chân không Magic">
            </a>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
        <h3 class="product-item-name"><a href="/noi-chien-chan-khong-magic">Nồi chiên chân không Magic</a></h3>
        
        
        
        
        
        <p class="product-item-price">2.389.000₫</p>
        <p class="product-item-price-sale">3.390.000₫</p>
        
        
        
        
        
        
        
        
        <a href="javascript:void(0)" onclick="Bizweb.addItem(2185015, 1, cartItem)" class="product-item-add2"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ</a>
        
        
        
        
        
    </div>
</div>
                                    
                                    <div style="clear:both;"></div>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="view_all">
                            <a href="san-pham-khuyen-mai">Xem tất cả <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
