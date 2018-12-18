<!-- Contacts -->
<section id="contacts">
    <div class="container-fluid px-0">
        <div class="row">
            <div class="col-sm-6 col-lg-7 col-xl-8 px-0">
                <input type="hidden" name="contactsLat" value="<?= $contacts['lat'] ?>">
                <input type="hidden" name="contactsLng" value="<?= $contacts['lng'] ?>">
                <div id="contacts-map"></div>
            </div>
            <div class="col-sm-6 col-lg-5 col-xl-4 px-0">
                <div class="contacts-item">
                    <div class="img" style="background-image: url('<?= $contacts['image'] ?>');"></div>
                </div>
                <div class="contacts-item">
                    <div class="content">
                        <ul class="contacts-list">
                            <li class="contacts-list-item contacts-list-item--address">
                                <a href="<?= $contacts['address_link'] ?>">
                                    <?= $contacts['address'] ?>
                                </a>
                            </li>
                            <li class="contacts-list-item contacts-list-item--phone">
                                <a href="tel:<?= str_replace([' ', '(', ')', '-'], '', $contacts['phone']); ?>">
                                    <?= $contacts['phone'] ?>
                                </a>
                            </li>
                            <li class="contacts-list-item contacts-list-item--email">
                                <a href="mailto:<?= $contacts['email'] ?>">
                                    <?= $contacts['email'] ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>