
<div class="uk-grid-match content-grid uk-child-width-1-2@s" uk-grid>

<?php

$slogan =  get_post_meta( get_the_ID(), 'hero-left',true);
$text =  get_post_meta( get_the_ID(), 'hero-right',true);
 if($slogan): ?>
 <div class="uk-width-2-3@m">
        <div class="uk-card uk-card-default "><h1 class="uk-heading-hero uk-text-uppercase uk-text-primary"><?php echo $slogan; ?></h1></div>
    </div>
    <div class="uk-width-1-3@m">
        <div class="uk-card uk-card-default "><h2 class="uk-text-uppercase uk-text-primary"><?php echo $text; ?></h2></div>
    </div>

<?php 
endif;
?>

    <div class="">

        <div class="uk-card uk-card-default uk-background-muted">
            <div class="uk-card-body">
                        
              <?php the_content(); ?>
             </div>
        </div>   
    </div>  

    <div class="">
        <div class="uk-card uk-card-default uk-background-muted">
            <div class="uk-card-body">
            <?php 
            $webchat_open = apply_filters( 'webchat_time', '' );
            //echo 'webchat-open: ' . $webchat_open;

            if (!$webchat_open): ?>
              <div>
                <?php the_field('out_of_hours_text'); ?>
              </div>
            <?php else: ?>
       
                   <?php endif ?>
                  <div class="webchat-atm">
                           <img 
                     src="http://thecalmzone.net/wp-content/themes/CALMV3/assets/images/button-start-webchat.png" 
                     id="chat_link_1136" 
                     title="click to start live chat .." 
                     style="cursor: pointer;">
                  </div>
             
           
    
<div>
                     <img src="http://chsops.co.uk/widget/chat_offline.jpg" id="chat_link_1136" title="click to start live chat .." style="cursor: pointer;">
           
       </div>



            </div>
        </div>

    </div>
</div>

       <script src="https://secure.callhandling.co.uk/assets/cc2/ScriptService.svc/get?name=PublicChat_Widget" type="text/javascript">  </script>
       <script type="text/javascript">
           $(document).ready(function () {
               __chsChatConnector.Init({
                   GroupID: 1136,
                               ImageContainerID: "chat_link_1136",
                               OnlineImageUrl: "http://chsops.co.uk/widget/chat.jpg",
                           OfflineImageUrl: "http://chsops.co.uk/widget/chat_offline.jpg",
                           
               });
           });
       </script>
