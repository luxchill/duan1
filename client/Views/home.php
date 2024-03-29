<?php if (isset($_COOKIE['message'])) : ?>
    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
        <strong><?= $_COOKIE['message'] ?? '' ?></strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php endif ?>

<?php

// echo "<pre>";
// print_r($dataSlide);
// echo "</pre>";

// foreach ($dataSlide as $key => $value) {
//     if ($value['type'] == 'main') {
//         echo "<pre>";
//         print_r($value);
//         echo "</pre>";
//     }
// }

?>

<div id="carousel-home">
    <div class="owl-carousel owl-theme">
        <!--/owl-slide-->
        <?php foreach ($dataSlide as $key => $value) : ?>
            <?php

            // echo "<pre>";
            // print_r($value);
            // echo "</pre>";

            ?>
            <?php if ($value['type'] == 'main') : ?>
                <div class="owl-slide cover" style="background-image: url(data:image/jpeg;base64,<?= $value['url'] ?>);">
                    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                        <!-- <div class="container">
                        <div class="row justify-content-center justify-content-md-start">
                            <div class="col-lg-6 static">
                                <div class="slide-text white">
                                    <h2 class="owl-slide-animated owl-slide-title">Attack Air<br>VaporMax Flyknit 3</h2>
                                    <p class="owl-slide-animated owl-slide-subtitle">
                                        Limited items available at this price
                                    </p>
                                    <div class="owl-slide-animated owl-slide-cta"><a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a></div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                    </div>
                </div>
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
    <div id="icon_drag_mobile"></div>
</div>
<!--/carousel-->

<!-- Banner Category -->
<ul id="banners_grid" class="clearfix">
    <li>
        <a href="<?= BASE_URL ?>?act=shop&category=thoi-trang-nam" class="img_container">
            <img src="<?= BASE_URL ?>public/image/bannerThoitrangnam.jpg" data-src="<?= BASE_URL ?>public/image/bannerThoitrangnam.jpg" alt="" class="lazy">
            <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <h3>Men's Collection</h3>
                <div><span class="btn_1">Shop Now</span></div>
            </div>
        </a>
    </li>
    <li>
        <a href="<?= BASE_URL ?>?act=shop&category=thoi-trang-nu" class="img_container">
            <img src="<?= BASE_URL ?>public/image/bannerThoitrangnu.jpg" data-src="<?= BASE_URL ?>public/image/bannerThoitrangnu.jpg" alt="" class="lazy">
            <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <h3>Womens's Collection</h3>
                <div><span class="btn_1">Shop Now</span></div>
            </div>
        </a>
    </li>
    <li>
        <a href="<?= BASE_URL ?>?act=shop&category=thoi-trang-tre-em" class="img_container">
            <img src="<?= BASE_URL ?>public/image/bannerThoitrangtreem.jpg" data-src="<?= BASE_URL ?>public/image/bannerThoitrangtreem.jpg" alt="" class="lazy">
            <div class="short_info opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.5)">
                <h3>Kids's Collection</h3>
                <div><span class="btn_1">Shop Now</span></div>
            </div>
        </a>
    </li>
</ul>
<!--/banners_grid -->

<div class="container margin_60_35">
    <div class="main_title">
        <h2>Top Selling</h2>
        <span>Products</span>
        <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
    </div>
    <div class="row small-gutters">
        <!-- product -->
        <div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
                <figure>
                    <span class="ribbon off">-30%</span>
                    <a href="product-detail-1.html">
                        <img class="img-fluid lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/1.jpg" alt="">
                        <img class="img-fluid lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/1_b.jpg" alt="">
                    </a>
                    <div data-countdown="2024/3/15" class="countdown"></div>
                </figure>
                <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                <a href="product-detail-1.html">
                    <h3>Armor Air x Fear</h3>
                </a>
                <div class="price_box">
                    <span class="new_price">$48.00</span>
                    <span class="old_price">$60.00</span>
                </div>
                <ul>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                </ul>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /col -->
        <div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
                <span class="ribbon off">-30%</span>
                <figure>
                    <a href="product-detail-1.html">
                        <img class="img-fluid lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/2.jpg" alt="">
                        <img class="img-fluid lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/2_b.jpg" alt="">
                    </a>
                    <div data-countdown="2024/3/15" class="countdown"></div>
                </figure>
                <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                <a href="product-detail-1.html">
                    <h3>Armor Okwahn II</h3>
                </a>
                <div class="price_box">
                    <span class="new_price">$90.00</span>
                    <span class="old_price">$170.00</span>
                </div>
                <ul>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                </ul>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /col -->
        <div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
                <span class="ribbon off">-50%</span>
                <figure>
                    <a href="product-detail-1.html">
                        <img class="img-fluid lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/3.jpg" alt="">
                        <img class="img-fluid lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/3_b.jpg" alt="">
                    </a>
                    <div data-countdown="2024/3/15" class="countdown"></div>
                </figure>
                <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                <a href="product-detail-1.html">
                    <h3>Armor Air Wildwood ACG</h3>
                </a>
                <div class="price_box">
                    <span class="new_price">$75.00</span>
                    <span class="old_price">$155.00</span>
                </div>
                <ul>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                </ul>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /col -->
        <div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
                <span class="ribbon new">New</span>
                <figure>
                    <a href="product-detail-1.html">
                        <img class="img-fluid lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/4.jpg" alt="">
                        <img class="img-fluid lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/4_b.jpg" alt="">
                    </a>
                </figure>
                <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                <a href="product-detail-1.html">
                    <h3>Armor ACG React Terra</h3>
                </a>
                <div class="price_box">
                    <span class="new_price">$110.00</span>
                </div>
                <ul>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                </ul>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /col -->
        <div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
                <span class="ribbon new">New</span>
                <figure>
                    <a href="product-detail-1.html">
                        <img class="img-fluid lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/4.jpg" alt="">
                        <img class="img-fluid lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/4_b.jpg" alt="">
                    </a>
                </figure>
                <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                <a href="product-detail-1.html">
                    <h3>Armor ACG React Terra</h3>
                </a>
                <div class="price_box">
                    <span class="new_price">$110.00</span>
                </div>
                <ul>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                </ul>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /col -->
        <div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
                <span class="ribbon new">New</span>
                <figure>
                    <a href="product-detail-1.html">
                        <img class="img-fluid lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/4.jpg" alt="">
                        <img class="img-fluid lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/4_b.jpg" alt="">
                    </a>
                </figure>
                <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                <a href="product-detail-1.html">
                    <h3>Armor ACG React Terra</h3>
                </a>
                <div class="price_box">
                    <span class="new_price">$110.00</span>
                </div>
                <ul>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                </ul>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /col -->
        <div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
                <span class="ribbon hot">Hot</span>
                <figure>
                    <a href="product-detail-1.html">
                        <img class="img-fluid lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/7.jpg" alt="">
                        <img class="img-fluid lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/7_b.jpg" alt="">
                    </a>
                </figure>
                <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                <a href="product-detail-1.html">
                    <h3>Armor Air Max 98</h3>
                </a>
                <div class="price_box">
                    <span class="new_price">$115.00</span>
                </div>
                <ul>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                </ul>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /col -->
        <div class="col-6 col-md-4 col-xl-3">
            <div class="grid_item">
                <span class="ribbon hot">Hot</span>
                <figure>
                    <a href="product-detail-1.html">
                        <img class="img-fluid lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/7.jpg" alt="">
                        <img class="img-fluid lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/7_b.jpg" alt="">
                    </a>
                </figure>
                <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                <a href="product-detail-1.html">
                    <h3>Armor Air Max 98</h3>
                </a>
                <div class="price_box">
                    <span class="new_price">$115.00</span>
                </div>
                <ul>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                </ul>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /col -->
    </div>
    <!-- /row -->
</div>
<!-- /container -->

<div class="featured lazy" data-bg="url(<?= BASE_URL ?>public/assets/img/featured_home.jpg)">
    <div class="opacity-mask d-flex align-items-center" data-opacity-mask="rgba(0, 0, 0, 0.5)">
        <div class="container margin_60">
            <div class="row justify-content-center justify-content-md-start">
                <div class="col-lg-6 wow" data-wow-offset="150">
                    <h3>Armor<br>Air Color 720</h3>
                    <p>Lightweight cushioning and durable support with a Phylon midsole</p>
                    <div class="feat_text_block">
                        <div class="price_box">
                            <span class="new_price">$90.00</span>
                            <span class="old_price">$170.00</span>
                        </div>
                        <a class="btn_1" href="listing-grid-1-full.html" role="button">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /featured -->

<div class="container margin_60_35">
    <div class="main_title">
        <h2>Featured</h2>
        <span>Products</span>
        <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
    </div>
    <div class="owl-carousel owl-theme products_carousel">
        <div class="item">
            <div class="grid_item">
                <span class="ribbon new">New</span>
                <figure>
                    <a href="product-detail-1.html">
                        <img class="owl-lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/4.jpg" alt="">
                    </a>
                </figure>
                <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                <a href="product-detail-1.html">
                    <h3>ACG React Terra</h3>
                </a>
                <div class="price_box">
                    <span class="new_price">$110.00</span>
                </div>
                <ul>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                </ul>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /item -->
        <div class="item">
            <div class="grid_item">
                <span class="ribbon new">New</span>
                <figure>
                    <a href="product-detail-1.html">
                        <img class="owl-lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/5.jpg" alt="">
                    </a>
                </figure>
                <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                <a href="product-detail-1.html">
                    <h3>Air Zoom Alpha</h3>
                </a>
                <div class="price_box">
                    <span class="new_price">$140.00</span>
                </div>
                <ul>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                </ul>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /item -->
        <div class="item">
            <div class="grid_item">
                <span class="ribbon hot">Hot</span>
                <figure>
                    <a href="product-detail-1.html">
                        <img class="owl-lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/8.jpg" alt="">
                    </a>
                </figure>
                <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                <a href="product-detail-1.html">
                    <h3>Air Color 720</h3>
                </a>
                <div class="price_box">
                    <span class="new_price">$120.00</span>
                </div>
                <ul>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                </ul>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /item -->
        <div class="item">
            <div class="grid_item">
                <span class="ribbon off">-30%</span>
                <figure>
                    <a href="product-detail-1.html">
                        <img class="owl-lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/2.jpg" alt="">
                    </a>
                </figure>
                <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                <a href="product-detail-1.html">
                    <h3>Okwahn II</h3>
                </a>
                <div class="price_box">
                    <span class="new_price">$90.00</span>
                    <span class="old_price">$170.00</span>
                </div>
                <ul>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                </ul>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /item -->
        <div class="item">
            <div class="grid_item">
                <span class="ribbon off">-50%</span>
                <figure>
                    <a href="product-detail-1.html">
                        <img class="owl-lazy" src="<?= BASE_URL ?>public/assets/img/products/product_placeholder_square_medium.jpg" data-src="<?= BASE_URL ?>public/assets/img/products/shoes/3.jpg" alt="">
                    </a>
                </figure>
                <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div>
                <a href="product-detail-1.html">
                    <h3>Air Wildwood ACG</h3>
                </a>
                <div class="price_box">
                    <span class="new_price">$75.00</span>
                    <span class="old_price">$155.00</span>
                </div>
                <ul>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to favorites"><i class="ti-heart"></i><span>Add to favorites</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to compare"><i class="ti-control-shuffle"></i><span>Add to compare</span></a></li>
                    <li><a href="#0" class="tooltip-1" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to cart"><i class="ti-shopping-cart"></i><span>Add to cart</span></a></li>
                </ul>
            </div>
            <!-- /grid_item -->
        </div>
        <!-- /item -->
    </div>
    <!-- /products_carousel -->
</div>
<!-- /container -->

<div class="bg_gray">
    <div class="container margin_30">
        <div id="brands" class="owl-carousel owl-theme">
            <div class="item">
                <a href="#0"><img src="<?= BASE_URL ?>public/assets/img/brands/placeholder_brands.png" data-src="<?= BASE_URL ?>public/assets/img/brands/logo_1.png" alt="" class="owl-lazy"></a>
            </div><!-- /item -->
            <div class="item">
                <a href="#0"><img src="<?= BASE_URL ?>public/assets/img/brands/placeholder_brands.png" data-src="<?= BASE_URL ?>public/assets/img/brands/logo_2.png" alt="" class="owl-lazy"></a>
            </div><!-- /item -->
            <div class="item">
                <a href="#0"><img src="<?= BASE_URL ?>public/assets/img/brands/placeholder_brands.png" data-src="<?= BASE_URL ?>public/assets/img/brands/logo_3.png" alt="" class="owl-lazy"></a>
            </div><!-- /item -->
            <div class="item">
                <a href="#0"><img src="<?= BASE_URL ?>public/assets/img/brands/placeholder_brands.png" data-src="<?= BASE_URL ?>public/assets/img/brands/logo_4.png" alt="" class="owl-lazy"></a>
            </div><!-- /item -->
            <div class="item">
                <a href="#0"><img src="<?= BASE_URL ?>public/assets/img/brands/placeholder_brands.png" data-src="<?= BASE_URL ?>public/assets/img/brands/logo_5.png" alt="" class="owl-lazy"></a>
            </div><!-- /item -->
            <div class="item">
                <a href="#0"><img src="<?= BASE_URL ?>public/assets/img/brands/placeholder_brands.png" data-src="<?= BASE_URL ?>public/assets/img/brands/logo_6.png" alt="" class="owl-lazy"></a>
            </div><!-- /item -->
        </div><!-- /carousel -->
    </div><!-- /container -->
</div>
<!-- /bg_gray -->

<div class="container margin_60_35">
    <div class="main_title">
        <h2>Latest News</h2>
        <span>Blog</span>
        <p>Cum doctus civibus efficiantur in imperdiet deterruisset</p>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <a class="box_news" href="blog.html">
                <figure>
                    <img src="<?= BASE_URL ?>public/assets/img/blog-thumb-placeholder.jpg" data-src="<?= BASE_URL ?>public/assets/img/blog-thumb-1.jpg" alt="" width="400" height="266" class="lazy">
                    <figcaption><strong>28</strong>Dec</figcaption>
                </figure>
                <ul>
                    <li>by Mark Twain</li>
                    <li>20.11.2017</li>
                </ul>
                <h4>Pri oportere scribentur eu</h4>
                <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
            </a>
        </div>
        <!-- /box_news -->
        <div class="col-lg-6">
            <a class="box_news" href="blog.html">
                <figure>
                    <img src="<?= BASE_URL ?>public/assets/img/blog-thumb-placeholder.jpg" data-src="<?= BASE_URL ?>public/assets/img/blog-thumb-2.jpg" alt="" width="400" height="266" class="lazy">
                    <figcaption><strong>28</strong>Dec</figcaption>
                </figure>
                <ul>
                    <li>By Jhon Doe</li>
                    <li>20.11.2017</li>
                </ul>
                <h4>Duo eius postea suscipit ad</h4>
                <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
            </a>
        </div>
        <!-- /box_news -->
        <div class="col-lg-6">
            <a class="box_news" href="blog.html">
                <figure>
                    <img src="<?= BASE_URL ?>public/assets/img/blog-thumb-placeholder.jpg" data-src="<?= BASE_URL ?>public/assets/img/blog-thumb-3.jpg" alt="" width="400" height="266" class="lazy">
                    <figcaption><strong>28</strong>Dec</figcaption>
                </figure>
                <ul>
                    <li>By Luca Robinson</li>
                    <li>20.11.2017</li>
                </ul>
                <h4>Elitr mandamus cu has</h4>
                <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
            </a>
        </div>
        <!-- /box_news -->
        <div class="col-lg-6">
            <a class="box_news" href="blog.html">
                <figure>
                    <img src="<?= BASE_URL ?>public/assets/img/blog-thumb-placeholder.jpg" data-src="<?= BASE_URL ?>public/assets/img/blog-thumb-4.jpg" alt="" width="400" height="266" class="lazy">
                    <figcaption><strong>28</strong>Dec</figcaption>
                </figure>
                <ul>
                    <li>By Paula Rodrigez</li>
                    <li>20.11.2017</li>
                </ul>
                <h4>Id est adhuc ignota delenit</h4>
                <p>Cu eum alia elit, usu in eius appareat, deleniti sapientem honestatis eos ex. In ius esse ullum vidisse....</p>
            </a>
        </div>
        <!-- /box_news -->
    </div>
    <!-- /row -->
</div>
<!-- /container -->