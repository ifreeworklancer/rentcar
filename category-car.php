<?php

function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        ceil($length / strlen($x)))), 1, $length);
}

require_once('store.php');

require_once('views/base/header.php');
?>

    <!-- Category-car -->
    <section id="category-car">
        <div class="container-fluid px-0">
            <div class="row w-100 m-0">
                <div class="col-12 px-0">
                    <div class="category-car-intro">
                        <div class="img" style="background-image:url(<?= $category_car['intro']['image']; ?>);"></div>
                        <div class="content">
                            <div class="content-item">
                                <h2 class="title"><?= $category_car['intro']['title']; ?></h2>
                                <div class="info-car">
                                    <div class="info-car-title">Краткое описание характеристик:</div>
                                    <div class="info-car-item">
                                        <span class="info-car-item__title">Кузов:</span><span
                                                class="info-car-item__value"><?= $category_car['intro']['body']; ?></span>
                                    </div>
                                    <div class="info-item">
                                        <span class="info-car-item__title">Вместимость:</span><span
                                                class="info-car-item__value"><?= $category_car['intro']['capacity']; ?></span>
                                    </div>
                                    <div class="info-car-item">
                                        <span class="info-car-item__title">Коробка передач:</span><span
                                                class="info-car-item__value"><?= $category_car['intro']['transmission']; ?></span>
                                    </div>
                                    <div class="info-car-item">
                                        <span class="info-car-item__title">Год выпуска:</span><span
                                                class="info-car-item__value"><?= $category_car['intro']['year']; ?></span>
                                    </div>
                                </div>
                                <div class="info-car-item info-car-item--price mb-3 mb-sm-4">
                                    <span class="info-car-item__title">Цена аренды авто:</span><span
                                            class="info-car-item__value info-car-item__value--price"><?= $category_car['intro']['price']; ?></span><span
                                            class="info-car-price">грн/сутки</span>
                                </div>
                                <a href="#" class="btn btn-secondary btn-more open-order"
                                   data-carTitle="<?= $category_car['intro']['title']; ?>">Взять в аренду</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            $chunks = [];
            $firstChunk[0] = array_slice($category_car['gallery'], 0, 1)[0];
            $firstChunk[1] = "https://img.youtube.com/vi/{$category_car['video']}/sddefault.jpg";
            $firstChunk[2] = array_slice($category_car['gallery'], 1, 1)[0];
            array_push($chunks, $firstChunk);

            $rest = array_slice($category_car['gallery'], 2);
            $restChunks = array_chunk($rest, (count($rest) % 2 == 0) ? 4 : (count($rest) % 3 == 1) ? 4 : 3);


            $index = -1;

            foreach ($restChunks as $item) {
                array_push($chunks, $item);
            }
            ?>


            <?php foreach ($chunks as $row => $chunk) :
                $count;
                ?>
                <div class="row w-100 m-0">
                    <?php foreach ($chunk as $car) :
                        $count++;
                        $index++;
                        ?>
                        <?php
                        if ($row == 0) {
                            echo '<div class="col-lg-4 px-0">';
                            if ($count === 2) {
                                echo '<div class="category-card category-card--video" style="background-image:url(' . $car . ');" data-src="' . $category_car['video'] . '">'
                                    . '<div class="play-video">'
                                    . '<div class="play-video__icon">'
                                    . '<svg width="60" height="60">'
                                    . '<use xlink:href="#play-video-icon"></use>'
                                    . '</svg>'
                                    . '</div>'
                                    . '<div class="play-video__text">Смотреть обзор авто</div>'
                                    . '</div>'
                                    . '</div>'
                                    . '</div>';
                                $index = 0;
                                continue;
                            }
                            echo '<div class="category-card" style="background-image:url(' . $car . ');" data-indexCar="' . $index . '"></div></div>';
                        } else {
                            if ((count($chunk) % 2 == 0) && (count($chunk) != 2)) {
                                echo '<div class="col-sm-6 col-xl-3 px-0"><div class="category-card" data-indexCar="' . $index . '" style="background-image:url(' . $car . ');"></div></div>';
                            } else if (count($chunk) == 2) {
                                echo '<div class="col-sm-6 px-0"><div class="category-card" data-indexCar="' . $index . '" style="background-image:url(' . $car . ');"></div></div>';
                            } else {
                                echo '<div class="col-sm-4 px-0"><div class="category-card" data-indexCar="' . $index . '" style="background-image:url(' . $car . ');"></div></div>';
                            }
                        }
                        ?>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- Slider -->
    <div class="custom-modal custom-modal--category-car d-none d-lg-block">
        <div class="close-modal">
            <div class="line line--left"></div>
            <div class="line line--right"></div>
        </div>
        <div class="category-car-slider">
            <?php foreach ($category_car['gallery'] as $item) : ?>
                <div class="category-car-slider-item">
                    <div class="img" style="background-image:url(<?= $item; ?>);"></div>
                </div>
            <?php endforeach; ?>
            <div class="slider-arrow slider-arrow--category-car">
                <div class="slider-arrow-item slider-arrow-item--prev slider-arrow-item--prev-category-car">
                    <svg width="25" height="20">
                        <use xlink:href="#prev-arrow-icon"></use>
                    </svg>
                </div>
                <div class="slider-arrow-item slider-arrow-item--next slider-arrow-item--next-category-car">
                    <svg width="25" height="20">
                        <use xlink:href="#next-arrow-icon"></use>
                    </svg>
                </div>
            </div>
            <div class="category-car-slider-nav">
                <div class="category-car-slider-nav-item category-car-slider-nav-item--index"></div>
                <div class="category-car-slider-nav-item category-car-slider-nav-item--last"></div>
            </div>
        </div>
    </div>

<?php

require_once('views/base/footer.php');