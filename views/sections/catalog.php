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

<!-- Modal -->
<div class="custom-modal custom-modal--order">
    <div class="close-modal">
        <div class="line line--left"></div>
        <div class="line line--right"></div>
    </div>
    <div class="custom-modal-header">
        <h3 class="section-title mb-4">
            Оставте заявку, мы Вам перезвоним
        </h3>
    </div>
    <div class="custom-modal-body">
        <form method="post">
            <input type="hidden" name="title" value="Аренда">
            <div class="form-column">
                <input type="hidden" name="car_title">
                <div class="form-group">
                    <input type="text" name="name" class="form-control"
                           id="user-name--<?php echo $name = generateRandomString(); ?>" placeholder="Введите ваше имя"
                           required>
                </div>
                <div class="form-group">
                    <input type="tel" name="phone" class="form-control"
                           id="user-phone--<?php echo $phone = generateRandomString(); ?>" placeholder="Номер телефона"
                           required>
                </div>
                <div class="form-group">
                    <input type="number" name="value" class="form-control"
                           id="user-value--<?php echo $phone = generateRandomString(); ?>"
                           placeholder="Количество суток" min="1" required>
                </div>
                <div class="form-group form-group--btn">
                    <button type="submit" class="btn btn-dark">Отправить</button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="modal-mask"></div>