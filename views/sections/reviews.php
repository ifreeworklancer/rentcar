<!-- Reviews -->
<section id="reviews">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-sm-6 col-xl-5">
                <h2 class="section-title">
                    <?= $reviews['title']; ?>
                </h2>
            </div>
        </div>
        <div class="reviews-slider">
            <?php
            foreach ($reviews['item'] as $item) {
                echo
                    '<div class="reviews-slider-item"><div class="row w-100 m-0">'
                    . '<div class="col-lg-6 col-xl-5 px-0 order-2 order-lg-1">'
                    . '<div class="content">'
                    . '<div class="content-item">'
                    . '<div class="decor">'
                    . '<div class="decor-icon">'
                    . '<svg width="30" height="25">'
                    . '<use xlink:href="#quote-icon"></use>'
                    . '</svg>'
                    . '</div>'
                    . '<div class="decor-line"></div>'
                    . '</div>'
                    . '<div class="text">'
                    . '<p>' . $item['text'] . '</p>'
                    . '</div>'
                    . '</div>'
                    . '</div>'
                    . '</div>'
                    . '<div class="col-lg-6 col-xl-7 px-0 order-1 order-lg-2">'
                    . '<div class="prev">'
                    . '<div class="img" style="background-image:url(' . $item['image'] . ');"></div>'
                    . '<div class="name">' . $item['name'] . '</div>'
                    . '</div>'
                    . '</div>'
                    . '</div></div>';
            }
            ?>
        </div>
        <div class="slider-arrow">
            <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-reviews">
                <svg width="25" height="20">
                    <use xlink:href="#prev-arrow-icon"></use>
                </svg>
            </div>
            <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-reviews">
                <svg width="25" height="20">
                    <use xlink:href="#next-arrow-icon"></use>
                </svg>
            </div>
        </div>
    </div>
</section>