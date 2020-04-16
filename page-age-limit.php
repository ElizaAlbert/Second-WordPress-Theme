<?php /* Template Name: age-limit */ ?>


<?php get_header()?>


<?php
while (have_posts()){
the_post();
?>

<h1 id='agelimitlogo'> Age Limits: </h1>

<div class="agelimit">
<?php 
$allalimits = get_terms(array(
    'taxonomy' => 'age_limit'
));
?>

<?php 


foreach(  $allalimits as $allalimitssiffra   )   //  $allagenrersiffra = ish  $allagenrer[0]  $allagenrer[1]  $allagenrer[2]
{
    
$name =  $allalimitssiffra->name;
$slugy = $allalimitssiffra->slug;
$lank =  get_term_link(  $slugy, 'age_limit'   );
  // echo $namn . ' ' . $link; 
      

  
    ?>
<hr>
 <h2 class='agelimittitlar'><a href="<?php echo $lank;?>">

     <?php echo $name ?></h2></a>
<div>


      <?php
}

?>
<hr>
<?php }?>

<?php get_footer()?>