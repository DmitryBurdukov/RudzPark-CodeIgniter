<div class="owl-carousel owl-theme slider container">
        <?php
            foreach ($categories as $item) {
                if (!$item['parent']) {
                    echo "<div class='slider__item'>
                        <img src={$item['img']} alt={$item['title']} class='slider__image'>
                        <div class='slide__texture'></div>
                        <h2 class='slide__title'>
                            {$item['title']}
                        </h2>
                        <div class='slide__description'>
                            {$item['description']}
                        </div>
                        <button class='btn btn_long btn_red btn_slider'>Перейти в каталог</button>
                    </div>";
                }


            }
        ?>
        <!-- <div class="slider__item">
            <img src="./images/slider/laptops.jpg" alt="category_name" class="slider__image">
            <div class="slide__texture"></div>
            <h2 class="slide__title">
                Ноутбуки
            </h2>
            <div class="slide__description">
                Описание категории
            </div>
            <button class="btn btn_long btn_red btn_slider">Перейти в каталог</button>
        </div>
        <div class="slider__item">
            <img src="./images/slider/tablets.jpg" alt="category_name" class="slider__image">
            <div class="slide__texture"></div>
            <h2 class="slide__title">
                Планшеты
            </h2>
            <div class="slide__description">
                Описание категории
            </div>
            <button class="btn btn_long btn_red btn_slider">Перейти в каталог</button>
        </div>
        <div class="slider__item">
            <img src="./images/slider/phones.jpg" alt="category_name" class="slider__image">
            <div class="slide__texture"></div>
            <h2 class="slide__title">
                Смартфоны
            </h2>
            <div class="slide__description">
                Описание категории
            </div>
            <button class="btn btn_long btn_red btn_slider">Перейти в каталог</button>
        </div>
        <div class="slider__item">
            <img src="./images/slider/headphones.jpg" alt="category_name" class="slider__image">
            <div class="slide__texture"></div>
            <h2 class="slide__title">
                Наушники
            </h2>
            <div class="slide__description">
                Описание категории
            </div>
            <button class="btn btn_long btn_red btn_slider">Перейти в каталог</button>
        </div>
        <div class="slider__item">
            <img src="./images/slider/tv.jpg" alt="category_name" class="slider__image">
            <div class="slide__texture"></div>
            <h2 class="slide__title">
                Телевизоры
            </h2>
            <div class="slide__description">
                Описание категории
            </div>
            <button class="btn btn_long btn_red btn_slider">Перейти в каталог</button>
        </div>
        <div class="slider__item">
            <img src="./images/slider/accessories.jpg" alt="category_name" class="slider__image">
            <div class="slide__texture"></div>
            <h2 class="slide__title">
                Аксессуары
            </h2>
            <div class="slide__description">
                Описание категории
            </div>
            <button class="btn btn_long btn_red btn_slider">Перейти в каталог</button>
        </div> -->
</div>