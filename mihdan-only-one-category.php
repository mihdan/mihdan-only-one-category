<?php
/**
 * Plugin Name: Mihdan: Only One Category
 * Plugin URI: https://github.com/mihdan/mihdan-only-one-category
 * Description: Плагин заменяет чекбоксы на радиокнопки в метабоксе категорий на странице редактирования поста
 * Version: 1.0
 * Author: Mikhail Kobzarev
 * Author URI: https://www.kobzarev.com/
 * License: GNU General Public License v2
 * License URI: http://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: mihdan-only-one-category
 * GitHub Plugin URI: https://github.com/mihdan/mihdan-only-one-category
 * GitHub Branch:     master
 * Requires WP:       4.9.8
 * Requires PHP:      7.2
 */

namespace Mihdan_Only_One_Category;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Добавляем скрипт в футер админки
 */
function mihdan_only_one_category() {
	?>
	<script>
		jQuery( function ( $ ) {
			jQuery( '#categorydiv :checkbox[name^=post_category]' ).attr( 'type','radio' );
		} );
	</script>
	<?php
}
add_action( 'admin_footer', __NAMESPACE__ . '\mihdan_only_one_category' );

// eof;
