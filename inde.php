<?php while ( have_posts() )
{
the_post();
the_title();
}

echo "<hr>";





$hink = new WP_Query( array (
    'post_type' => 'movie'
));

while ($hink -> have_posts() )
{
$hink -> the_post();
the_title();
the_post_thumbnail();
}
wp_reset_postdata();



/* FÖR GENRE */

<?php 
$id = get_the_id();
$genre = get_the_terms($id, 'genre');
$genreobjekt = $genre[0];
$genrestring = $genreobjekt->slug;
?> 


<h2 class='genretitlar'><a href="<?php echo get_term_link($genrestring, 'genre');?>"><?php echo get_field('genre');?> Drama <h2> 


/* title på genre */

single_term_title()



// GENRER 

<?php 
$allagenrer = get_terms(array(
    'taxonomy' => 'genre'
));
?>

<?php 

foreach(  $allagenrer as $allagenrersiffra   )   //  $allagenrersiffra = ish  $allagenrer[0]  $allagenrer[1]  $allagenrer[2]
{
    
$namn =  $allagenrersiffra->name;
$slugg = $allagenrersiffra->slug;
$link =  get_term_link(  $slugg, 'genre'   );
   echo $namn . ' ' . $link; 
    
    ?>
      <h2 class='genretitlar'><a href="<?php get_term_link( $namn, 'genrer' ) ?>"> Action <h2>

      <?php
}
die('STOP');
?>
