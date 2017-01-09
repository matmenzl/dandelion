<?php get_header() ?>

 <div class="container">
    <div class="row">

        <div class="col-md-9">

            <div class="page-header">
                <h1><?php single_cat_title(''); ?></h1>
                
            </div>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <article class="post col-md-12">                    
                    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
                    <p><em>Von <?php the_author(); ?> am <?php echo the_time('l, F jS, Y');?>
                    in <?php the_category( ', '); ?></em></p>

                    <div class="col-md-3 img-responsive">
                    <?php the_post_thumbnail('thumbnail', array('class' => 'img-responsive')); ?>

                    </div>

                    <div class="col-md-9">
                    <?php the_excerpt(); ?>
                    <a href="<?php the_permalink(); ?>" class="center-block"><b>Mehr lesen <!-- <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> --></b></a>
                    </div>
                </article>

                <hr>


            <?php endwhile; else: ?>

            <div class="page-header">
                <h1>Oh no!</h1>
            </div>

            <p>Kein Inhalt vorhanden.</p>

            <?php endif; ?>

        </div>

        <?php get_sidebar( 'blog' ); ?>


    </div>

<?php get_footer() ?>