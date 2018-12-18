<!-- About -->
<section id="about">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-xl-6 px-0">
                <div class="about-item">
                    <div class="img" style="background-image:url('<?= $about['first_image']?>');"></div>
                    <div class="content">
                        <h2 class="section-title mb-4">
                            <?= $about['title']?>
                        </h2>
                        <?= $about['text']?>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 px-0">
                <div class="about-item-workshop about-item-workshop--top d-none d-xl-block">
                    <div class="img" style="background-image:url('<?= $about['second_image']?>');"></div>
                </div>
                <div class="about-item-workshop about-item-workshop--bottom">
                    <div class="content order-2 order-xl-1">
                        <div class="img" style="background-image:url('<?= $about['third_image']?>');"></div>
                        <a href="#" class="btn btn-secondary" data-src="<?= $about['video_link']?>">
                            Смотерть видео
                        </a>
                    </div>
                    <div class="content d-none d-sm-block order-1 order-xl-2">
                        <h2 class="title d">
                            Мастерская
                        </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>