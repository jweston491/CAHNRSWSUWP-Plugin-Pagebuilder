<?php namespace CAHNRSWP\Plugin\Pagebuilder;

?><div class="cpb-image"> 
	<?php if ( ! empty( $caption ) ) : ?>
	<figure class="cpb-figure" id="attachment_<?php echo esc_attr( $atts['img_id'] ) ?>" aria-describedby="caption-attachment-<?php echo esc_attr( $atts['img_id'] ) ?>">
	<?php endif; ?>
	<?php if ( ! empty( $url ) ) : ?><a href="<?php echo esc_url( $url ); ?>"><?php endif; ?>
	<img src="<?php echo esc_url( $img_src ); ?>" style="width:100%;display:block" <?php if ( ! empty( $alt ) ) : ?>alt="<?php echo esc_html( $alt ); ?>"<?php endif; ?> /> 
	<?php if ( ! empty( $url ) ) : ?></a><?php endif; ?>
	<?php if ( ! empty( $caption ) ) : ?>
	<figcaption id="caption-attachment-<?php echo esc_attr( $atts['img_id'] ) ?>" class="wp-caption-text"><?php echo esc_html( $caption ) ?></figcaption>
	<?php endif; ?>
	<?php if ( ! empty( $caption ) ) : ?>
	</figure>
	<?php endif; ?>
</div>
