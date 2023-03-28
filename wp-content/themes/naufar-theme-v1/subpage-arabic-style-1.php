<?php /* Template Name: Sub Page Arabic Style 1 */ ?>

<?php get_header(ar); ?>

<div class="bannersec">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="bannerimg"><?php $page_banner_image = get_field( 'page_banner_image' ); ?>

			<img src="<?php echo esc_url( $page_banner_image['url'] ); ?>"  alt="">
     <!--     <div class="banneroverlay">
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
    <div class="row">
      <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12">
        <div class="formimg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/formsecimg.jpg" width="400" height="357" alt=""></div>
        <div class="phsec rtl_textalign"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phicon.png" width="88" height="88" alt="">
          <div class="phtext rtl_textalign"> احصل على مساعدة 24/7 الآن <a href="#">00974-4441111</a> * جميع المكالمات والرسائل سرية تمامًا
 </div>
        </div>
      </div>
      <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
        <div class="formouter form_rtl">
          <h3>إذا كنت تريد تغيير حياتك ، فنحن هنا من أجلك.</h3>
          <form action="#">
            <div class="row">
              <div class="col-xl-12 form-group">
                <label>أريد أن:
</label>
                <select class="dropdown" onchange="location = this.value;">
                  <option>الرجاء التحديد</option>
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

<?php  get_footer(ar); ?>