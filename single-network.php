<?php get_header() ?>

 <div class="container">
    <div class="row">

        <div class="col-md-9">


                <?php if (have_posts()) : while (have_posts()) : the_post();
                ?>
                <div class="breadcrumb">
                <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?>
                </div>

                <div class="page-header">
                    <h1><?php the_title(); ?></h1>
                </div>
                <p><em>Von <?php the_author(); ?> am <?php echo the_time('j. F Y');?>
                in <?php the_category( ', '); ?>
                    <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a>
                </em></p>


                <div class="img-responsive">
                <?php the_post_thumbnail('full', array('class' => 'img-responsive') ); ?>
                </div>
                <p>
                <?php the_content(); ?>
                </p>

                <div class="fb-like" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>

                <hr>

                <?php comments_template(); ?>


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