<?php

function generateRandomString($length = 10)
{
    return substr(str_shuffle(str_repeat($x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        ceil($length / strlen($x)))), 1, $length);
}

require_once('store.php');

require_once('views/base/header.php');
?>

    <!-- Thanks -->
    <section id="thanks">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100 d-flex justify-content-center align-items-center">
                    <div class="thanks-item text-center">
                        <h2 class="thanks-item__title">
                            Спасибо!
                        </h2>
                        <h4 class="thanks-item__subtitle">
                            Наш менеджер с Вами свяжется...
                        </h4>
                        <a href="/" class="btn btn-secondary btn-more">
                            На главную
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php

require_once('views/base/footer-secondary.php');