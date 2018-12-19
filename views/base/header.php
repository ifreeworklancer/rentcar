<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?= $app_title ?>
    </title>

    <link href="https://unpkg.com/leaflet@1.0.1/dist/leaflet.css" rel="stylesheet"/>
    <link rel="stylesheet" href="fonts/font.css">
    <link rel="stylesheet" href="dist/app.css">
</head>

<body>

<svg xmlns="http://www.w3.org/2000/svg" version="1.1" style="position: absolute;top: -999999px;">
    <filter id="myblurfilter" width="110%" height="100%">
        <feGaussianBlur stdDeviation="1" result="blur"/>
    </filter>
</svg>


<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
    <symbol id="phone-icon" viewBox="0 0 485.213 485.212">
        <path fill="#edc939" d="M242.607,0C108.629,0,0.001,108.628,0.001,242.606c0,133.976,108.628,242.606,242.606,242.606
                c133.978,0,242.604-108.631,242.604-242.606C485.212,108.628,376.585,0,242.607,0z M370.719,353.989l-19.425,19.429
                c-3.468,3.463-13.623,5.624-13.949,5.624c-61.452,0.536-120.621-23.602-164.095-67.08c-43.593-43.618-67.759-102.998-67.11-164.657
                c0-0.028,2.224-9.892,5.689-13.324l19.424-19.427c7.108-7.141,20.762-10.368,30.327-7.168l4.086,1.363
                c9.537,3.197,19.55,13.742,22.185,23.457l9.771,35.862c2.635,9.743-0.919,23.604-8.025,30.712l-12.97,12.972
                c12.734,47.142,49.723,84.138,96.873,96.903l12.965-12.975c7.141-7.141,20.997-10.692,30.719-8.061l35.857,9.806
                c9.717,2.67,20.26,12.62,23.456,22.154l1.363,4.145C381.028,333.262,377.826,346.913,370.719,353.989z"/>
    </symbol>

    <symbol id="prev-arrow-icon" viewBox="0 0 32.635 32.635">
        <path d="M32.135,16.817H0.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h31.635c0.276,0,0.5,0.224,0.5,0.5
	        	S32.411,16.817,32.135,16.817z"/>
        <path d="M13.037,29.353c-0.128,0-0.256-0.049-0.354-0.146L0.146,16.669C0.053,16.575,0,16.448,0,16.315s0.053-0.26,0.146-0.354
	        	L12.684,3.429c0.195-0.195,0.512-0.195,0.707,0s0.195,0.512,0,0.707L1.207,16.315l12.184,12.184c0.195,0.195,0.195,0.512,0,0.707
	        	C13.293,29.304,13.165,29.353,13.037,29.353z"/>
    </symbol>

    <symbol id="next-arrow-icon" viewBox="0 0 32.635 32.635">
        <path d="M32.135,16.817H0.5c-0.276,0-0.5-0.224-0.5-0.5s0.224-0.5,0.5-0.5h31.635c0.276,0,0.5,0.224,0.5,0.5
	        	S32.411,16.817,32.135,16.817z"/>
        <path d="M19.598,29.353c-0.128,0-0.256-0.049-0.354-0.146c-0.195-0.195-0.195-0.512,0-0.707l12.184-12.184L19.244,4.136
	        	c-0.195-0.195-0.195-0.512,0-0.707s0.512-0.195,0.707,0l12.537,12.533c0.094,0.094,0.146,0.221,0.146,0.354
	        	s-0.053,0.26-0.146,0.354L19.951,29.206C19.854,29.304,19.726,29.353,19.598,29.353z"/>
    </symbol>

    <symbol id="scroll-icon" viewBox="0 0 100 125">
        <path fill="#fff" d="M46,63h8c7.7,0,14-6.3,14-14V23c0-7.7-6.3-14-14-14h-8c-7.7,0-14,6.3-14,14v26C32,56.7,38.3,63,46,63z M36,23
	c0-5.5,4.5-10,10-10h8c5.5,0,10,4.5,10,10v26c0,5.5-4.5,10-10,10h-8c-5.5,0-10-4.5-10-10V23z"/>
        <path fill="#fff" d="M50,30c1.1,0,2-0.9,2-2v-6c0-1.1-0.9-2-2-2s-2,0.9-2,2v6C48,29.1,48.9,30,50,30z"/>
        <path fill="#fff" d="M50,69c-1.1,0-2,0.9-2,2v13.2l-1.6-1.6c-0.8-0.8-2-0.8-2.8,0s-0.8,2,0,2.8l5,5l0,0c0.1,0.1,0.2,0.2,0.3,0.2
	c0,0,0.1,0.1,0.2,0.1c0.1,0,0.1,0.1,0.2,0.1c0.1,0,0.1,0,0.2,0.1c0.1,0,0.1,0,0.2,0.1c0.1,0,0.3,0,0.4,0c0.1,0,0.3,0,0.4,0
	c0.1,0,0.1,0,0.2-0.1c0.1,0,0.1,0,0.2-0.1c0.1,0,0.1-0.1,0.2-0.1c0,0,0.1,0,0.1-0.1c0.1-0.1,0.2-0.2,0.3-0.2l0,0l5-5
	c0.8-0.8,0.8-2,0-2.8s-2-0.8-2.8,0L52,84.2V71C52,69.9,51.1,69,50,69z"/>
    </symbol>

    <symbol id="quote-icon" viewBox="0 0 32 32">
        <path d="M0,4v12h8c0,4.41-3.586,8-8,8v4c6.617,0,12-5.383,12-12V4H0z"/>
        <path d="M20,4v12h8c0,4.41-3.586,8-8,8v4c6.617,0,12-5.383,12-12V4H20z"/>
    </symbol>

    <symbol id="play-video-icon" viewBox="0 0 512 512">
        <path d="m354.2,247.4l-135.1-92.4c-4.2-3.1-15.4-3.1-16.3,8.6v184.8c1,11.7 12.4,11.9 16.3,8.6l135.1-92.4c3.5-2.1 8.3-10.7 0-17.2zm-130.5,81.3v-145.4l106.1,72.7-106.1,72.7z"
              fill="#ffbd69"/>
        <path d="M256,11C120.9,11,11,120.9,11,256s109.9,245,245,245s245-109.9,245-245S391.1,11,256,11z M256,480.1    C132.4,480.1,31.9,379.6,31.9,256S132.4,31.9,256,31.9S480.1,132.4,480.1,256S379.6,480.1,256,480.1z"
              fill="#ffbd69"/>
    </symbol>

</svg>


<!-- App-header -->
<header id="app-header">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-auto pl-0 mr-auto">
                <div class="burger-menu">
                    <div class="burger-menu-icon">
                        <div class="line-row line-row--top">
                            <div class="line line--left"></div>
                            <div class="line line--right"></div>
                        </div>
                        <div class="line-row line-row--bottom">
                            <div class="line line--left"></div>
                            <div class="line line--right"></div>
                        </div>
                    </div>
                    <div class="burger-menu-text">
                        Меню
                    </div>
                </div>
            </div>
            <div class="col-auto ml-0 mr-auto ml-xl-auto mr-xl-0">
                <a href="#" class="logo" style="background-image:url('../../images/icon/logo/logo.png');"></a>
            </div>
            <div class="col-lg-5 col-xl-4 ml-auto">
                <div class="header-item d-none d-lg-flex align-items-center">
                    <a href="#" class="btn btn-primary open-connect">Связаться с нами</a>
                    <ul class="contacts-list">
                        <li class="contacts-list-item contacts-list-item--phone">
                            <a href="tel:<?= $phone_link; ?>"><?= $phone; ?></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <nav class="menu">
        <ul class="menu-list">
            <?php
            foreach ($nav as $key => $value) {
                echo '<li><a href="#' . $key . '"' . 'class="scroll-link">' . $value . '</a></li>';
            }
            ?>
        </ul>
        <div class="header-item d-flex d-lg-none align-items-center">
            <a href="#" class="btn btn-primary open-connect">Связаться с нами</a>
        </div>
    </nav>
    <div class="menu-mask"></div>
</header>

<!-- Modal -->
<div class="custom-modal custom-modal--connect">
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
            <input type="hidden" name="title" value="Свяжитесь с нами">
            <div class="form-column">
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
                <div class="form-group form-group--btn">
                    <button type="submit" class="btn btn-dark">Отправить</button>
                </div>
            </div>
        </form>
    </div>
</div>

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

<!-- Main -->
<main>