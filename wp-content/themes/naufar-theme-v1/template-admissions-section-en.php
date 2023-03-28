<?php /* Template Name: Template Admissions Section EN */ ?>

<?php  get_header(); ?>



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
        <div class="contentsec">
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
        <div class="formimg">
			
			<?php if ( get_field( 'footer_image_1' ) ): ?>
<?php if ( get_field( 'footer_image_1' ) ) : ?>
	<img src="<?php the_field( 'footer_image_1' ); ?>" />
<?php endif ?>

<?php else: // field_name returned false ?>

<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/formsecimg.jpg" alt="" width="400" height="357">

<?php endif; // end of if field_name logic ?>
			
			</div>
        <div class="phsec"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phicon.png" alt="" width="88" height="88">
          <div class="phtext"> START YOUR RECOVERY TODAY <a href="tel:+97444946000">+974 44946000</a> *All calls are confidential </div>
        </div>
      </div>
      <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
        <div class="formouter">
          <h3>If you want to change your life, we’re here for you.</h3>
          <form action="#">
            <div class="row">
              <div class="col-xl-12 form-group">
                <label>I am:</label>
               <select class="dropdown" onchange="location = this.value;">
                  <option>Please select</option>
					<option value="/clinical-referal-specialist/">Seeking help for myself</option>
					<option value="/what-is-substance-use-disorder/">Worried about a family member or friend</option>
					<option value="/clinical-referal-specialist/">Professional referring a patient</option>
					<option value="/contact/">Looking for collaboration opportunity</option>
					
                </select>
              </div>
            
             
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>