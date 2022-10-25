<?php
$product_group_one = get_field('product_group_one');
if( $product_group_one ): 
    $title = $product_group_one['title'];
    $description = $product_group_one['description'];
    $button_text = $product_group_one['button_text'];
    $button_link = $product_group_one['button_link'];
    $anchor = $product_group_one['anchor'];
    $product_selection_one = get_field('product_selection_one');
    ?>

<!-- START Product House Plants -->
<div id="<?php echo $anchor; ?>" class="product">
    <div class="row">
        <div class="left-align-products flex-prods">
            <div class="col  col-sm-12 col-md-6 col-xl-6">
                <div class="row r-flex">
                    <?php 
                    if( $product_selection_one ):
                        foreach( $product_selection_one as $post ): 
                            setup_postdata($post);
                            ?>
                                <div class="col-sm-12 col-mx-6 col-xl-6 pad-mobile">
                                    <div class="card" style="background-image: url('<?php the_field( 'product_image' ); ?>');">
                                        <div class="description">
                                            <div class="title"><?php the_field( 'title' ); ?></div>
                                            <div class="price">$<?php the_field( 'price' ); ?></div>
                                        </div>
                                    </div>
                                </div>
                        <?php endforeach; wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col col-sm-12 col-md-6 col-xl-6">
                <div class="container light-bg-green">
                    <div class="content">
                        <h2 class="text-dark-green"><?php echo $title; ?></h2>
                        <p class="text-mud-green"><?php echo $description; ?></p>
                        <button class="btn btn-border text-dark-green hvr-grow"><?php echo $button_text; ?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END -->

<?php endif; ?>