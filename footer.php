<?php global $lmh_opt;?>

    <footer class="w3l-footer-16">
        <div class="footer-top-16 py-5">
            <div class="container pt-lg-5 pt-md-4 pt-2 pb-lg-4 pb-2">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <h3><?php echo ($lmh_opt['home-about-title'] ?? __('About Us:', 'lmhoang')); ?></h3>
                        <p><?php echo ($lmh_opt['home-about-desc-footer'] ?? get_bloginfo('name') . " " . get_bloginfo('description') ); ?></p>
                        <div class="columns-2 mt-4">
                            <ul class="social">
                                <li>
                                    <a href="https://www.facebook.com/profile.php?id=100086125716330" target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-5 col-sm-6 column ps-xl-5 pe-lg-0 mt-lg-0 mt-4">
                        <h3><?php echo __('Contact Info', 'lmhoang' )?></h3>
                        <ul class="footer-contact-list">
                            <li class="">
                                <i class="fas fa-map-marker-alt"></i><span><?php echo (!empty($lmh_opt['address']) ? $lmh_opt['address'] : '260 Bà Hạt, P.9,Q. 10');?></span>
                            </li>
                            <li class="mt-2">
                                <i class="fas fa-phone-alt"></i>
                                <span><a href="tel:+<?php echo (!empty($lmh_opt['phone']) ? $lmh_opt['phone'] : '84707619481');?>">
                                <?php echo (!empty($lmh_opt['phone']) ? $lmh_opt['phone'] : '84707619481');?></a></span>
                            </li>
                            <li class="">
                                <i class="fas fa-envelope"></i>
                                <span><a href="mailto:<?php echo (!empty($lmh_opt['email']) ? $lmh_opt['email'] : 'hoanglyminh@gmail.com');?>">
                                <?php echo (!empty($lmh_opt['email']) ? $lmh_opt['email'] : 'hoanglyminh@gmail.com');?></a></span>
                            </li>
                        </ul>
                        <div class="footer-botm mt-3">
                            <h6><i class="fas fa-clock"></i> <?php echo __( !empty($lmh_opt['open-hours-title']) ? $lmh_opt['open-hours-title'] : 'Open Hours:', 'lmhoang' )?></h6>
                            <?php if ( !empty($lmh_opt['open-hours']) ) {?> 
                                <?php echo $lmh_opt['open-hours'];?>
                            <?php } else { ?>
                                <p class="mt-2"><span>Mon - Sat</span> : 9Am - 6Pm</p>
                                <p> <span>Sunday</span> : CLOSED</p>
                            <?php } ?>
                            
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-12 column mt-lg-0 mt-4 ps-xl-5">
                        <h3><?php echo __('Subscribe:', 'lmhoang')?></h3>
                        <form action="#" class="subscribe d-flex" method="POST">
                            <input type="email" name="email" placeholder="Email Address" required="">
                            <button class="button-style"><span class="fa fa-paper-plane" aria-hidden="true"></span></button>
                        </form>
                        <p class="mt-4">Subscribe to our mailing list and get updates to your email inbox.</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="copy-section text-center py-4">
            <p class="copy-text py-1">&copy; 2010 - <?php echo date('Y');?> - <?php echo bloginfo("name"); ?>. All rights reserved.</p>
        </div>
    </footer>

</div> <!-- .lmh_wrapper -->

    <button onclick="topFunction()" id="movetop" title="Go to top">
        <span class="fas fa-level-up-alt" aria-hidden="true"></span>
    </button>
    
    <script>
        window.onscroll = function () {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                document.getElementById("movetop").style.display = "block";
            } else {
                document.getElementById("movetop").style.display = "none";
            }
        }

        function topFunction() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
    
    <script src="<?php bloginfo( 'template_url' ) ?>/assets/js/jquery.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/assets/js/modernizr-2.6.2.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/assets/js/jquery.zoomslider.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/assets/js/theme-change.js"></script>

    <script>
       
        jQuery(".navbar-toggler").on("click", function () {
            jQuery("header").toggleClass("active");
        });

        jQuery(document).on("ready", function () {
            if (jQuery(window).width() > 991) {
                jQuery("header").removeClass("active");
            }
            jQuery(window).on("resize", function () {
                if (jQuery(window).width() > 991) {
                    jQuery("header").removeClass("active");
                }
            });
            var scroll = jQuery(window).scrollTop();
            if (scroll >= 80) {
                jQuery("#site-header").addClass("nav-fixed");
            } else {
                jQuery("#site-header").removeClass("nav-fixed");
            }
        });

        jQuery(window).on("scroll", function () {
            var scroll = jQuery(window).scrollTop();
            if (scroll >= 80) {
                jQuery("#site-header").addClass("nav-fixed");
            } else {
                jQuery("#site-header").removeClass("nav-fixed");
            }
        });
        
    </script>
   
    <script>
        jQuery(function () {
            jQuery('.navbar-toggler').click(function () {
                jQuery('body').toggleClass('noscroll');
            })
        });
    </script>

    <script src="<?php bloginfo( 'template_url' ) ?>/assets/js/bootstrap.min.js"></script>

    <?php wp_footer() ?>
    
</body>
</html>