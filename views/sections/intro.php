<!-- Intro -->
<section id="intro">
    <div class="container-fluid h-100 px-0">
        <div class="intro-slider h-100">
            <?php
            foreach ($intro['item'] as $item) {
                echo
                    '<div class="intro-slider-item h-100"><div class="row w-100 m-0 h-100">'
                    . '<div class="col-sm-7 col-lg-8 col-xl-9 px-0 h-100">'
                    . '<div class="img" style="background-image: url(' . $item['image'] . ');"></div>'
                    . '<div class="description">'
                    . '<h1 class="description__title">' . $item['main_title'] . '</h1>'
                    . '<div class="description__subtitle">' . $item['main_subtitle'] . '</div>'
                    . '</div>'
                    . '</div>'
                    . '<div class="col-sm-5 col-lg-4 col-xl-3 px-0">'
                    . '<div class="content h-100">'
                    . '<div class="content-item">'
                    . '<h2 class="title">' . $item['title'] . '</h2>'
                    . '<div class="info-car">'
                    . '<div class="info-car-title">Краткое описание характеристик:</div>'
                    . '<div class="info-car-item">'
                    . '<span class="info-car-item__title">Кузов:</span><span class="info-car-item__value">' . $item['body'] . '</span>'
                    . '</div>'
                    . '<div class="info-item">'
                    . '<span class="info-car-item__title">Вместимость:</span><span class="info-car-item__value">' . $item['capacity'] . '</span>'
                    . '</div>'
                    . '<div class="info-car-item">'
                    . '<span class="info-car-item__title">Коробка передач:</span><span class="info-car-item__value">' . $item['transmission'] . '</span>'
                    . '</div>'
                    . '<div class="info-car-item">'
                    . '<span class="info-car-item__title">Год выпуска:</span><span class="info-car-item__value">' . $item['year'] . '</span>'
                    . '</div>'
                    . '</div>'
                    . '<div class="info-car-item info-car-item--price mb-3 mb-sm-4">'
                    . '<span class="info-car-item__title">Цена аренды авто:</span><span class="info-car-item__value info-car-item__value--price">' . $item['price'] . '</span><span class="info-car-price">грн/сутки</span>'
                    . '</div>'
                    . '<a href="#" class="btn btn-secondary btn-more">Узнать больше</a>'
                    . '</div>'
                    . '</div>'
                    . '</div>'
                    . '</div>'
                    . '</div>';
            }
            ?>
            <div class="slider-arrow">
                <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-intro">
                    <svg width="25" height="20">
                        <use xlink:href="#prev-arrow-icon"></use>
                    </svg>
                </div>
                <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-intro">
                    <svg width="25" height="20">
                        <use xlink:href="#next-arrow-icon"></use>
                    </svg>
                </div>
            </div>
            <a href="#feedback" class="scroll-down scroll-link">
                <div class="scroll-down__icon">
                    <svg width="50" height="100">
                        <use xlink:href="#scroll-icon"></use>
                    </svg>
                </div>
                <div class="scroll-down__text">
                    Скролл вниз
                </div>
            </a>
            <div class="slider-nav">
                <div class="slider-nav__item slider-nav__item--last">04</div>
                <div class="slider-nav__item slider-nav__item--index">01</div>
            </div>
        </div>
    </div>
</section>
