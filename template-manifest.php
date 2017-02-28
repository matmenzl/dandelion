<?php
/*
    Template Name: Manifest
*/
?>

<?php get_header('manifest') ?>


<div class="manifest-image">

<div class="manifestanimation animated fadeInRightBig">Das Manifest</div>

    <div class="manifest-text animated fadeInLeftBig">
    <a href="http://www.schule-dandelion.ch/"><img src="/wp-content/themes/dandelion/images/dandelion_logo.png" class="img-responsive" alt="" style="width:20em;"></a>



            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <?php the_content(); ?>
            
            <?php endwhile; endif; ?>

            <div class="fb-like" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
    </div>

    </div>



<div class="container">




