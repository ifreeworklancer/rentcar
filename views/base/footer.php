<!-- Feedback -->
<section id="feedback">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title mb-4">
                    Оставте заявку, мы Вам перезвоним
                </h2>
                <?php include(__DIR__ . '/../modules/form.php'); ?>
            </div>
        </div>
    </div>
</section>

</main>

<!-- App-footer -->
<footer id="app-footer">
    <div class="container-fluid px-lg-5">
        <div class="row align-items-center">
            <div class="d-flex justify-content-center col-xl-auto">
                <a href="#" class="logo" style="background-image:url('../../images/icon/logo/logo.png');"></a>
            </div>
            <div class="col-xl-7 d-flex justify-content-center align-items-center my-5 my-xl-0">
                <ul class="footer-list">
                    <?php
                    foreach ($nav as $key => $value) {
                        echo '<li><a href="#' . $key . '"' . 'class="scroll-link">' . $value . '</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="col-xl-3 ml-auto">
                <div class="footer-copyr">
                    <div class="footer-copyr-item"><span><?= date('Y') ?></span> Все права защищены</div>
                    <div class="footer-copyr-item">Дизайн и вэбразработка <a href="https://impressionbureau.pro"
                                                                             target="_blank">Impression.Bureau</a></div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Script -->
<script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
<script src="dist/app.js"></script>
</body>

</html>