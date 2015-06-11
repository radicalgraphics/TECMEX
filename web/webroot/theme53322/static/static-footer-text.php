<?php /* Static Name: Footer text */ ?>
<div id="footer-text" class="footer-text">
	<?php $myfooter_text = apply_filters( 'cherry_text_translate', of_get_option('footer_text'), 'footer_text' ); ?>

	<?php if($myfooter_text){?>
		<?php echo $myfooter_text; ?>
	<?php } else { ?>
		<a href="<?php echo home_url(); ?>/"><img src="<?php echo of_get_option('footer_logo'); ?>"></a>
		<p><?php bloginfo('description'); ?></p>
	<?php } ?>
	<!--<?php if( is_front_page() ) { ?>
		Examinar <a target="_blank" rel="nofollow" href="http://www.templatemonster.com/es/temas-wordpress-tipo/">temas WordPress</a> en TemplateMonster.com/es
	<?php } ?>--!
</div>