<?php
/*
    Template Name: Hero Image Template
*/
?>


<?php get_header() ?>

<section class="heroimage">
<?php the_post_thumbnail( 'large','style=width:100%;height:auto;'); ?>
</section>

 <div class="container">
    <div class="row">

        <div class="col-md-12">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="page-header">
                    <h1><?php the_title(); ?></h1>
                </div>

                <?php the_content(); ?>

            <?php endwhile; else: ?>

            <div class="page-header">
                <h1>Oh no!</h1>
            </div>

            <p>Kein Inhalt vorhanden.</p>

            <?php endif; ?>

        
<?php get_footer() ?>