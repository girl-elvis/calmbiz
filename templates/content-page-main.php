<?php if ( ! post_password_required() ) {



	$slogan =  get_post_meta( get_the_ID(), 'hero-left',true);
$text =  get_post_meta( get_the_ID(), 'hero-right',true);
?>




<div class="uk-grid-match hero-grid uk-child-width-1-2@s uk-grid-collapse" uk-grid>


    <div class="">
        <div class="uk-card uk-card-default uk-flex uk-flex-middle uk-padding"><h1 class="uk-text-uppercase uk-text-primary uk-heading-primary"><?php echo $slogan; ?></h1></div>
    </div>

    <div class="">
        <div class="uk-card uk-card-secondary uk-padding-large uk-padding-remove-left uk-padding-remove-right uk-overflow-hidden"><h1 class=" uk-text-uppercase uk-card-header uk-text-primary">WHO CAN YOU TALK TO?</h1> 



        	<div class="uk-card-body  uk-padding-remove-top uk-padding-remove-bottom">
        		<ul class="uk-grid-match icon-grid uk-child-width-1-1  uk-child-width-1-2@s uk-grid-divider uk-grid-small" uk-grid>
        			
        			<li class="icon-mates">
        				<div class="uk-grid-match icon-grid uk-child-width-1-4  uk-child-width-1-4@s uk-grid-collapse" uk-grid>
        					<div>
	        				<?php $template_url = get_bloginfo('stylesheet_directory');			            echo file_get_contents($template_url . '/dist/images/friends.svg' ); ?>
		        			</div>

						    <div class="icon-title  uk-width-3-4"><h3 class="icon-title uk-text-uppercase uk-padding-small uk-margin-remove-bottom uk-padding-remove-bottom">Friends</h3></div>
						</div>
					</li>

        			<li class="icon-helpline ">
        				<div class="uk-grid-match icon-grid uk-child-width-1-4  uk-child-width-1-4@s uk-grid-collapse" uk-grid>
							<div >
			        			 <?php echo file_get_contents($template_url . '/dist/images/helpline.svg' );?>
					   		</div>
						     <div class="icon-title uk-width-3-4"> <h3 class="icon-title uk-text-uppercase uk-padding-small uk-margin-remove-bottom uk-padding-remove-bottom">Helpline</h3>
						     <div class=" uk-padding-small uk-padding-remove-top uk-padding-remove-bottom"><p class="uk-text-small">5pm-Midnight <a href="tel:03002225717">0300 222 5717</a><br />Free + Confidential</p></div>
					 </li>

        			<li class="icon-webchat ">
        				<div class="uk-grid-match icon-grid uk-child-width-1-4  uk-child-width-1-4@s uk-grid-collapse" uk-grid>
							<div >
        				<?php echo file_get_contents($template_url . '/dist/images/webchat.svg' );?>
					   		</div>
        				<div class="icon-title  uk-width-3-4"><h3 class="icon-title uk-text-uppercase uk-padding-small uk-margin-remove-bottom uk-padding-remove-bottom">Webchat</h3>
        				   <div class=" uk-padding-small uk-padding-remove-top uk-padding-remove-bottom"><p  class="uk-text-small" >5pm-Midnight <a href="/webchat">Webchat</a><br />Free + Confidential</p></div>
        			</li>

        			<li class="icon-firstaid ">
        				<div class="uk-grid-match icon-grid uk-child-width-1-4  uk-child-width-1-4@s uk-grid-collapse" uk-grid>
							<div >
								<?php echo file_get_contents($template_url . '/dist/images/first-aider.svg' );?>
					   		</div>
        				<div class="icon-title  uk-width-3-4"><h3 class="icon-title uk-text-uppercase uk-padding-small uk-margin-remove-bottom uk-padding-remove-bottom"></h3>
        				   <div class="  uk-padding-small uk-padding-remove-top uk-padding-remove-bottom"><p class="" >Find out who your CALM First Aider is</p></div>
        			</li>
       
        		</ul>




        	</div>



        </div>
    </div>




 

<?php



	$boxes = get_post_meta( get_the_ID(), 'box', true );

	if( $boxes ) {
	  for( $i = 0; $i < $boxes; $i++ ) {
	  	 $header =  get_post_meta( get_the_ID(), 'box_' . $i . '_header', true  );
	    $content =  do_shortcode(get_post_meta( get_the_ID(), 'box_' . $i . '_box-content', true )) ;
	  
	  ?>


	    <div class="">
	        <div class="uk-card uk-card-default">
	        	<h2 class="uk-card-header uk-text-uppercase uk-text-primary"><?php echo ($header); ?></h2>
		        <div class="uk-card-body"><?php echo ($content); ?></div>
		    </div>
		</div>


	  <?php
	   
	    
	    
	  }
	}?>
</div> 
<?php 
}
the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); 


?>
