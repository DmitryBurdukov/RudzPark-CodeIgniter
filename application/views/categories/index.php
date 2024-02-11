<section class="categories container  text_wh">
    <nav class="categories__wrapper">
        <?php 
            function getChildCategory($parent, $categories) {
                $ul = "";
                $childArray = [];
                $childrens = '';
                foreach ($categories as $item => $value) {
                    if ($value['parent'] === $parent) {
                        // $childArray[$value['title']] = $value['title'];
                        $deep = getChildCategory($value['title'], $categories);
                        $chsClasses = $deep ?  "categories__mark categories__childrens" : 'categories__childrens';

                        $childrens .= "<li class='categories__child'><h2>{$value['title']}</h2><ul class='{$chsClasses}'>{$deep}</ul></li>";
                    } else {
                        
                    } 

                } 
                return $childrens;  
                // if (count($childArray) === 0 ) {
                //     return false;
                // } else {
                    
                // }
                
            }

            foreach ($categories as $item => $category_item) {
                if ($category_item['parent'] === '') {
                    $categoryName = $category_item['title'];
                    $child = getChildCategory($category_item['title'], $categories);
                    $categoryClass = $child ? 'categories__item  ' : 'categories__item categories__item_fool';
                    echo "<div class='{$categoryClass}'>
                                <a href='/Home/{$categoryName}'>$categoryName</a>
                                <ul class='categories__childrens'>$child</ul>  
                          </div>";
                }

            }
        ?>
    </nav>
</section>



<!-- <section class="categories container  text_wh">
    <nav class="categories__wrapper">
        #<?php 

            // function getChildCategory($parent, $categories) {
            //     $children = '';
            //     $childArray = [];
            //     if ($categories) {

            //     }
            //     foreach ($categories as $item => $value) {
            //         if ($value['parent'] === $parent) {
            //             $deep = getChildCategory($value['title'], $categories);
            //             $children .= "<li class='categories__child'>{$value['title']}{$deep}</li>";
            //             $childArray[$value['title']] = $value['title'];
            //         }
            //     } 
            //     if (count($childArray) > 0) {
            //         return "<ul class='categories__childrens'>{$children}<ul>";
                    
            //     } else {
            //         // return $children;
            //     }
            //     return false;
            // }

            // foreach ($categories as $item => $category_item) {
            //     if ($category_item['parent'] === '') {
            //         $categoryName = $category_item['title'];
            //         $child = getChildCategory($category_item['title'], $categories);
            //         $categoryClass = $child ? 'categories__item' : 'categories__item categories__item_fool';
            //         echo "<div class='{$categoryClass}'>
            //                     {$categoryName}
            //                     {$child}
            //               </div>";
            //     }

            // }
        #?>
    </nav>
</section> -->