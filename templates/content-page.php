<?php
if ( ! post_password_required() ) {

$slogan =  get_post_meta( get_the_ID(), 'hero-left',true);
$text =  get_post_meta( get_the_ID(), 'hero-right',true);

 ?>
<div class="uk-grid-match hero-grid uk-child-width-1-2@s uk-grid-collapse uk-grid " uk-grid>
  

    <div class="clearboxside clearboxbottom">
        <div class="uk-card uk-card-default "><div class="uk-card-body"><h1 class="uk-text-primary"><?php  if($slogan) echo $slogan ;?></h1><?php the_content(); ?></div></div>
    </div>
   
</div>




<div class="content-grid uk-child-width-auto uk-grid-divider uk-grid-collapse download-grid" uk-grid>

<?php



    $boxes = get_post_meta( get_the_ID(), 'box', true );

    if( $boxes ) {
      for( $i = 0; $i < $boxes; $i++ ) {
         $header =  get_post_meta( get_the_ID(), 'box_' . $i . '_header', true  );
        $content =  do_shortcode(get_post_meta( get_the_ID(), 'box_' . $i . '_box-content', true )) ;
      
      ?>


        <div class="">
            <div class="uk-card uk-card-default uk-padding">
                
                <h3 class="uk-text-uppercase uk-text-primary"><?php echo ($header); ?></h3><?php echo ($content); ?>
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
