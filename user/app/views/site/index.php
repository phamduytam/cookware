<section class="best-sell">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <nav class="nav-category block">
                    <h2 id="click_show_cate">Danh mục</h2>
                    <ul id="show_cate">
                        <li>
                            <a href="/frontpage">
                                <img src="<?php echo app()->baseUrl;?>/assets/category1.png?1493875157619" alt="Sản phẩm mới">
                                <img src="assets/category-hover1.png?1493875157619" alt="Sản phẩm mới"> Sản phẩm mới</a>

                        </li>

                        <li>
                            <a href="/san-pham-noi-bat">
                                <img src="<?php echo app()->baseUrl;?>/assets/category2.png?1493875157619" alt="Sản phẩm nổi bật">
                                <img src="assets/category-hover2.png?1493875157619" alt="Sản phẩm nổi bật"> Sản phẩm nổi bật</a>

                        </li>

                        <li>
                            <a href="/san-pham-khuyen-mai">
                                <img src="<?php echo app()->baseUrl;?>/assets/category3.png?1493875157619" alt="Sản phẩm khuyến mãi">
                                <img src="assets/category-hover3.png?1493875157619" alt="Sản phẩm khuyến mãi"> Sản phẩm khuyến mãi</a>

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
                                        <?php echo $v->name?>
                                    </a>
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
                            <a href="frontpage">Xem tất cả
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </a>
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


                                                    <a class="product-item-view single_view" href="<?php echo url('/chi-tiet/' . $value->id . '/' . $value->alias)?>">
                                                        <i class="fa fa-search"></i>
                                                    </a>



                                                </div>
                                            </div>
                                            <img class="img-responsive" src="<?php echo app()->baseUrl?>/uploads/thumbs/<?php echo $value->image?>" alt="<?php echo $value->name?>">
                                        </div>
                                        <h3 class="product-item-name">
                                            <a href="<?php echo url('/chi-tiet/' . $value->id . '/' . $value->alias)?>">
                                                <?php echo $value->name?>
                                            </a>
                                        </h3>
                                        <p class="product-item-price">
                                            <?php echo $value->price?>
                                        </p>
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
                            <a href="san-pham-noi-bat">Xem tất cả
                                <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                            </a>
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




                                                    <a class="product-item-add" href="<?php echo url('/chi-tiet/' . $value->id . '/' . $value->alias)?>">
                                                        <i class="fa fa-shopping-cart "></i>
                                                    </a>
                                                    <a class="product-item-view" href="<?php echo url('/chi-tiet/' . $value->id . '/' . $value->alias)?>">
                                                        <i class="fa fa-search"></i>
                                                    </a>




                                                </div>
                                            </div>
                                            <img class="img-responsive" src="<?php echo app()->baseUrl?>/uploads/thumbs/<?php echo $value->image?>" alt="<?php echo $value->name?>">
                                        </div>
                                        <h3 class="product-item-name">
                                            <a href="<?php echo url('/chi-tiet/' . $value->id . '/' . $value->alias)?>">
                                                <?php echo $value->name?>
                                            </a>
                                        </h3>
                                        <p>Mã SP: <span class="product-item-price"><?php echo $value->masp?></span></p>
                                        <p class="product-item-price">
                                            <?php echo $value->price?>
                                        </p>
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
                    <?php
                    $banner3 = $this->getBannerByCatId(5);
                    if ($banner3):
                ?>
                        <a target="_blank" href="<?php echo $banner3->url != '' ? $banner3->url : 'javascript:void(0)';?>"><img class="img-responsive" src="<?php echo app()->baseUrl;?>/uploads/<?php echo $banner3->image?>" alt="<?php echo $banner3->name?>"></a>
                        <?php else: ?>
                        <img class="img-responsive" src="assets/banner3.jpg?1493875157619" alt="Banner 3">
                        <?php endif; ?>

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
                            <span class="button-prev" onclick="$('#owl-news-blog').data('owlCarousel').prev();">
                                <i class="fa fa-angle-left"></i>
                            </span>
                            <span class="button-next" onclick="$('#owl-news-blog').data('owlCarousel').next();">
                                <i class="fa fa-angle-right"></i>
                            </span>
                        </div>
                    </div>
                    <div class="block-content">
                        <div id="owl-news-blog" class="owl-carousel owl-theme">
                            <?php
                                if ($tintuc):
                                    foreach($tintuc as $v):
                            ?>
                                <div class="item blog-post">
                                    <div class="blog-image">

                                        <a href="<?php echo url('/tin-tuc/chi-tiet/' . $v->id . '/' . $v->alias.'.html')?>">
                                            <img src="<?php echo app()->baseUrl;?>/uploads/<?php echo $v->image?>" alt="<?php echo $v->name?>" />
                                        </a>

                                    </div>
                                    <div>
                                        <h3>
                                            <a class="article_title" href="<?php echo url('/tin-tuc/chi-tiet/' . $v->id . '/' . $v->alias.'.html')?>"><?php echo $v->name?></a>
                                        </h3>
                                        <p class="article_details">
                                            <!-- <span><i class="fa fa-user" aria-hidden="true"></i> Bizweb Theme</span> -->
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <?php echo $v->created?>
                                            </span>
                                        </p>
                                        <p class="post_content">
                                            <?php echo $v->description ?>
                                            <a href=<?php echo url( '/tin-tuc/chi-tiet/' . $v->id . '/' . $v->alias.'.html')?>> [Xem thêm...] </a>
                                        </p>
                                    </div>
                                </div>

                                <?php
                                    endforeach;
                                endif;
                            ?>
                        </div>
                    </div>
                    <div class="view_all">
                        <a href="<?php echo app()->baseUrl?>/tin-tuc">Xem tất cả
                            <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>



                <div class="statistics block hidden-sm">
                    <div id="bw-statistics"></div>
                </div>


            </div>
            <?php if (count($category) > 0): ?>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row">
                    <div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 sale">
                            <div class="heading">
                                <h2>
                                    <?php echo $category[0]->name?>
                                </h2>
                                <div class="heading-button">
                                    <span class="button-prev" onclick="$('.owl-sale').data('owlCarousel').prev();">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
                                    <span class="button-next" onclick="$('.owl-sale').data('owlCarousel').next();">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                </div>
                            </div>
                            <?php
                                $productCat = $this->getProductByCatId($category[0]->id, 12);
                                $i = 1;
                            ?>
                                <?php if($productCat):?>
                                <div class="block-content">
                                    <div class="owl-sale" class="owl-carousel owl-theme">
                                        <div class="item">
                                            <?php foreach ($productCat as $value):?>
                                            <div class="row product-item2">
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
                                                    <div class="product-item-thumbnail">
                                                        <a href="<?php echo url('/chi-tiet/' . $value->id . '/' . $value->alias)?>" title="<?php echo $value->name ?>">
                                                            <img class="img-responsive" src="<?php echo app()->baseUrl?>/uploads/thumbs/<?php echo $value->image?>" alt="<?php echo $value->name ?>">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                    <h3 class="product-item-name">
                                                        <a href="<?php echo url('/chi-tiet/' . $value->id . '/' . $value->alias)?>">
                                                            <?php echo $value->name ?>
                                                        </a>
                                                    </h3>
                                                    <p class="product-item-price">Liên hệ</p>
                                                    <div class="product-item-button">
                                                        <a class="product-item-view" href="<?php echo url('/chi-tiet/' . $value->id . '/' . $value->alias)?>">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php if ($i % 3 == 0): ?>
                                                    <div style="clear:both;"></div>
                                                </div>
                                                <div class="item">
                                            <?php endif; ?>
                                            <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                    <div style="clear:both;"></div>
                                </div>
                                <div class="view_all">
                                    <a href="<?php echo url('/san-pham/' . $category[0]->alias)?>">Xem tất cả
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <?php endif; ?>
                        </div>

                    </div>
                    <div>

                        <?php if (count($category) > 1): ?>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 promotion">
                            <div class="heading">
                                <h2>
                                    <?php echo $category[1]->name ?></h2>
                                <div class="heading-button">
                                    <span class="button-prev" onclick="$('.owl-promotion').data('owlCarousel').prev();">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
                                    <span class="button-next" onclick="$('.owl-promotion').data('owlCarousel').next();">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                </div>
                            </div>
                            <?php
                                $productCat1 = $this->getProductByCatId($category[1]->id, 12);
                                $i = 1;
                            ?>
                                <?php if($productCat1):?>
                                <div class="block-content">
                                    <div class="owl-promotion" class="owl-carousel owl-theme">
                                        <div class="item">
                                            <?php foreach ($productCat1 as $value):?>
                                                <div class="row product-item2">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 item2_footer">
                                                        <div class="product-item-thumbnail">
                                                            <a href="<?php echo url('/chi-tiet/' . $value->id . '/' . $value->alias)?>" title="<?php echo $value->name ?>">
                                                                <img class="img-responsive" src="<?php echo app()->baseUrl?>/uploads/thumbs/<?php echo $value->image?>" alt="<?php echo $value->name ?>">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                        <h3 class="product-item-name">
                                                            <a href="<?php echo url('/chi-tiet/' . $value->id . '/' . $value->alias)?>">
                                                                <?php echo $value->name ?>
                                                            </a>
                                                        </h3>
                                                        <p class="product-item-price">Liên hệ</p>
                                                        <div class="product-item-button">
                                                            <a class="product-item-view" href="<?php echo url('/chi-tiet/' . $value->id . '/' . $value->alias)?>">
                                                                <i class="fa fa-search"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                            <?php if ($i % 3 == 0): ?>
                                                    <div style="clear:both;"></div>
                                                </div>
                                                <div class="item">
                                            <?php endif; ?>
                                            <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="view_all">
                                    <a href="<?php echo url('/san-pham/' . $category[1]->alias)?>">Xem tất cả
                                        <i class="fa fa-angle-double-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                                <?php endif;?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>