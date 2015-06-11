 <!-- Regular navigation -->
<nav class="uk-navbar uk-navbar-attached">
 	<div class="uk-container uk-container-center">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
	 		<div class="uk-navbar-brand">
	 				<?php bloginfo( 'name' ); ?> 
	 		</div>
		</a>
 		<div class="uk-float-right">
			<?php wp_nav_menu( array( 
			'menu_class'     => 'uk-navbar-nav', 
			'theme_location' => 'primary')); ?>
		</div>
	</div>
</nav>