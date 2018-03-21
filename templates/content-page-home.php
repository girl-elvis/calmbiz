<?php

$slogan =  get_post_meta( get_the_ID(), 'hero-left',true);
$text =  get_post_meta( get_the_ID(), 'hero-right',true);

if($slogan):
 ?>
<div class="uk-grid-match uk-grid-divider hero-grid" uk-grid>
    <div class="uk-width-2-3@m">
        <div class="uk-card uk-card-default "><h1 class="uk-heading-hero uk-text-uppercase uk-text-primary"><?php echo $slogan; ?></h1></div>
    </div>
    <div class="uk-width-1-3@m">
        <div class="uk-card uk-card-default "><h2 class="uk-text-uppercase uk-text-primary"><?php echo $text; ?></h2></div>
    </div>
</div>

<?php 
endif;
?>

<div class="uk-grid-match content-grid uk-child-width-1-2@s" uk-grid>
    <div class="">
        <div class="uk-card uk-card-default uk-background-muted"><div class="uk-card-body"><?php the_content(); ?></div></div>
    </div>
    <div class="">
        <div class="uk-card uk-card-default "><h2 class="uk-text-uppercase uk-text-primary"> pic here </h2></div>
    </div>
</div>

<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
