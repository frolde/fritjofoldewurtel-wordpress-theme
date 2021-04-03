<!-- pageheader -->
<div class="pageheader" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' ); ?>);">
	<div class="pageheader-inner">
		<div class="container pageheader-inner-container">
			<h1 class="pageheader-headline">{!! App::title() !!}</h1>
		</div>	
	</div>
</div>
<!-- pageheader Ende -->
