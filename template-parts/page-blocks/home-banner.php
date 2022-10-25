<?php
$page_banner = get_field('page_banner');
if( $page_banner ): 
	$title = $page_banner['title'];
	$description = $page_banner['description'];
	$button_text = $page_banner['button_text'];
	$button_link = $page_banner['button_link'];
	$anchor = $page_banner['anchor'];
	$page_banner = $page_banner['featured_image']['url'];
	?>

	<!-- START Home Page Hero -->
	<div class="hero-container" style="background-image: url(<?php echo esc_url( $page_banner ); ?>)">
	    <div class="content">
	        <h1 class="text-dark-green"><?php echo $title; ?></h1>
	        <p class="text-mud-green"><?php echo $description ; ?></p>
	        <button class="btn btn-green text-white hvr-grow"><?php echo $button_text ; ?></button>
	    </div>
	</div>
	<!-- END Home Page Hero -->

<?php endif; ?>