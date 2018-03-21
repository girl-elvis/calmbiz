<?php
if ( ! post_password_required() ) {

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




<div class="content-grid uk-child-width-1-2@s" uk-grid>

<?php



    $boxes = get_post_meta( get_the_ID(), 'box', true );

    if( $boxes ) {
      for( $i = 0; $i < $boxes; $i++ ) {
         $header =  get_post_meta( get_the_ID(), 'box_' . $i . '_header', true  );
        $content =  do_shortcode(get_post_meta( get_the_ID(), 'box_' . $i . '_box-content', true )) ;
      
      ?>


        <div class="">
            <div class="uk-card uk-card-default uk-background-muted">
                <h2 class="uk-card-header uk-text-uppercase uk-text-primary"><?php echo ($header); ?></h2>
                <div class="uk-card-body"><?php echo ($content); ?></div>
            </div>
        </div>


      <?php
       
        
        // Build the video box
        //echo '<div class="' . $class . '"><a href="' . $video . '">' . $thumbnail . '</a>' . $title . '</div>';
        
      }
    }?>
</div> 

<?php     } else {
    the_content();
}

wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); ?>
