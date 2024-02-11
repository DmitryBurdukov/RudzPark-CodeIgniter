<section class="admin__categories container">
		<div class='panel__logo'>
			<div class='logo__wrapper'>
				<span class='line'></span>
				<span class='line line_small'></span>
				<span class='line'></span>
			</div>
			<a href='/Home'><h2>rudZPark</h2></a>
		</div>
		<h2>Информация категорий товаров</h2>
		<div class='categories_admin'>
			<div class='table'>
				<div class='table_id'>ID</div>
				<div class='table_name'>Название категории</div>
				<div class='table_desc'>Описание</div>
				<div class='table_img'>Ссылка на картинку</div>
				<div class='table_parent'>Вложен в:</div>
			</div>

			<?php
				foreach ($categories as $name => $value) {
					echo "
						<form action='http://rudzpark-codeigniter/adminPage/update_delete/categories' method='POST' class='ca__row'>
								<textarea type='text' name='category__id' class='ca__item ca__item_id' >{$value['id']}</textarea> 
								<textarea type='text' name='category__name' class='ca__item ca__item_name' >{$value['title']}</textarea> 
								<textarea type='text' name='category__desc' class='ca__item ca__item_desc' >{$value['description']}</textarea> 
								<textarea type='text' name='category__img' class='ca__item ca__item_img' >{$value['img']}</textarea> 
								<textarea type='text' name='category__parent' class='ca__item ca__item_parent' >{$value['parent']}</textarea> 
								<input type='submit' name='button' class='ca__item ca__item_update' value='изменить'>
								<input type='submit' name='button' class='ca__item ca__item_delete' value='удалить'>
						</form>
						";

				};
				echo "
				<form action='http://rudzpark-codeigniter/adminPage/add/categories' method='POST' class='category__add'>
					<textarea type='text' class ='category__add_id' value='' placeholder='id' name='category__id'></textarea>
					<textarea type='text' class ='category__add_name' value='' placeholder='Название' name='category__name'></textarea>
					<textarea type='text' class ='category__add_desc' value='' placeholder='Описание' name='category__desc'></textarea>
					<textarea type='text' class ='category__add_img' value='' placeholder='Изображение' name='category__img'></textarea>
					<textarea type='text' class ='category__add_parent' value='' placeholder='Родительская категория' name='category__parent'></textarea>
					<input type='submit' name='button' class ='button_add' value='Добавить запись'>
				</form>
				";
			?>
		</div>
</section>

<?php
	$notEmptyCategories = [];
	foreach ($goods as $item => $value) {
		if (!in_array([$value['category']], $notEmptyCategories)) {
			$notEmptyCategories[$value['category']] = $value;
		}
	}
	// print_r($notEmptyCategories);


	function renderInfoAboutCategory($nameOfCategory) {
		if ($nameOfCategory) {
			// echo print_r($nameOfCategory)."<br>"."<br>";
		}

		echo "
		<form action='http://rudzpark-codeigniter/adminPage/update_delete/{$nameOfCategory['id']}' method='POST' class='ca__row'>
				<textarea type='text' name='goods__id' class='ca__item ca__item_id'>{$nameOfCategory['id']}</textarea>
				<textarea type='text' name='goods__img' class='ca__item ca__item_img'>{$nameOfCategory['img']}</textarea>
				<textarea type='text' name='goods__rate' class='ca__item ca__item_rate'>{$nameOfCategory['rate']}</textarea>
				<textarea type='text' name='goods__in-stock' class='ca__item ca__item_in-stock'>{$nameOfCategory['inStock']}</textarea>
				<textarea type='text' name='goods__text' class='ca__item ca__item_text'>{$nameOfCategory['text']}</textarea>
				<textarea type='text' name='goods__price' class='ca__item ca__item_price'>{$nameOfCategory['price']}</textarea>
				<textarea type='text' name='goods__category' class='ca__item ca__item_category'>{$nameOfCategory['category']}</textarea>

				<input type='submit' name='button' class='ca__item ca__item_update' value='изменить'>
				<input type='submit' name='button' class='ca__item ca__item_delete' value='удалить'>
		</form>
		";
	};



 	foreach ($notEmptyCategories as $item => $value) {
			echo "<section class='admin__goods container'>
					<h2>Информация о товарах из категории \"{$value['category']}\":</h2>
					<div class='categories_admin'>
					<div class='table'>
						<div class='table_id'>ID</div>	
						<div class='table_img'>Ссылка на картинку</div>
						<div class='table_rate'>Рейтинг</div>
						<div class='table_in-stock'>Наличие</div>
						<div class='table_text'>Текст</div>
						<div class='table_price'>Цена, BYN</div>
						<div class='table_cat'>Есть в категориях</div>
	
					</div>";

				
				foreach ($goods as $goods_item => $good_value) {
					// print_r($good_value);
					if ($good_value['category'] === $value['category']) {
						renderInfoAboutCategory($good_value);
					}
				}

			$slug = $item;
			echo "
			<form action='http://rudzpark-codeigniter/adminPage/add/{$slug}' method='POST' class='goods__item_add'>
				<input type='text' class ='goods__add_id' value='' placeholder='id' name='id'>
				<input type='text' class ='goods__add_img' value='' placeholder='Изображение' name='img'>
				<input type='text' class ='goods__add_rate' value='' placeholder='Рейтинг' name='rate'>
				<input type='text' class ='goods__add_in-stock' value='' placeholder='Наличие' name='in-stock'>
				<input type='text' class ='goods__add_text' value='' placeholder='Текст' name='text'>
				<input type='text' class ='goods__add_price' value='' placeholder='Цена' name='price'>
				<input type='text' class ='goods__add_categories' value='' placeholder='Category' name='category'>
				<input type='submit' name='button' class ='button_add' value='Добавить запись'>
			</form>
			";

	}
?>



