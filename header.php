<?php wp_head()?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Samlingssida</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); //Hämtar CSS reglerna ?>">
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<?php wp_head(); //Hämtar stylesheets & script ?>
</head>
<body <?php body_class(); //hämtar klass på body elementet ?>>
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">


    <h1><img src="<?php echo the_field('header_logo', 'option');?>"  id='logomovie'/></h1>



    <div class="social"> <span>FOLLOW US ON:</span>
      <ul>
        <li><a class="twitter" href="#">twitter</a></li>
        <li><a class="facebook" href="#">facebook</a></li>
        <li><a class="vimeo" href="#">vimeo</a></li>
      </ul>
    </div>
    <div id="navigation">
      <ul>
        <li><a class="active" href="#">HOME</a></li>
        <li><a href="#">NEWS</a></li>
        <li><a href="#">COMING SOON</a></li>
        <li><a href="#">CONTACT</a></li>
      </ul>
    </div>
    <div id="sub-navigation">
    <!-- Start -->
<?php  wp_nav_menu( array(  //Visar en navigeringsmeny
 'theme_location' => 'huvudmeny',
 'menu_class' => 'menu'
                )); ?>
                
<!-- Slut -->


      <div id="search">
        <form action="#" method="get" accept-charset="utf-8">
          <label for="search-field">SEARCH</label>
          <input type="text" name="search field" value="Enter search here" id="search-field" class="blink search-field"  />
          <button type="button"> Go! </button>
        </form>
      </div>
    </div>
  </div>
