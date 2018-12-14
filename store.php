<?php
$app_title = 'Rentcar';
$phone = '+38 099 110 22 33';
$phone_link = str_replace([' ', '(', ')', '-'], '', $phone);

$nav = [
    'about' => 'О нас',
    'questions' => 'Как взять машину в прокат?',
    'catalog' => 'Наши автомобили',
    'reviews' => 'Отзывы',
    'contacts' => 'Контакты',
];

$intro = [
    'item' => [
        [

            'main_title' => 'Аренда авто в Запорожье',
            'main_subtitle' => 'Бесплатная доставка при заказе от трёх суток',
            'image' => '../images/content/main/intro/intro-1.jpg',
            'title' => 'Opel Astra',
            'body' => 'Хечбек',
            'capacity' => '5 мест',
            'transmission' => 'Автомат',
            'year' => '2016',
            'price' => '900'
        ],
        [

            'main_title' => 'Аренда авто в Запорожье',
            'main_subtitle' => 'Бесплатная доставка при заказе от трёх суток',
            'image' => '../images/content/main/intro/intro-2.jpg',
            'title' => 'Volkswagen-Passat',
            'body' => 'Хечбек',
            'capacity' => '4',
            'transmission' => 'Ручная / Механика',
            'year' => '2014',
            'price' => '800'
        ],
        [

            'main_title' => 'Аренда авто в Запорожье',
            'main_subtitle' => 'Бесплатная доставка при заказе от трёх суток',
            'image' => '../images/content/main/intro/intro-1.jpg',
            'title' => 'Opel Astra',
            'body' => 'Хечбек',
            'capacity' => '5 мест',
            'transmission' => 'Автомат',
            'year' => '2016',
            'price' => '900'
        ],
        [

            'main_title' => 'Аренда авто в Запорожье',
            'main_subtitle' => 'Бесплатная доставка при заказе от трёх суток',
            'image' => '../images/content/main/intro/intro-2.jpg',
            'title' => 'Volkswagen-Passat',
            'body' => 'Хечбек',
            'capacity' => '4',
            'transmission' => 'Ручная / Механика',
            'year' => '2014',
            'price' => '800'
        ],
    ]
];

$about = [
    'title' => 'О нас',
    'text' => '<p>Душа моя озарена неземной радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего сердца.</p> <p>Я совсем один и блаженствую в здешнем краю, словно созданном для таких, как я. Я так счастлив, мой друг, так упоен ощущением покоя, что искусство мое страдает от этого. Ни одного штриха не мог бы я сделать, а никогда не был таким большим художником, как в эти минуты.</p> <p>Когда от милой моей долины поднимается пар и полдневное солнце стоит над непроницаемой чащей темного леса и лишь редкий луч проскальзывает в его святая святых...</p>',
    'first_image' => '../images/content/main/about/about-1.jpg',
    'second_image' => '../images/content/main/about/about-2.jpg',
    'third_image' => '../images/content/main/about/about-3.jpg',
];

$questions = [
    'title' => 'Как взять машину в прокат?',
    'list' => [
        'Душа моя озарена неземной радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего сердца.',
        'Радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего сердца.',
        'Чудесные весенние утра, которыми я наслаждаюсь от всего сердца.',
        'Радостью, как эти чудесные весенние утра, которыми я наслаждаюсь от всего сердца.'
    ]
];

$catalog = [
    [
        'image' => '../images/content/main/catalog-1.jpg',
        'title' => 'Opel Astra',
        'body' => 'Хечбек',
        'capacity' => '5 мест',
        'transmission' => 'Автомат',
        'year' => '2016',
        'price' => '850',
        'min_image' => '../images/content/main/catalog-min-1.jpg',
        'video_link' => ''
    ],
    [
        'image' => '../images/content/main/catalog-2.jpg',
        'title' => '',
        'body' => 'Хечбек',
        'capacity' => '5 мест',
        'transmission' => 'Автомат',
        'year' => '2016',
        'price' => '750',
        'min_image' => '../images/content/main/catalog-min-2.jpg',
        'video_link' => ''
    ],
    [
        'image' => '../images/content/main/catalog-3.jpg',
        'title' => '',
        'body' => 'Хечбек',
        'capacity' => '5 мест',
        'transmission' => 'Автомат',
        'year' => '2016',
        'price' => '899',
        'min_image' => '../images/content/main/catalog-min-3.jpg',
        'video_link' => ''
    ],
    [
        'image' => '../images/content/main/catalog-4.jpg',
        'title' => '',
        'body' => 'Хечбек',
        'capacity' => '5 мест',
        'transmission' => 'Автомат',
        'year' => '2016',
        'price' => '699',
        'min_image' => '../images/content/main/catalog-min-4.jpg',
        'video_link' => ''
    ],
];

$reviews = [
    'title' => 'Отзывы',
    'item' => [
        [
            'text' => 'Пользовалась услугами компании 3 дня, когда была в командировке в Запорожье. Нужно было много мотаться по городу и в Днепр. Взяла Ford Mondeo. Состояние отличное, видно что ребята следят за своими машинами. Спасибо.',
            'name' => 'Елена, бухгалтер',
            'image' => '../images/content/main/reviews/reviews-1.jpg'
        ],
        [
            'text' => 'Пользовалась услугами компании 3 дня, когда была в командировке в Запорожье. Нужно было много мотаться по городу и в Днепр. Взяла Ford Mondeo. Состояние отличное, видно что ребята следят за своими машинами. Спасибо.',
            'name' => 'Елена, бухгалтер',
            'image' => '../images/content/main/reviews/reviews-1.jpg'
        ],
        [
            'text' => 'Пользовалась услугами компании 3 дня, когда была в командировке в Запорожье. Нужно было много мотаться по городу и в Днепр. Взяла Ford Mondeo. Состояние отличное, видно что ребята следят за своими машинами. Спасибо.',
            'name' => 'Елена, бухгалтер',
            'image' => '../images/content/main/reviews/reviews-1.jpg'
        ],
    ],
];

$contacts = [
    'address' => 'г.Запорожье просп. Соборный 150',
    'phone' => '+38 099 110 22 33',
    'email' => 'rent_car@gmail.com'
];



