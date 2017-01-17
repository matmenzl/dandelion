<?php get_header() ?>

 <div class="container">
    <div class="row">

        <div class="col-md-9">


                <div class="page-header">
                <h2><?php printf( __( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>'); ?></h2>
                </div>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <ul class="faq">
                      <li>
                        <i class="knb-icon knb-format-"><?php the_title(); ?></i>
                        <a href="<?php the_permalink(); ?>" class="center-block"><b>Mehr lesen <!-- <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> --></b></a>
                    </li>
                </ul> 



<!--                 <?php the_content(); ?>
 --> 
            <?php endwhile; else: ?>


            <div class="page-header">
                <h1>Oh no!</h1>
            </div>

            <p>Kein Inhalt vorhanden.</p>

            <?php endif; ?>

        </div>


        <?php get_sidebar('faq'); ?>

    </div>

<?php get_footer() ?>