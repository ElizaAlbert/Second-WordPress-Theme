<?php /* Template Name: Single */ ?>

<?php get_header()?>

<div class='singleall'>
<?php
while(have_posts()){?>

    <div class='singlepic'>
        
<h1 id='singletitel'><?php the_title();?></h1>
<a href="<?php the_permalink(); ?>">
<?php the_post(); 
      the_post_thumbnail( array(700, 700)); ?>
    </div>
</a>
<p> <?php the_content();?></p>

</div>

<?php }?>

<div class="grid-container">
  <div class="item1"><h2 class='actortitel'><?php echo get_field('about_movie_titel');?><h2>
      <p class='actortext'> <?php echo get_field('about_movie_text');?> </p>
  </div>

  <div class="item2"><h2 class='actortitel'><?php echo get_field('actors_titel');?><h2>
      <p class='actortext'> <li class='actortext'> <?php echo get_field('actors_text');?>
</li> 
 <li class='actortext'> <?php echo get_field('actors_text');?>
</li>
 <li class='actortext'><?php echo get_field('actors_text');?>
</li>
</p>
  </div>

  <div class="item3"><h2 class='actortitel'><?php echo get_field('production_titel');?><h2>
      <p class='actortext'> <?php echo get_field('production_text');?>
           </p>
  </div>

  <div class="item4"><h2 class='actortitel'><?php echo get_field('permier_titel');?><h2>
      <p class='actortext'> <?php echo get_field('premier_text');?> </p>
  </div>

</div>

<?php get_footer()?>