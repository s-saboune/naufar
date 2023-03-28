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


<?php

$bg_image = get_field('bottom_background_image',8);?>
<style>
.botsec {
	background:url(<?php echo $bg_image['url'];?>) center top no-repeat;
	padding:30px 0;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
</style>

<div class="bannersec">
  <div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="bannerimg"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/innerbanner.jpg" width="1100" height="383" alt="">
          <div class="banneroverlay">
            <div class="bannerouter">
              <div class="bannerinner innerbannerinner">
                <h1>Search Results</h1>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="botsec innerpagebot search-page">
  <div class="container">
    <div class="row">
      <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
	  <?php if(function_exists('the_breadcrumb')):?>
        <div class="breadcum">
				<?php the_breadcrumb();?>
		</div>
		<?php endif;?>
			<div class="contentsec <?php $currentlang = get_bloginfo('language'); if($currentlang=="en-US"):?><?php elseif($currentlang=="ar"): ?>contentsec_rtl<?php endif; ?>">
			<?php
    global $query_string;
    $query_args = explode("&", $query_string);
    $search_query = array();

    foreach($query_args as $key => $string) {
      $query_split = explode("=", $string);
      $search_query[$query_split[0]] = urldecode($query_split[1]);
    } // foreach

    $the_query = new WP_Query($search_query);
    if ( $the_query->have_posts() ) : 
    ?>
    <!-- the loop -->

    <ul>    
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </li>   
      <?php endwhile; ?>
    </ul>
    <!-- end of the loop -->

    <?php wp_reset_postdata(); ?>

	<?php else : ?>
		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<p><?php get_search_form();?></p>
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