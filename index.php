<?php get_header();?>


  <div id="main">
    <?php
			while(have_posts()){
			the_post();
?>

    <div id="content">
      <div class="box">
        <div class="head">
          <h2>LATEST MOVIES</h2>
          
          <p class="text-right">Click on images for more information.</a></p>
        </div>
         <div class="movie">
          <div class="movie-image"><span class="play"><span class="name" ></span></span>   <?php 
$hink = new WP_Query( array (
    'post_type' => 'movie'
));


while ($hink -> have_posts() )
{
$hink -> the_post();
?>
 <div class='movietitle'>  <a href="<?php the_permalink(); ?>">
<?php the_post_thumbnail(); ?>
<?php the_title()?> </div>
     </a>


     <?php

wp_reset_postdata();
}
?>

    <?php } ?>
    
    

  <?php get_footer()?>