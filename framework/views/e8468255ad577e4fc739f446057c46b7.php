<footer class="section-t-space">
    <div class="container-fluid-lg">
        <div class="main-footer section-b-space section-t-space">
            <div class="row g-md-4 g-3">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-logo">
                        <div class="theme-logo">
                            <a href="/">
                                <img src="/images/site/<?php echo e(get_settings()->site_logo); ?>" class="blur-up lazyload" alt>
                            </a>
                        </div>

                        <div class="footer-logo-contain">
                            <p><?php echo e(get_settings()->site_meta_description); ?></p>

                            <ul class="address">
                                <li>
                                    <i data-feather="home"></i>
                                    <a href="http://maps.google.com/maps?q=<?= urlencode(get_settings()->site_address) ?>" target="_blank"><?php echo e(get_settings()->site_address); ?></a>
                                </li>
                                <li>
                                    <i data-feather="mail"></i>
                                    <a href="mailto:<?php echo e(get_settings()->site_email); ?>"><?php echo e(get_settings()->site_email); ?></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6">
                    <div class="footer-title">
                        <h4>Kategori</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="javascript:void(0)" class="text-content">Monitor</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="text-content">Keyboard</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="text-content">Mouse</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="text-content">Kursi</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="text-content">Meja</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="text-content">Video Games</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl col-lg-2 col-sm-3">
                    <div class="footer-title">
                        <h4>Quick Links</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="shop.html" class="text-content">Toko</a>
                            </li>
                            <li>
                                <a href="about-us.html" class="text-content">Tentang Kami</a>
                            </li>
                            <li>
                                <a href="blog.html" class="text-content">Blog</a>
                            </li>
                            <li>
                                <a href="contact-us.html" class="text-content">Kontak Kami</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="text-content">Kebijakan Pribadi</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="text-content">Peta situs kami</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-2 col-sm-3">
                    <div class="footer-title">
                        <h4>Pusat Bantuan</h4>
                    </div>

                    <div class="footer-contain">
                        <ul>
                            <li>
                                <a href="success.html" class="text-content">Pesanan Anda</a>
                            </li>
                            <li>
                                <a href="user-dashboard.html" class="text-content">Akun Anda</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="text-content">Lacak Pesanan</a>
                            </li>
                            <li>
                                <a href="wishlist.html" class="text-content">Daftar Keinginan Anda</a>
                            </li>
                            <li>
                                <a href="search.html" class="text-content">Cari</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="text-content">FAQ</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="footer-title">
                        <h4>Kontak Kami</h4>
                    </div>

                    <div class="footer-contact">
                        <p>Apakah Anda memiliki pertanyaan atau saran?</p>
                        <ul>
                            <li>
                                <div class="footer-number">
                                    <i data-feather="phone"></i>
                                    <div class="contact-number">
                                        <h6 class="text-content">Hotline
                                            24/7 :</h6>
                                        <h5><?php echo e(get_settings()->site_phone); ?></h5>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="footer-number">
                                    <i data-feather="mail"></i>
                                    <div class="contact-number">
                                        <h6 class="text-content">Alamat Email :</h6>
                                        <h5><?php echo e(get_settings()->site_email); ?></h5>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="sub-footer section-small-space">
            <div class="reserve">
                <h6 class="text-content">&copy; Copyright
                    <script>document.write(new Date().getFullYear());</script>
                    GearGamers. All rights reserved
                </h6>
            </div>

            <div class="payment">
                <img src="/front/images/.png" class="blur-up lazyload" alt>
            </div>

            <div class="social-link">
                <h6 class="text-content">Tetap Terhubung :</h6>
                <ul>
                    <li>
                        <a href="<?php echo e(get_social_network()->facebook_url); ?>" target="_blank">
                            <i class="ijaboIcon icon-copy bi bi-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(get_social_network()->twitter_url); ?>" target="_blank">
                            <i class="ijaboIcon icon-copy bi bi-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(get_social_network()->instagram_url); ?>" target="_blank">
                            <i class="ijaboIcon icon-copy bi bi-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo e(get_social_network()->youtube_url); ?>" target="_blank">
                            <i class="ijaboIcon icon-copy bi bi-youtube"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer><?php /**PATH C:\xampp\htdocs\Build-Laravel-10-Multi-Vendor-ECommerce-project-main\resources\views/front/layout/inc/footer.blade.php ENDPATH**/ ?>