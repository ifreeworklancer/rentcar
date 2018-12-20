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