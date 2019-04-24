<body>
<div class="portfolio-work-section" id="portfolio">
    <div class="container">
        <div class="our-work-section-head text-center">
            <h3>Fotolavhalar</h3>
        </div>
        <?php global $ozgaruvchi;?>
        <div id="portfoliolist">
            <?php foreach ($data['list_img'] as $item):?>
            <div class="portfolio">
                <div class="portfolio-wrapper grid_box">
                    <a href="<?=$ozgaruvchi['rasmAddress'].$item['rasmlar']?>" class="swipebox"  title="Image Title">
                        <img style="width: 900px; height: 400px" src="<?=$ozgaruvchi['rasmAddress'].$item['rasmlar']?>" class="img-responsive" alt="">
                        <span class="zoom-icon"></span>
                    </a>
                </div>
            </div>
            <?php endforeach;?>
            <div>
                <div class="clearfix"></div>
            </div>
            <!-- Script for gallery Here -->
            <script type="text/javascript" src="styles/js/jquery.mixitup.min.js"></script>
            <script type="text/javascript">
                $(function () {

                    var filterList = {

                        init: function () {

                            // MixItUp plugin
                            // http://mixitup.io
                            $('#portfoliolist').mixitup({
                                targetSelector: '.portfolio',
                                filterSelector: '.filter',
                                effects: ['fade'],
                                easing: 'snap',
                                // call the hover effect
                                onMixEnd: filterList.hoverEffect()
                            });

                        },

                        hoverEffect: function () {

                            // Simple parallax effect
                            $('#portfoliolist .portfolio').hover(
                                function () {
                                    $(this).find('.label').stop().animate({bottom: 0}, 200, 'easeOutQuad');
                                    $(this).find('img').stop().animate({top: -30}, 500, 'easeOutQuad');
                                },
                                function () {
                                    $(this).find('.label').stop().animate({bottom: -40}, 200, 'easeInQuad');
                                    $(this).find('img').stop().animate({top: 0}, 300, 'easeOutQuad');
                                }
                            );

                        }

                    };

                    // Run the show!
                    filterList.init();
                });
            </script>
            <!-- Gallery Script Ends -->
        </div>
    </div>
</div>
<!-- portfolio-section-ends -->

</body>