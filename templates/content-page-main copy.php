<?php if ( ! post_password_required() ) {
?>

<div class="uk-grid-match hero-grid uk-child-width-1-2@s" uk-grid>
    <div class="">
        <div class="uk-card uk-card-secondary uk-padding-large uk-padding-remove-left uk-padding-remove-right uk-overflow-hidden"><h1 class=" uk-text-uppercase uk-card-header">WHO CAN YOU TALK TO?</h1> 



        	<div class="uk-card-body  uk-padding-remove-top uk-padding-remove-bottom "  >
        		<ul class="uk-grid-match icon-grid uk-child-width-1-2  uk-child-width-1-4@s" uk-grid uk-switcher>
        			<li class="icon-mates uk-visible-toggle" >
        				<?php $template_url = get_bloginfo('stylesheet_directory');			            echo file_get_contents($template_url . '/dist/images/friends.svg' ); ?>
						<div class="icon-title"><h5 class="icon-title uk-text-uppercase uk-text-center">Mates</h5></div>
						   
					</li>

        			<li class="icon-helpline uk-visible-toggle">
	        			 <?php echo file_get_contents($template_url . '/dist/images/helpline.svg' );?>
					     <div class="icon-title"> <h5 class="icon-title uk-text-uppercase uk-text-center">Helpline</h5></div>
					  
					 </li>

        			<li class="icon-webchat uk-visible-toggle">
        				<?php echo file_get_contents($template_url . '/dist/images/webchat.svg' );?>
        				<div class="icon-title"><h5 class="icon-title uk-text-uppercase uk-text-center">Webchat</h5></div>
        				   <div class="rollover uk-hidden-hover uk-position-absolute uk-background-default uk-padding-small uk-padding-remove-top uk-padding-remove-bottom"><h4 class="" >5pm-Midnight <a href="/webchat">Webchat</a><<br />Free + Confidential</div></h4>
        			</li>

        			<li class="icon-firstaid uk-visible-toggle"><?php echo file_get_contents($template_url . '/dist/images/first-aider.svg' );?>
        				<div class="icon-title"><h5 class="icon-title uk-text-uppercase uk-text-center">CALM First Aider</h5></div>
        				   <div class="rollover uk-hidden-hover uk-position-absolute uk-background-default uk-padding-small uk-padding-remove-top uk-padding-remove-bottom"><h4 class="" >Find out who your CALM First Aider is</h4></div>
        			</li>
       
        		</ul>

        		       		<ul class="uk-grid-match icon-grid uk-child-width-1-2  uk-child-width-1-4@s message-container uk-switcher" uk-grid>
        			<li class="icon-mates " >
        				
					
						   <div class="rollover  uk-position-absolute uk-background-default uk-padding-small uk-padding-remove-top uk-padding-remove-bottom"><h4 class="" >How to Help?<br /><a href="#readmore">Check these</a></h4></div>
					</li>

        			<li class="icon-helpline ">
	        			
					     <div class="rollover uk-position-absolute uk-background-default uk-padding-small uk-padding-remove-top uk-padding-remove-bottom"><h4 class="" >5pm-Midnight <a href="tel:03002225717">0300 222 5717</a><br />Free + Confidential</h4></div>
					 </li>

        			<li class="icon-webchat">
        			
        				   <div class="rollover uk-position-absolute uk-background-default uk-padding-small uk-padding-remove-top uk-padding-remove-bottom"><h4 class="" >5pm-Midnight <a href="/webchat">Webchat</a><<br />Free + Confidential</div></h4>
        			</li>

        			
        				   <div class="rollover uk-position-absolute uk-background-default uk-padding-small uk-padding-remove-top uk-padding-remove-bottom"><h4 class="" >Find out who your CALM First Aider is</h4></div>
        			</li>
       
        		</ul>


        	</div>



        </div>
    </div>




    <div class="">
        <div class="uk-card uk-card-default "><h2 class="uk-text-uppercase uk-text-primary"><?php the_post_thumbnail("full"); ?></h2></div>
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
<?php 
}
the_content(); ?>
<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']); 


?>
