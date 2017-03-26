### CSS & HTML
Logo in header.php

##### header.php
```php
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" id="logo">
	<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="Logo">
</a>
```

### PHP Snippets
Suchfeld in die Navigation hinzufügen via functions.php

#####functions.php
```php
<?php
// Add search form to the end of the primary navigation
function add_search_form( $items, $args ) {
    $menu_locations_affected = array(
        'primary'
    );
    // Check if the theme location is within the $menu_locations_affected
    if ( in_array( $args->theme_location, $menu_locations_affected ) ) {
        $search = '<li class="search">' . get_search_form( false ) . '</li>';
        $items =  $items . $search;
    }
    return $items;
}
add_filter( 'wp_nav_menu_items', 'add_search_form', 10, 2 );
```

Suchfeld im Template einfügen
```php
<?php get_search_form(); ?>
```

### Mobile Menu
Menu Button
```html
    <button class="nav-toggle" aria-controls="primary-menu" aria-expanded="false">
        <span class="line"></span>
        <span class="line"></span>
        <span class="line"></span>
    </button>
```
Javascript Funktion
```javascript
/**
 * Here goes all the JS Code you need in your child theme buddy!
 */
(function($) {

	// Toggle Menu
	$(document).on('click', '.nav-toggle', function(e){
		$('body').toggleClass('menu-open');
		e.preventDefault();
	});

}(jQuery));
```
Stylesheet
```css


@media screen and (min-width: 600px) {
	button.nav-toggle {
		display: none;
	}
}

@media screen and (max-width: 599px) {
	button.nav-toggle {
		display: block;
		position: fixed;
		z-index: 99;
		top: 0;
		left: 0;
		width: 40px;
		height: 40px;
		padding: 10px;
		overflow: hidden;
		text-indent: 100%;
		white-space: nowrap;
		background: #222;
		background-image: none;
		border: none;
		box-shadow: none;
	}
	.nav-toggle .line {
		display: block;
		height: 2px;
		margin: 3px 0;
		background: #FFF;
		border-radius: 2px;
	}
	#site-navigation {
		position: fixed;
		opacity: 0;
		z-index: -1;
		top: 0;
		left: 0;
		right: 0;
		bottom: 0;
		display: table;
		width: 100%;
		height: 100%;
		overflow: auto;
		background: #222;
		text-align: center;
		-webkit-transform: scale(2) translate3d(0, 0, 0);
		-moz-transform: scale(2) translate3d(0, 0, 0);
		transform: scale(2) translate3d(0, 0, 0);
		-webkit-transform-origin: center;
		-moz-transform-origin: center;
		transform-origin: center;
		-webkit-transition: all 500ms ease-in-out;
		-moz-transition: all 500ms ease-in-out;
		transition: all 500ms ease-in-out;
	}
	.menu-open #site-navigation {
		z-index: 98;
		opacity: 1;
		-webkit-transform: scale(1) translate3d(0, 0, 0);
		-moz-transform: scale(1) translate3d(0, 0, 0);
		transform: scale(1) translate3d(0, 0, 0);
	}
	#site-navigation > div {
		display: table-cell;
		width: 100%;
		height: 100%;
		vertical-align: middle;
		text-align: center;
	}
	#site-navigation a {
		color: #FFF;
		text-decoration: none;
	}
	#site-navigation ul {
		display: block;
	}
	#site-navigation ul li {
		display: block;
		float: none;
	}
	#site-navigation ul ul {
		position: relative;
		top: 0;
		left: 0;
		display: block;
		float: none;
		margin: 5px 0 10px 0;
	}
	.main-navigation ul ul a {
		width: auto;
	}
}
```
