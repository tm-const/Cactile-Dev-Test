<div class="CSSslider">

  <!-- Don't wrap targets in parent -->
  <s id="s1"></s> 
  <s id="s2"></s>
  <s id="s3"></s>
  <s id="s4"></s>

  <div class="slider">
    <?php 
    $slider_images = get_field('slider_images');
    if( $slider_images ):
        foreach( $slider_images as $post ): 
            setup_postdata($post);
            ?>
                <div style="background-image:url('<?php echo the_field( 'slide_image' ); ?>');"></div>
        <?php endforeach; wp_reset_postdata(); ?>
    <?php endif; ?>
  </div>
  
  <div class="prevNext">
    <div><a class="prev-icon" href="#s3"></a><a class="next-icon" href="#s2"></a></div>
    <div><a class="prev-icon" href="#s1"></a><a class="next-icon" href="#s3"></a></div>
    <div><a class="prev-icon" href="#s2"></a><a class="next-icon" href="#s1"></a></div>
  </div>

  <div class="bullets">
    <a href="#s1"></a>
    <a href="#s2"></a>
    <a href="#s3"></a>
  </div>

</div>