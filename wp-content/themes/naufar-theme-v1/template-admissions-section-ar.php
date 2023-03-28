<?php /* Template Name: Template Admissions Section AR */ ?>

<?php  get_header(ar); ?>



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
        <div class="formimg">
			
			<?php if ( get_field( 'footer_image_1' ) ): ?>
<?php if ( get_field( 'footer_image_1' ) ) : ?>
	<img src="<?php the_field( 'footer_image_1' ); ?>" />
<?php endif ?>

<?php else: // field_name returned false ?>

<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/formsecimg.jpg" alt="" width="400" height="357">

<?php endif; // end of if field_name logic ?>
			
			</div>
        <div class="phsec rtl_textalign"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/phicon.png" alt="" width="88" height="88">
          <div class="phtext rtl_textalign"> إبدأ تعافيك اليوم
 <a href="tel:+97444946000">0097444946000</a> تعامل المكالمات بسرية تامة
 </div>
        </div>
      </div>
      <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
        <div class="formouter form_rtl">
          <h3>إذا كنت تريد تغيير حياتك ، فنحن هنا من أجلك.</h3>
          <form action="#">
            <div class="row">
              <div class="col-xl-12 form-group">
                <label>أنا</label>
               <select class="dropdown" onchange="location = this.value;">
				   
				   <option> يرجى الاختيار </option>
				   
                 <option value="/ar/%d8%a7%d8%ae%d8%b5%d8%a7%d8%a6%d9%8a-%d8%a7%d9%84%d8%a5%d8%ad%d8%a7%d9%84%d8%a9-%d8%a7%d9%84%d8%b3%d8%b1%d9%8a%d8%b1%d9%8a%d8%a9/">أطلب المساعدة لنفسي </option>

					<option value="/ar/%d9%85%d8%a7-%d9%87%d9%88-%d8%a7%d8%b6%d8%b7%d8%b1%d8%a7%d8%a8-%d8%aa%d8%b9%d8%a7%d8%b7%d9%8a-%d8%a7%d9%84%d9%85%d9%88%d8%a7%d8%af%d9%91-%d8%a7%d9%84%d9%85%d8%ae%d8%af%d9%91%d8%b1%d8%a9/">أشعر بالقلق على أحد أفراد الاسرة/ صديق </option>

					<option value="/ar/%d8%a7%d8%ae%d8%b5%d8%a7%d8%a6%d9%8a-%d8%a7%d9%84%d8%a5%d8%ad%d8%a7%d9%84%d8%a9-%d8%a7%d9%84%d8%b3%d8%b1%d9%8a%d8%b1%d9%8a%d8%a9/">أرغب في تحويل إحالة طبية</option>

					<option value="/ar/contact-2/"> أبحث عن فرصة تعاون و شراكة مع نوفر</option>
					
                </select>
              </div>
            
             
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(ar); ?>