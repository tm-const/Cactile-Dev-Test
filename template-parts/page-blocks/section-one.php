<?php
$section_1 = get_field('section_1');
if( $section_1 ): 
    $title = $section_1['title'];
    $description = $section_1['description'];
    $button_text = $section_1['button_text'];
    $button_link = $section_1['button_link'];
    $featured_image = $section_1['featured_image']['url'];
    $anchor = $section_1['anchor'];
    ?>

<!-- START Section 1 -->
<div id="<?php echo $anchor; ?>"class="section">
    <div class="row r-flex">
        <div class="col col-sm-12 col-md-6 col-xl-6">
            <div class="container theme-bg-white">
                <div class="content">
                    <h2 class="text-dark-green"><?php echo $title; ?></h2>
                    <p class="text-mud-green"><?php echo $description; ?></p>
                    <button class="btn btn-border hvr-grow"><?php echo $button_text; ?></button>
                </div>  
            </div>
        </div>
        <div class="col col-sm-12 col-md-6 col-xl-6 no-content-img" style="background-image: url(<?php echo esc_url( $featured_image ); ?>)">
        </div>
    </div>
</div>
<!-- END -->

<?php endif; ?>