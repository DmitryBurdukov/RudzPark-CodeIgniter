<div class="bg_gray">
    <div class="container advantages">
        <?php 
            foreach ($advantages as $item => $adv) {
                echo "<div class='advantages__item'>
                    <label for='adv_ttl' class='advantage__label'></label>
                    <h3 class='advantage__title'>{$adv['title']}</h3>
                    <p class='advantage__description'>{$adv['description']}</p>
                </div>";
            }
        ?>
    </div>
</div>
