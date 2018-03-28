<?php

$slogan =  get_post_meta( get_the_ID(), 'hero-left',true);
$text =  get_post_meta( get_the_ID(), 'hero-right',true);
$text3 = get_post_meta( get_the_ID(), 'header_3',true);

if($slogan):
 ?>
<div class="uk-grid-match hero-grid uk-child-width-1-2@s uk-grid-collapse" uk-grid>
    <div class="uk-width-1-1 clearboxside">
        <div class="uk-card uk-card-default "><h1 class="uk-heading-hero uk-text-uppercase uk-text-primary"><?php echo $slogan; ?></h1></div>
    </div>



<?php 
endif;
?>


    <div class="">
        <div class="uk-padding"><div class=""><?php the_content(); ?></div></div>
    </div>

    <div class="uk-padding">
        <div class="uk-grid split" uk-grid>
            <div class="uk-padding uk-padding-remove-top"><h3 class="uk-text-uppercase"> <?php echo $text; ?> </h3></div>
            <div class=""><h3 class="uk-text-uppercase uk-text-primary"> <?php echo $text3; ?> </h3></div>
        
        </div>
    </div>

</div>

<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
