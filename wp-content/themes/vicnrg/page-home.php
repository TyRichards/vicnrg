<?php
/*
Template Name: Home Template
*/
?>

<?php get_header('home'); ?>

      <!-- Begin page content -->
      <div class="home-content container col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4">
        <div class="lg-logo col-xs-12 col-md-12">
          <img class="img-responsive text-center" src="<?php echo get_template_directory_uri(); ?>/library/images/logo-blue.svg" alt="VicNRG" width="100%" />
        </div>
        <div class="col-xs-10 col-xs-offset-1 col-md-12 col-md-offset-0">
	        <p class="lead text-center"><i>In the quest for energy independence, VicNRG is the only real solution.</i></p>
        </div>
        <div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
	        	<a href="../contact" type="button" class="btn btn-block btn-trans btn-xl">Contact Us</a>
	        	<a type="button" class="btn btn-block btn-trans btn-xl visible-xs">817.562.4888</a>        	
        </div>
      </div>
    </div>

<?php get_footer(); ?>