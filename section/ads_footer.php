
<?php global $lmh_opt; ?>

<?php if( isset($lmh_opt['cus-ads-footer']) && $lmh_opt['cus-ads-footer'] ) { ?>
    <div class="container py-3">
        <?php if( empty($lmh_opt['cus-ads-footer-script']) ) { ?>
            
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4362531490653540" crossorigin="anonymous"></script>
                <!-- NoiTroTaiGia -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-4362531490653540"
                    data-ad-slot="9077079475" data-ad-format="auto" data-full-width-responsive="true">
                </ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            
        <?php } else { ?>
            <?php echo $lmh_opt['cus-ads-footer-script']; ?>
        <?php } ?>
    </div>
<?php } ?>