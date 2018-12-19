<!-- Catalog -->
<section id="catalog">
    <div class="container-fluid px-0">
        <div class="row">
            <?php
            foreach ($catalog as $item) {
                echo
                    '<div class="col-sm-6 col-xl-3 px-0">'
                    . '<div class="catalog-card">'
                    . '<div class="catalog-card-header">'
                    . '<div class="img" style="background-image:url(' . $item['image'] . ');"></div>'
                    . '</div>'
                    . '<div class="catalog-card-body">'
                    . '<div class="content">'
                    . '<div class="prev">'
                    . '<div class="img" style="background-image:url(' . $item['min_image'] . ');"></div>'
                    . '<div class="img img-video" style="background-image:url(' . $item['min_image_video'] . ');" data-src="' . $item['video_link'] . '">'
                    . '<div class="play-video">'
                    . '<div class="play-video__icon">'
                    . '<svg width="30" height="30">'
                    . '<use xlink:href="#play-video-icon"></use>'
                    . '</svg>'
                    . '</div>'
                    . '</div>'
                    . '</div>'
                    . '</div>'
                    . '<div class="info-car">'
                    . '<h3 class="title">' . $item['title'] . '</h3>'
                    . '<div class="info-car-iteme">Описание характеристик:</div>'
                    . '<div class="info-car-item">'
                    . '<span class="info-car-item__title">Кузов:</span><span class="info-car-item__value">' . $item['body'] . '</span>'
                    . '</div>'
                    . '<div class="info-car-item">'
                    . '<span class="info-car-item__title">Вместимость:</span><span class="info-car-item__value">' . $item['capacity'] . '</span>'
                    . '</div>'
                    . '<div class="info-car-item">'
                    . '<span class="info-car-item__title">Коробка передач:</span><span class="info-car-item__value">' . $item['transmission'] . '</span>'
                    . '</div>'
                    . '<div class="info-car-item">'
                    . '<span class="info-car-item__title">Год выпуска:</span><span class="info-car-item__value">' . $item['year'] . '</span>'
                    . '</div>'
                    . '<div class="info-car-item info-car-item--price">'
                    . '<span class="info-car-item__title">Цена аренды авто:</span><span class="info-car-item__value info-car-item__value--price">' . $item['price'] . '</span><span class="info-car-price">грн/сутки</span>'
                    . '</div>'
                    . '</div>'
                    . '</div>'
                    . '</div>'
                    . '<div class="catalog-card-footer">'
                    . '<a href="#" class="btn btn-secondary">Подробней</a>'
                    . '<a href="#" class="btn btn-dark btn-more open-order" data-carTitle="'. $item['title'] .'">Взять в аренду</a>'
                    . '</div>'
                    . '</div>'
                    . '</div>';
            }
            ?>
        </div>
    </div>
</section>
