<?php get_header()?>

<!-- SKAPA HTML & CSS FÖR DET HÄR -->
   
<?php
while(have_posts()){
the_post();
the_post_thumbnail(); ?>

<h1><?php the_title();?></h1>
<p> <?php the_content();?></p>


<?php }?>
<?php get_footer()?>