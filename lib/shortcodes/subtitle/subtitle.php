<?php namespace CAHNRSWP\Plugin\Pagebuilder;

?><<?php echo esc_html( $tag ); if ( ! empty( $anchor ) ) : ?> id="<?php echo esc_html( $anchor ); endif; ?>" class="<?php echo esc_html( $classes ); ?>">
	<?php if ( ! empty( $link ) ) : ?><a href="<?php echo esc_url( $link ); ?>" ><?php endif; ?>
		<?php echo esc_html( $title ); ?>
	<?php if ( ! empty( $link ) ) : ?></a><?php endif; ?>
</<?php echo esc_html( $tag ); ?>>
