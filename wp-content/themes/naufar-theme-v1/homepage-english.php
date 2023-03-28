<?php /* Template Name: Homepage English */ ?>
<?php  get_header(); ?>
 

  <div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
       <?php
echo do_shortcode('[smartslider3 slider="2"]');
?> 
		  
      </div>
    </div>
  </div>




<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
the_content();
endwhile; else: ?>
<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
 

 
<section class="section white">
          <div class="centered-slider-container">
                  <div class="centered-slider owl-carousel owl-theme">
                     <div class="centered-slider-slide">
                        <div class="centered-slider-slide-image"><img
                           src="/wp-content/uploads/2022/06/How-Can-we-help-you-Picture-1.png"
                           alt="A woman stood outside similing"
                           ></div>
                        <div class="centered-slider-slide-content content">
                           <p dir="ltr">If you need help and coming to Naufar for the first time, our friendly clinical team will thoroughly listen to your problem and assess your needs. With you, we will develop your treatment plan. Feel free to bring a friend or family member to support you.

 </p>
                        </div>
                     </div>
                     <div class="centered-slider-slide">
                        <div class="centered-slider-slide-image"><img
                           src="/wp-content/uploads/2022/06/How-Can-we-help-you-picture-2.png"
                           alt="A man stood outside smiling"
                           ></div>
                        <div class="centered-slider-slide-content content">
                           <p>We assist all ages to overcome addiction through evidence-based programs for gentlemen, ladies, young persons, and families. Our services are confidential. We help you focus on all aspects of life: emotional, physical, social, spiritual, occupational, intellectual, and environmental. </p>
                        </div>
                     </div>
                     <div class="centered-slider-slide">
                        <div class="centered-slider-slide-image"><img
                          src="/wp-content/uploads/2022/06/How-can-we-help-you-picture-3.png"
                           alt="woman standing on a bridge looking into the distance"
                           ></div>
                        <div class="centered-slider-slide-content content">
                           <p>If you are concerned about addiction in a family member or a friend, and you do not know where to start. Our qualified staff can provide you with a lot of information and confidential advice on substance use-related issues. </p>
                        </div>
                     </div>
					  
					  
					  
                     
                  </div>
               </div>
          </section>


         <br><br><br>


<h1>
	<center>What to expect</center>
</h1>



<br><br><br>

<div class="bannersec">
  <div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
       <?php
echo do_shortcode('[smartslider3 slider="3"]');
?> 
      </div>
    </div>
  </div>
</div>

 <script type="text/javascript">
           
            
            $('.centered-slider').owlCarousel({
              dots: true,
              items: 1,
              autoHeight:true,
              loop:true,
              margin:10,
              lazyLoad: true,
              smartSpeed: 500,
              responsive:{
                700:{
                  autoHeight:false,
                  center: true,
                  items:1,
                  margin:10,
					dots: true,
                  nav:true,
                  navText: ['<div class="prev"><svg aria-hidden="true" class="icon"><use xlink:href="/themes/custom/changegrowlive/assets/svg/icons.svg#slider-arrow"/></svg></div>','<div class="next"><svg aria-hidden="true" class="icon"><use xlink:href="themes/custom/changegrowlive/assets/svg/icons.svg#slider-arrow"/></svg></div>'],
                },
                1200:{
                  autoHeight:true,
                  center: true,
                  items:2,
                  margin:10,
					dots: true,
                  nav:true,
                  navText: ['<div class="prev"><svg aria-hidden="true" class="icon"><use xlink:href="/themes/custom/changegrowlive/assets/svg/icons.svg#slider-arrow"/></svg></div>','<div class="next"><svg aria-hidden="true" class="icon"><use xlink:href="themes/custom/changegrowlive/assets/svg/icons.svg#slider-arrow"/></svg></div>'],
                },
            
              }
            });
            
            
            
          
         </script>

<?php  get_footer(); ?>
