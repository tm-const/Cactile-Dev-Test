<?php
$pre_footer = get_field('pre_footer');
if( $pre_footer ): 
    $title = $pre_footer['title'];
    $button_text = $pre_footer['button_text'];
    $button_link = $pre_footer['button_link'];
    $anchor = $pre_footer['anchor'];
    ?>

<!-- START Pre-Footer -->
<div id="<?php echo $anchor; ?>" class="pre-footer-cta light-bg-green">
    <div class="container">
        <h2><?php echo $title; ?></h2>
        <button class="btn btn-border hvr-grow"><?php echo $button_text; ?></button>
    </div>
</div>
<!-- END Pre-Footer -->

<?php endif; ?>