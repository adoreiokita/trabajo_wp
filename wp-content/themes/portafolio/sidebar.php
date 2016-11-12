		<div class="block grid--item-3">
			<div class="block__title">
				Sidebar
			</div>
			<div class="block__body">
                <?php 
	wp_nav_menu(
		array (
			'theme_location' => 'side-menu',
			'container' => 'nav',
			'menu_class' => 'nav__list'
			)
		);
 ?>
				
			</div>
		</div>