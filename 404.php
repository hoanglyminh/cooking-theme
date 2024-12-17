<!doctype html>
<html <?php language_attributes() ?>>
<head>
    <meta charset="<?php bloginfo('charset')?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo( 'template_url' ) ?>/assets/css/style-liberty.css?v=<?php echo (time());?>">
</head>

<body>

    <section class="w3l-errorhny-main text-center">
        <div class="container">
            <svg viewbox="0 0 100 20">
                <defs>
                    <linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
                        <stop offset="5%" stop-color="#f50537" />
                        <stop offset="95%" stop-color="#f50537" />
                    </linearGradient>
                    <pattern id="wave" x="0" y="0" width="120" height="20" patternUnits="userSpaceOnUse">
                        <path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)">
                            <animateTransform attributeName="transform" begin="0s" dur="1.5s" type="translate" from="0,0" to="40,0" repeatCount="indefinite" />
                        </path>
                    </pattern>
                </defs>
                <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#wave)" fill-opacity="0.6">ERROR</text>
                <text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#gradient)" fill-opacity="0.1">ERROR</text>
            </svg>
            <div class="w3errorhny-inf text-center">
                <p>Sorry, we're offline right now to make our site even better. Please, comeback later and check what we've been upto.</p>
                <form class="search-form mt-5" action="/" method="get">
                    <input class="form-control" type="search" name="s" placeholder="<?php echo __("Search here" , "lmhoang");?>" required="">
                    <button class="btn btn-style search-error" type="submit"><?php echo __("Search" , "lmhoang");?></button>
                </form>
                <a href="/" class="btn mt-5"><i class="fas fa-arrow-left ms-2"></i> <?php echo __("Back to Home" , "lmhoang");?> </a>
            </div>
        </div>
    </section>

</body>
</html>