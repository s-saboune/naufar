<?php /* Template Name: Sub Page Arabic Style 2 */ ?>

<?php get_header(ar); ?>

<div class="bannersec">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="bannerimg"><?php $page_banner_image = get_field( 'page_banner_image' ); ?>

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
        <div class="breadcum rtl_textalign"><?php // if( function_exists( 'bcn_display' ) ) bcn_display(); ?> </div>
        <div class="contentsec contentsec_rtl">
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

<?php  get_footer(ar); ?>