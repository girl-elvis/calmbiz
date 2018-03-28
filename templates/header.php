<header class="banner ">
  <div class="container uk-container uk-position-relative">

<?php if(is_page(array('main', 'get-help'))){
  echo '<div class="uk-float-right pm uk-background-muted uk-position-absolute uk-position-top-right">  <a href="/pm-portal/">Project Managers</a></div>';
}
?>

    <nav class="nav-primary uk-navbar-container uk-navbar-transparent" uk-navbar> 

     <div class="uk-navbar-left">  <a href="<?php echo bloginfo('url'); ?>" class="uk-navbar-item uk-logo">


      
      <?php $template_url = get_bloginfo('stylesheet_directory');
            $logo_svg = file_get_contents($template_url . '/dist/images/cclogo.svg' );
      echo $logo_svg;
      ?>


     </a></div>
     
      <?php
          $homeargs = array(
              'theme_location' => 'primary_navigation', 
              'menu_class' => 'nav uk-navbar-nav', 
              'container_class' =>  'uk-navbar-right  uk-visible@m'
          );
          $loggedargs = array(
              'theme_location' => 'private_navigation', 
              'menu_class' => 'nav uk-navbar-nav', 
              'container_class' =>  'uk-navbar-right  uk-visible@m'
          );



          if ( is_page('home')) :
            //wp_nav_menu($homeargs); 
          echo '<div class="uk-navbar-right"> ';

            echo '<a class="button uk-button" value="login" type="button" href="/main">LOGIN</a>';
          else :
            

            echo '<div class="uk-navbar-right"> ';

          
                echo pplb_logout_button(); 
             
        
            //wp_nav_menu($loggedargs); 
          endif;

          echo '</div>';
      ?>
  
                    
                    <div class="uk-navbar-item uk-hidden@m uk-padding-remove-right">
                        <a class="uk-navbar-toggle" uk-navbar-toggle-icon uk-toggle="target: #offcanvas"></a>
                    </div>


    </nav>


  <div class="nav-overlay uk-navbar-left uk-flex-1" hidden>
                        <div class="uk-navbar-item uk-width-expand">
                            <form class="uk-search uk-search-navbar uk-width-1-1" action="/" method="get">
                                <input class="uk-search-input" type="search" name="search" placeholder="Search..." autofocus>
                            </form>
                        </div>

                        <a class="uk-navbar-toggle" uk-close uk-toggle="target: .nav-overlay; animation: uk-animation-fade" href="#" style="height: auto;"></a>
                    </div>
                    
                
                

          <div id="offcanvas" uk-offcanvas="mode: slide; flip: true; overlay: true;">
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" uk-close></button>
                <ul class="uk-nav uk-nav-default">
                    
                    <?php          
                    $defaults = array(
                        'menu'              => 'Main Nav',
                        'theme_location'    => 'primary_navigation',
                        'container'         => '',
                        'items_wrap'        => '%3$s'
                    );
                    wp_nav_menu($defaults); 
                    ?>
                                        
                    <li><a href="#" uk-toggle="target: #search">Search</a></li>
                </ul>
            </div>
        </div>
        
        <div id="search" clas="uk-flex-top" uk-modal>
            <div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical">
                <form action="/" method="get">
                    <input type="text" name="s" class="uk-input uk-margin-small-bottom" placeholder="Search for something" value="<?php the_search_query(); ?>">
                    <button type="submit" class="uk-button uk-button-primary">Search</button>
                </form>
            </div>
        </div>

  </div>
</header>

<?php //echo pplb_logout_button(); ?>