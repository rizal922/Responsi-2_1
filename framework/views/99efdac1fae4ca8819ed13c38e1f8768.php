<?php $__env->startSection('pageTitle', isset($pageTitle) ? $pageTitle : 'Page title'); ?>
<?php $__env->startSection('content'); ?>

<!-- Home Section Start -->
<section class="home-section pt-2">
    <div class="container-fluid-lg">
        <div class="row g-4">
            <div class="col-xl-8 ratio_65">
                <div class="home-contain h-100 ">
                    <div class="h-100">
                        <img src="/front/images/home-banner-1.png" class="bg-img blur-up lazyload" alt>
                    </div>
                    <div class="home-detail p-center-left w-75">
                        <div>
                            <h1 class="text-uppercase">Tetap di rumah &
                            Siap mengirim <span class="daily">Kebutuhan Gaming Anda</span></h1>
                            <p class="w-75 d-none d-sm-block">Raih kemenangan dengan peralatan gaming premium berkualitas tinggi. Dari mouse gaming presisi tinggi, keyboard mekanik responsive, monitor gaming resolusi tajam, hingga kursi gaming ergonomis - semua ada di satu tempat!</p>
                            <button onclick="location.href = 'javascript:void(0)';"
                                class="btn btn-animation mt-xxl-4 mt-2 home-button mend-auto">Belanja Sekarang <i class="fa fa-arrow-right icon"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 ratio_65">
                <div class="row g-4">
                    <div class="col-xl-12 col-md-6">
                        <div class="home-contain">
                            <img src="/front/images/home-banner-2.png" class="bg-img blur-up lazyload" alt>
                            <div class="home-detail p-center-left home-p-sm w-75">
                                <div>
                                    <h2 class="mt-0 banner-label-color">BEST
                                        <span class="discount text-title">On</span>
                                    </h2>
                                    <h3 class="theme-color">Peralatan Gaming</h3>
                                    <p class="w-75">Produk 100% Original dengan Garansi Resmi</p>
                                    <a href="javascript:void(0)" class="shop-button">Beli Sekarang <i
                                            class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12 col-md-6">
                        <div class="home-contain">
                            <img src="/front/images/home-banner-3.png" class="bg-img blur-up lazyload" alt>
                            <div class="home-detail p-center-left home-p-sm w-75">
                                <div>
                                    <h3 class="mt-0 theme-color fw-bold">Monitor Gaming</h3>
                                    <h4 class="banner-label-color">Harga Bersaing dengan Promo Menarik</h4>
                                    <p class="organic">Pilihan Terbaik hanya ada di kami</p>
                                    <a href="javascript:void(0)" class="shop-button">Beli Sekarang <i
                                            class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Home Section End -->

 <!-- Product Section Start -->
 <section class="product-section">
    <div class="container-fluid-lg">
        <div class="row g-sm-4 g-3">
            <div class="col-xxl-3 col-xl-4 d-none d-xl-block">
                <div class="p-sticky">
                    <div class="category-menu">
                        <h3>Kategori</h3>
                        <?php if( count(get_categories()) > 0 ): ?>
                            
                       
                        <ul>
                            <?php $__currentLoopData = get_categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                           
                            <li>
                                <div class="category-list">
                                    <img src="/images/categories/<?php echo e($category->category_image); ?>" class="blur-up lazyload" alt>
                                    <h5>
                                        <a href="javascript:void(0)"><?php echo e($category->category_name); ?></a>
                                    </h5>
                                </div>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                        <?php endif; ?>

                    </div>

                    <div class="section-t-space">
                        <div class="category-menu">
                            <h3>Produk Populer</h3>

                            <ul class="product-list border-0 p-0 d-block">
                                <li>
                                    <div class="offer-product">
                                        <a href="product-detail.html" class="offer-image">
                                            <img src="/front/images/mouse1.png"
                                                class="blur-up lazyload" alt>
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-detail.html" class="text-title">
                                                    <h6 class="name">Razer DeathAdder V3 Pro</h6>
                                                </a>
                                                <span>BLACK</span>
                                                <h6 class="price theme-color">Rp
                                                    2.899.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-detail.html" class="offer-image">
                                            <img src="/front/images/mouse2.png"
                                                class="blur-up lazyload" alt>
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-detail.html" class="text-title">
                                                    <h6 class="name">Razer Basilisk V3</h6>
                                                </a>
                                                <span>BLACK</span>
                                                <h6 class="price theme-color">Rp
                                                    619.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="offer-product">
                                        <a href="product-detail.html" class="offer-image">
                                            <img src="/front/images/mouse3.png"
                                                class="blur-up lazyload" alt>
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-detail.html" class="text-title">
                                                    <h6 class="name">Razer Basilisk V3 Pro</h6>
                                                </a>
                                                <span>BLACK</span>
                                                <h6 class="price theme-color">Rp
                                                2.506.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li class="mb-0">
                                    <div class="offer-product">
                                        <a href="product-detail.html" class="offer-image">
                                            <img src="/front/images/mouse4.png"
                                                class="blur-up lazyload" alt>
                                        </a>

                                        <div class="offer-detail">
                                            <div>
                                                <a href="product-detail.html" class="text-title">
                                                    <h6 class="name">Razer Basilisk V3 Pro 35K</h6>
                                                </a>
                                                <span>WHITE</span>
                                                <h6 class="price theme-color">Rp
                                                2.799.000</h6>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xxl-9 col-xl-8">
                <div class="title title-flex">
                    <div>
                        <h2>Baru Datang</h2>
                        <p>Jangan biarkan setup biasa menghalangi potensi gaming Anda! 
                            Upgrade sekarang dan rasakan sensasi bermain yang lebih immersive dengan peralatan gaming profesional.</p>
                    </div>
                </div>

                <div class="section-b-space">
                    <div class="product-border border-row overflow-hidden">
                        <div class="product-box-slider no-arrow">
                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/c1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">
                                                    Terraflex TR-1 Gaming Chair</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">Rp 1.749.000</span>
                                                    <del>Rp 2.200.000</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color outstock">Out
                                                        of Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Tambah
                                                        Ke Keranjang</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/c2.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">
                                                        SAGE Premium Quality Gaming Chair</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">Rp 1.688.000</span>
                                                    <del>Rp 3.500.000</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Tambah
                                                        Ke Keranjang</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/c3.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">
                                                    Titan Throne V2 Series Premium Quality Seat Kursi Gaming Chair with Footrest
                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">Rp1.330.000</span>
                                                    <del>Rp 1.800.000</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Tambah
                                                        Ke Keranjang</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/m1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">KTC Monitor gaming 32 inci HVA lengkung 1500R 2K 165HZ 
                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">Rp 2.699.000</span>
                                                    <del>Rp 4.999.999</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Tambah
                                                        Ke Keranjang</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/m2.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">Monitor Xiaomi LED G34WQi - WQHD 34" Inch
                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">Rp 3.965.000
                                                    </span>
                                                    <del>Rp 4.145.000</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Tambah
                                                        Ke Keranjang</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/m3.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">BenQ MOBIUZ EX270M 27” 1ms 240Hz FHD Gaming Monitor</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">Rp 6.999.000
                                                    </span>
                                                    <del>Rp 9.724.000</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Tambah
                                                        Ke Keranjang</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/m4.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">Asus Led Monitor Gaming Vg27Aq3A 27" 180Hz Ips Qhd Hdmi Dp</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">Rp 2.994.000</span>
                                                    <del>Rp 3.500.000</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Tambah
                                                        Ke Keranjang</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/product img place holder 1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">ASUS PC ROG STRIX I7 14700F RTX3050 8GB/ 16GB 1TB W11+OHS GRY -7F10135T0WSO</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">Rp 21.999.000</span>
                                                    <del>Rp 30.000.000</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Tambah
                                                        Ke Keranjang</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/product img place holder 1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">Dictum
                                                        fames habitant
                                                        curabitur primis
                                                        turpis
                                                        odio laoreet
                                                        lobortis</h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$77.11</span>
                                                    <del>86.75</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/product img place holder 1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">Pellentesque
                                                        sagittis magnis
                                                        torquent potenti
                                                        dui facilisis
                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$22.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div>
                                <div class="row m-0">
                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/product img place holder 1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">Condimentum
                                                        magna sociis
                                                        lacinia quisque
                                                        porta
                                                        eros nulla
                                                        suspendisse
                                                        sollicitudin
                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$88.45</span>
                                                    <del>97.26</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-12 px-0">
                                        <div class="product-box">
                                            <div class="product-image">
                                                <a href="product-detail.html">
                                                    <img src="/front/images/product img place holder 1.png"
                                                        class="img-fluid blur-up lazyload" alt>
                                                </a>
                                                <ul class="product-option">
                                                    <li title="View">
                                                        <a href="javascript:void(0)" data-bs-toggle="modal"
                                                            data-bs-target="#view">
                                                            <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Compare">
                                                        <a href="compare.html">
                                                            <i class="icon-copy dw dw-exchange"></i>
                                                        </a>
                                                    </li>

                                                    <li title="Wishlist">
                                                        <a href="wishlist.html" class="notifi-wishlist">
                                                            <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-detail">
                                                <a href="product-detail.html">
                                                    <h6 class="name">Aliquet
                                                        vehicula
                                                        accumsan justo
                                                        rhoncus erat
                                                        venenatis varius
                                                    </h6>
                                                </a>

                                                <h5 class="sold text-content">
                                                    <span class="theme-color price">$16.69</span>
                                                    <del>28.56</del>
                                                </h5>

                                                <div class="product-rating mt-2">
                                                    <ul class="rating">
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star rating-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-star no-rating-color"></i>
                                                        </li>
                                                    </ul>

                                                    <h6 class="theme-color">In
                                                        Stock</h6>
                                                </div>

                                                <div class="add-to-cart-box mt-2">
                                                    <a href="cart.html"
                                                        class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                            class="icon-copy bi bi-cart-plus-fill"></i>
                                                        Add
                                                        To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="title">
                    <h2>Berbelanja berdasarkan Kategori

</h2>
                    <p>Temukan berbagai kategori produk pilihan kami yang telah dikelompokkan untuk memudahkan Anda dalam berbelanja sesuai dengan kebutuhan.</p>
                </div>

                <?php if( count(get_categories()) > 0 ): ?>
                    
               
                <div class="category-slider-2 product-wrapper no-arrow">
                    <?php $__currentLoopData = get_categories(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        
                    
                    <div>
                        <a href="javascript:void(0)" class="category-box">
                            <div>
                                <img src="/images/categories/<?php echo e($category->category_image); ?>" class="blur-up lazyload" alt>
                                <h5><?php echo e($category->category_name); ?></h5>
                            </div>
                        </a>
                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <?php endif; ?>

                <div class="title d-block">
                    <h2>Produk Terlaris</h2>
                    <p>Jelajahi koleksi produk terlaris kami yang telah menjadi favorit dan mendapat kepercayaan dari ribuan pelanggan setia.</p>
                </div>

                <div class="product-border overflow-hidden wow fadeInUp">
                    <div class="product-box-slider no-arrow">
                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="/front/images/pc3.png"
                                                    class="img-fluid blur-up lazyload" alt>
                                            </a>
                                            <ul class="product-option">
                                                <li title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                    </a>
                                                </li>

                                                <li title="Compare">
                                                    <a href="compare.html">
                                                        <i class="icon-copy dw dw-exchange"></i>
                                                    </a>
                                                </li>

                                                <li title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-detail.html">
                                                <h6 class="name h-100">PC Rakitan MSI - GAMING & CREATOR D5 3X ZERO | Intel i7-13700F | 32GB | RTX 4070 | SSD NVMe</h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">Rp 34.790.000</span>
                                                <del>Rp 35.000.000</del>
                                            </h5>

                                            <div class="product-rating mt-2">
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star no-rating-color"></i>
                                                    </li>
                                                </ul>

                                                <h6 class="theme-color">In
                                                    Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box mt-2">
                                                <a href="cart.html"
                                                    class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                        class="icon-copy bi bi-cart-plus-fill"></i>
                                                    Tambah Ke
                                                    Keranjang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="/front/images/pc2.png"
                                                    class="img-fluid blur-up lazyload" alt>
                                            </a>
                                            <ul class="product-option">
                                                <li title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                    </a>
                                                </li>

                                                <li title="Compare">
                                                    <a href="compare.html">
                                                        <i class="icon-copy dw dw-exchange"></i>
                                                    </a>
                                                </li>

                                                <li title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-detail.html">
                                                <h6 class="name h-100">GAMING POINT AQUA INTEL GEN 12 - PC Rakitan Intel Core I5 12400F | 32GB | RTX 4060 Ti | SSD NVMe</h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">Rp 14.322.000</span>
                                                <del>Rp 15.000.000</del>
                                            </h5>

                                            <div class="product-rating mt-2">
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star no-rating-color"></i>
                                                    </li>
                                                </ul>

                                                <h6 class="theme-color">In
                                                    Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box mt-2">
                                                <a href="cart.html"
                                                    class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                        class="icon-copy bi bi-cart-plus-fill"></i>
                                                    Tambah Ke
                                                    Keranjang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="/front/images/pc1.png"
                                                    class="img-fluid blur-up lazyload" alt>
                                            </a>
                                            <ul class="product-option">
                                                <li title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                    </a>
                                                </li>

                                                <li title="Compare">
                                                    <a href="compare.html">
                                                        <i class="icon-copy dw dw-exchange"></i>
                                                    </a>
                                                </li>

                                                <li title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-detail.html">
                                                <h6 class="name h-100">PC Rakitan MSI - GAMING & CREATOR | Intel i5-12400F | 16GB | GTX 1650 | SSD NVMe</h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">Rp 8.360.000</span>
                                                <del>Rp 9.500.000</del>
                                            </h5>

                                            <div class="product-rating mt-2">
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star no-rating-color"></i>
                                                    </li>
                                                </ul>

                                                <h6 class="theme-color">In
                                                    Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box mt-2">
                                                <a href="cart.html"
                                                    class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                        class="icon-copy bi bi-cart-plus-fill"></i>
                                                    Tambah Ke
                                                    Keranjang</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="/front/images/product img place holder 1.png"
                                                    class="img-fluid blur-up lazyload" alt>
                                            </a>
                                            <ul class="product-option">
                                                <li title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                    </a>
                                                </li>

                                                <li title="Compare">
                                                    <a href="compare.html">
                                                        <i class="icon-copy dw dw-exchange"></i>
                                                    </a>
                                                </li>

                                                <li title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-detail.html">
                                                <h6 class="name h-100">Nullam
                                                    tincidunt vitae per
                                                    malesuada dapibus
                                                    hendrerit odio.</h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">$76.79</span>
                                                <del>87.56</del>
                                            </h5>

                                            <div class="product-rating mt-2">
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star no-rating-color"></i>
                                                    </li>
                                                </ul>

                                                <h6 class="theme-color">In
                                                    Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box mt-2">
                                                <a href="cart.html"
                                                    class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                        class="icon-copy bi bi-cart-plus-fill"></i>
                                                    Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="/front/images/product img place holder 1.png"
                                                    class="img-fluid blur-up lazyload" alt>
                                            </a>
                                            <ul class="product-option">
                                                <li title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                    </a>
                                                </li>

                                                <li title="Compare">
                                                    <a href="compare.html">
                                                        <i class="icon-copy dw dw-exchange"></i>
                                                    </a>
                                                </li>

                                                <li title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-detail.html">
                                                <h6 class="name h-100">Nibh
                                                    pretium fringilla
                                                    vulputate gravida
                                                    dictumst mi</h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">$36.69</span>
                                                <del>68.56</del>
                                            </h5>

                                            <div class="product-rating mt-2">
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star no-rating-color"></i>
                                                    </li>
                                                </ul>

                                                <h6 class="theme-color">In
                                                    Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box mt-2">
                                                <a href="cart.html"
                                                    class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                        class="icon-copy bi bi-cart-plus-fill"></i>
                                                    Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="row m-0">
                                <div class="col-12 px-0">
                                    <div class="product-box">
                                        <div class="product-image">
                                            <a href="product-detail.html">
                                                <img src="/front/images/product img place holder 1.png"
                                                    class="img-fluid blur-up lazyload" alt>
                                            </a>
                                            <ul class="product-option">
                                                <li title="View">
                                                    <a href="javascript:void(0)" data-bs-toggle="modal"
                                                        data-bs-target="#view">
                                                        <i class="ijaboIcon sx-1 dw dw-eye"></i>
                                                    </a>
                                                </li>

                                                <li title="Compare">
                                                    <a href="compare.html">
                                                        <i class="icon-copy dw dw-exchange"></i>
                                                    </a>
                                                </li>

                                                <li title="Wishlist">
                                                    <a href="wishlist.html" class="notifi-wishlist">
                                                        <i class="ijaboIcon sx-1 dw dw-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="product-detail">
                                            <a href="product-detail.html">
                                                <h6 class="name h-100">Quam
                                                    mus habitant congue
                                                    rhoncus tristique
                                                </h6>
                                            </a>

                                            <h5 class="sold text-content">
                                                <span class="theme-color price">$26.69</span>
                                                <del>28.56</del>
                                            </h5>

                                            <div class="product-rating mt-2">
                                                <ul class="rating">
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star rating-color"></i>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-star no-rating-color"></i>
                                                    </li>
                                                </ul>

                                                <h6 class="theme-color">In
                                                    Stock</h6>
                                            </div>

                                            <div class="add-to-cart-box mt-2">
                                                <a href="cart.html"
                                                    class="btn btn-md bg-dark cart-button text-white w-100 btn-bg-color"><i
                                                        class="icon-copy bi bi-cart-plus-fill"></i>
                                                    Add To
                                                    Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="section-t-space">
                    <div class="banner-contain hover-effect">
                    <img src="/front/images/c.png" class="bg-img blur-up lazyload" alt="Gaming Setup">                        <div class="banner-details p-center banner-b-space w-100 text-center">
                            <div>
                                <h6 class="ls-expanded theme-color mb-sm-3 mb-1">PRODUK TERBAIK</h6>
                                <h2 class="banner-title">GAMING</h2>
                                <h5 class="lh-sm mx-auto mt-1 text-content">SALE
                                    8% OFF</h5>
                                <button onclick="location.href = 'javascript:void(0)';"
                                    class="btn btn-animation btn-sm mx-auto mt-sm-3 mt-2">Belanja
                                    Sekarang <i class="fa fa-arrow-right icon"></i></button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="title section-t-space">
                    <h2>Rekomendasi Set Up Gaming</h2>
                    <p>Wujudkan setup gaming impian Anda. Dari setup minimalis hingga premium, temukan inspirasi untuk menciptakan ruang gaming yang nyaman dan aesthetic sesuai kebutuhan Anda.</p>
                </div>

                <div class="slider-3-blog ratio_65 no-arrow product-wrapper mb-4">
                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <a href="blog-detail.html" class="blog-image">
                                    <img src="/front/images/1.png" class="bg-img blur-up lazyload" alt>
                                </a>
                            </div>

                            <a href="blog-detail.html" class="blog-detail">
                                <h6>13 Jun, 2024</h6>
                                <h5>Ruangan bergaya minimalis modern dengan panel dinding 3D geometris, rak mengambang, dan tanaman hias yang menciptakan tampilan kontemporer yang elegan.</h5>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <a href="blog-detail.html" class="blog-image">
                                    <img src="/front/images/2.png" class="bg-img blur-up lazyload" alt>
                                </a>
                            </div>

                            <a href="blog-detail.html" class="blog-detail">
                                <h6>10 March, 2024</h6>
                                <h5>Setup gaming dan ruang kerja dengan dua monitor, meja putih, kursi gaming, dan penataan kabel yang rapi dalam ruangan dengan pencahayaan yang baik.</h5>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <a href="blog-detail.html" class="blog-image">
                                    <img src="/front/images/3.png" class="bg-img blur-up lazyload" alt>
                                </a>
                            </div>

                            <a href="blog-detail.html" class="blog-detail">
                                <h6>10 April, 2024</h6>
                                <h5>Setup gaming minimalis dengan meja L kayu yang elegan, dilengkapi rak buku untuk workspace yang produktif dan nyaman.</h5>
                            </a>
                        </div>
                    </div>

                    <div>
                        <div class="blog-box">
                            <div class="blog-box-image">
                                <a href="blog-detail.html" class="blog-image">
                                    <img src="/front/images/4.png" class="bg-img blur-up lazyload" alt>
                                </a>
                            </div>

                            <a href="blog-detail.html" class="blog-detail">
                                <h6>20 March, 2024</h6>
                                <h5>Setup gaming aesthetic dengan nuansa pink yang eye-catching, dipadu dengan koleksi poster anime yang menambah karakter personal pada ruang gaming Anda.</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('front.layout.pages-layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Build-Laravel-10-Multi-Vendor-ECommerce-project-main\resources\views/front/pages/home.blade.php ENDPATH**/ ?>