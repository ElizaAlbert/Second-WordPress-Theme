<?php /* Template Name: Production Company */ ?>

<?php get_header()?>



<?php get_header()?>


<?php
while (have_posts()){
the_post();
?>

<h1 id='productionlogo'> Production Companies: </h1>

<div class="production">
<?php 
$allaproductions = get_terms(array(
    'taxonomy' => 'production_company'
));
?>

<?php 


foreach(  $allaproductions as $allaproductionssiffra   )   //  $allagenrersiffra = ish  $allagenrer[0]  $allagenrer[1]  $allagenrer[2]
{
    
$nume =  $allaproductionssiffra->name;
$slugi = $allaproductionssiffra->slug;
$lanki =  get_term_link(  $slugi, 'production_company'   );
  // echo $namn . ' ' . $link; 
      

  
    ?>

 <h2 class='productiontitlar'><a href="<?php echo $lanki;?>">
     <?php echo $nume ?></h2></a>
<div>



      <?php
}

?>

<?php }?>

<?php get_footer()?>