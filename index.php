<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TITE GIFT</title>
    <link rel="stylesheet" type="text/css" href="assets/plugins/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/slick/slick-theme.css" />
    <link rel="stylesheet" type="text/css" href="assets/plugins/fontawesome-pro/css/all.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/styles.css?v=<?= time() ?>" />
</head>

<body>
    <div class="sidebar">

    </div>
    <div class="header">
        <div class="menu-left float-left mt-2">
            <a href="javascript:void(0);" onclick="showsidebar()"><i class="far fa-bars"></i></a>
        </div>
        <div class="menu-right float-right mt-2">
            <a href=""><i class="far fa-search"></i></a>
            <a href=""><i class="far fa-heart"></i></a>
            <a href=""><i class="far fa-shopping-bag"></i></a>
            <a href=""><i class="far fa-user-circle"></i></a>
        </div>
        <div class="brand-logo">
            <img src="assets/images/Logo_tite_gift_putih.png" />
        </div>

    </div>
    <div class="banner">
        <div><img data-lazy="assets/images/banner/banner1.png" /></div>
        <div><img data-lazy="assets/images/banner/banner2.jpg" /></div>
    </div>
    <div class="section">
        <div class="container">
            <div class="cat-home">
                <div class="img-cat text-center">
                    <img src="assets/images/pouch.jpg" style="width: 100%;" />
                    <h4 class="img-cat-title">POUCH</h4>
                </div>
                <div class="img-cat text-center">
                    <img src="assets/images/pouch.jpg" style="width: 100%;" />
                    <h4 class="img-cat-title">MASK</h4>
                </div>
                <div class="img-cat text-center">
                    <img src="assets/images/sajdah.png" style="width: 100%;" />
                    <h4 class="img-cat-title">SAJDAH</h4>
                </div>
                <div class="img-cat text-center">
                    <img src="assets/images/pouch.jpg" style="width: 100%;" />
                    <h4 class="img-cat-title">TOTE BAG</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="section">

    </div>
    <script src="assets/js/jquery-3.5.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/plugins/slick/slick.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.banner').slick({
                lazyLoad: 'ondemand',
                slidesToShow: 1,
                slidesToScroll: 1,
                //autoplay: true,
                autoplaySpeed: 7000,
                arrows: true,
                dots: true
            });
            $(document).on('click', '.darkness', function() {
                $(".sidebar").removeClass('show');
                $(".darkness").remove();
            })
            $('.cat-home').slick({
                lazyLoad: 'ondemand',
                slidesToShow: 4,
                slidesToScroll: 1,
                //autoplay: true,
                autoplaySpeed: 7000,
                arrows: false,
                dots: false,
                responsive: [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    }
                    // You can unslick at a given breakpoint now by adding:
                    // settings: "unslick"
                    // instead of a settings object
                ]
            });
        })


        function showsidebar() {
            $(".sidebar").addClass('show');
            $("body").prepend('<div class="darkness"></div>');
        }
    </script>
</body>

</html>