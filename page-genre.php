<?php /* Template Name: Genre */ ?>

<!-- Sidan man kommer till när man klickar sin in på någon genre, är taxnomy-genre.php -->

<?php get_header()?>

<?php
while (have_posts()){
the_post();
?>

<h1 id='genrelogo'> Genres: </h1>

<div class="drama">
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
  // echo $namn . ' ' . $link; 
      

  
    ?>

 <h2 class='genretitlar'><a href="<?php echo $link;?>">
     <?php echo $namn ?></h2></a>
<div>



      <?php
}

?>

<?php }?>


