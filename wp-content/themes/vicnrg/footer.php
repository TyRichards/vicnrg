	<div class="clearfix">
    <div id="footer">
      <div class="footer-pad">
	      <div class="container">
			<div class="row">
			
		        <div class="col col-xs-6 col-xs-offset-3 col-md-3 col-md-offset-0">
		          <div class="footer-logo">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/library/images/logo-white.svg" alt="footer-logo" width="100%" />          
		          </div>
		          <!--<img src="..." class="img-responsive" alt="Responsive image">-->
				  <!--<p class="text-muted credit">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All Rights Reserved.</p>-->          
		        </div>
		        
						<div class="clearfix visible-xs visible-sm"></div>
		        
		        <div class="col col-xs-12 col-xs-offset-0 col-md-12 block">
						  <?php 
						  		// Find way to add this to functions.php 
								$footer_nav = array(
									'theme_location'  => '',
									'menu'            => 'Footer Menu',
									'container'       => 'div',
									'container_class' => 'text-center cont',
									'container_id'    => '',
									'menu_class'      => 'nav navbar-nav',
									'menu_id'         => '',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'before'          => '',
									'after'           => '',
									'link_before'     => '',
									'link_after'      => '',
									'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
									'depth'           => 0,
									'walker'          => ''
								);				  
						  
								wp_nav_menu( $footer_nav );
						  
						   ?>  				  							
		        </div>
		        
				<div class="clearfix visible-xs visible-sm"></div>		       		        
		        <div class="clearfix"></div>
		        
			</div> <!-- end .row -->                
	      </div> <!-- end .container --> 
      </div>     
    </div> <!-- end .footer -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/library/js/bootstrap.min.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
