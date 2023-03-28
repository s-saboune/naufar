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
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="bannerimg">
			<?php $page_banner_image = get_field( 'page_banner_image' ); ?>

			<img src="<?php echo esc_url( $page_banner_image['url'] ); ?>"  alt="">
			
			
  <!--        <div class="banneroverlay">
            <div class="bannerouter">
              <div class="bannerinner innerbannerinner">
                <h1><?php // echo get_the_title(); ?></h1>
              </div>
            </div>
          </div> -->
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
				<br>
				 <h3 style="color:#4D4D4D"><?php echo get_the_title(); ?></h3>
				<br>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
			
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