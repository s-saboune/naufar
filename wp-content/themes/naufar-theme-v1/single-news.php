
<?php


   

    $currentlang = get_bloginfo('language');
    if($currentlang=="en-US"):

?>
<?php
get_header(); ?>

<?php elseif($currentlang=="ar"): ?>
<?php
get_header(ar); ?>
<?php endif; ?>



<div class="bannersec">
  <div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="bannerimg">
			<?php $page_banner_image = get_field( 'page_banner_image' ); ?>

			<img src="<?php echo esc_url( $page_banner_image['url'] ); ?>" width="1100" height="383" alt="">
			
			
          <div class="banneroverlay">
            <div class="bannerouter">
              <div class="bannerinner innerbannerinner">
                <h1><?php echo get_the_title(); ?></h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="botsec innerpagebot">
  <div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="breadcum">
			
	
<?php // if( function_exists( 'bcn_display' ) ) bcn_display(); ?>
		
			
			
			
</div>
        	<div class="contentsec <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?><?php elseif($currentlang=="ar"): ?>contentsec_rtl<?php endif; ?>">
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
			
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
        <div class="formimg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/formsecimg.jpg" alt="" width="400" height="357"></div>
        <div class="phsec"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phicon.png" alt="" width="88" height="88">
          <div class="phtext"> GET 24/7 HELP NOW <a href="#">+974 444 1111</a> * All calls &amp; messages are totally
            confidential </div>
        </div>
      </div>
      <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
        <div class="formouter">
          <h3>If you want to change your life, we’re here for you.</h3>
          <form action="#">
            <div class="row">
              <div class="col-xl-12 form-group">
                <label>I want to:</label>
                <select class="dropdown" onchange="location = this.value;">
                  <option>Please select</option>
                  <option value="Home.php">Lorem</option>
                </select>
              </div>
            
             
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?>
<?php get_footer(); ?>
<?php elseif($currentlang=="ar"): ?>
<?php get_footer(ar); ?>
<?php endif; ?>