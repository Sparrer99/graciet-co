<?php

/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

if (is_active_sidebar('sidebar-1')) : ?>
	<div class="div-wrapper-social">
		<div class="div-social">
			<span>Suivez-nous sur les réseaux sociaux</span>
			<a href="https://www.facebook.com/formationweb"><img src="/wp-content/uploads/2021/04/facebook-square.png"></a>
			<a href="https://twitter.com/stephanegraciet?lang=fr"><img src="/wp-content/uploads/2021/04/twitter-square.png"></a>
			<a href="https://fr.linkedin.com/company/graciet-&-co"><img src="/wp-content/uploads/2021/04/linkedin.png"></a>
		</div>
	</div>
	<aside class="widget-area">
		<?php dynamic_sidebar('sidebar-1'); ?>
	</aside><!-- .widget-area -->

<?php endif; ?>