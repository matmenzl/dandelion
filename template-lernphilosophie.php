<?php
/*
    Template Name: Lernphilosophie
*/
?>

<?php get_header() ?>

 <div class="container">
    <div class="row">

        <div class="col-md-9 text">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="page-header">
                    <h1 class="fancy_title"><?php the_title(); ?></h1>
                </div>

                <?php the_content(); ?>

            <?php endwhile; else: ?>

            <div class="page-header">
                <h1>Oh no!</h1>
            </div>

            <p>Kein Inhalt vorhanden.</p>

            <?php endif; ?>

        </div>

        <?php get_sidebar('lernphilosophie'); ?>

    </div>

<?php get_footer() ?>