<?php get_header() ?>

 <div class="container">
    <div class="row">

        <div class="col-md-12">

            <div class="page-header">
                <h1 class="categorytitle"><?php single_cat_title(''); ?></h1>
                
            </div>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <article class="post col-md-12">                    
                    <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>

                    <?php if(is_category( 'veranstaltungen' )) : ?>

                        <p><em>Von <?php the_author(); ?> am <?php echo the_time('j. F Y');?>
                        in <?php the_category( ', '); ?> <a href="<?php comments_link(); ?>"><?php comments_number(); ?></a></em></p>

                    <?php  else: ?>

                    <?php endif; ?>



                    <div class="col-md-6 img-responsive">
                    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>

                    </div>

                    <div class="col-md-6">
                    <?php the_excerpt(); ?>

                    <?php if(is_category('veranstaltungen')) : ?>

                    <a href="<?php the_permalink(); ?>" class="center-block"><b>Mehr lesen <!-- <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> --></b></a>

                    <?php else: ?>

                        <a href="<?php the_permalink(); ?>" class="center-block"><b>Weiter <!-- <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span> --></b></a>


                    </div>
                    <?php endif; ?>

                </article>
                <hr style="  border: 0;
                  clear:both;
                  display:block;
                  width: 96%;               
                  background-color:#eee;
                  height: 1px;">


                <?php comments_template(); ?>



            <?php endwhile; else: ?>

            <div class="page-header">
                <h1>Oh no!</h1>
            </div>

            <p>Kein Inhalt vorhanden.</p>

            <?php endif; ?>

        </div>

<!--         <?php get_sidebar( 'blog' ); ?>
 -->

    </div>

<?php get_footer() ?>