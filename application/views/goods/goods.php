<div class="goods container">
    <div class="goods__top">
        <h2 class="goods__title">Популярные товары</h2>
        <a href="#" class="goods__link">Перейти в каталог</a>
    </div>
    <div class="owl-carousel owl-theme container">
        <?php
            foreach ($goods as $key) {
                    $classIsStock = $key['inStock'] > 0 
                    ? '<div class="goods__have">в наличии</div>' 
                    : '<div class="goods__have goods__have_not">нет в наличии</div>';

                    $image = $key['img'] ? $key['img'] : 'https://on-www.ru/wp-content/uploads/2022/01/website-stopper.jpg';
                echo "
                    <div class='goods__item'>
                        <div class='goods__img'>
                            <img src={$image} alt=''>
                        </div>
                        <div class='goods__info'>
                            <div class='goods__static'>
                                <div class='goods__stars' data-rate='{$key['rate']}'>
                                    <span class='goods__star' data-rate-value='1'></span>
                                    <span class='goods__star' data-rate-value='2'></span>
                                    <span class='goods__star' data-rate-value='3'></span>
                                    <span class='goods__star' data-rate-value='4'></span>
                                    <span class='goods__star' data-rate-value='5'></span>
                                </div>
                                $classIsStock
                            </div>

                            <div class='goods__text'>{$key['text']}</div>
                            <div class='goods__price'>{$key['price']} byn</div>

                        </div>
                        <div class='goods__triggers'>
                            <button class='btn btn_srt btn_red'>Купить</button>
                            <div class='rate-like'>
                                <button class='btn_rate'></button>
                                <button class='btn_like'></button>
                            </div>  
                        </div>
                    </div>
                ";
            }
        ?>
    </div>
</div>