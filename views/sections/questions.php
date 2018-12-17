<!-- Questions -->
<section id="questions">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-lg-6 px-0">
                <div class="questions-item">
                    <div class="img" style="background-image: url('<?= $questions['image']?>');"></div>
                </div>
            </div>
            <div class="col-lg-6 px-0">
                <div class="questions-item d-flex justify-content-center align-items-center">
                    <div class="content">
                        <h2 class="section-title mb-4">
                            <?= $questions['title']?>
                        </h2>
                        <ul class="custom-list custom-list--primary">
                            <?php
                            foreach ($questions['list'] as $item) {
                                echo '<li>' . $item . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>