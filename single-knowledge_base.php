<?php get_header() ?>

 <div class="container">
    <div class="row">

        <div class="col-md-9">

         <div class="page-header">
                            <h1 class="fancy_title categorytitle" aria-label="Fragen und Antworten"><span class="char1" aria-hidden="true">F</span><span class="char2" aria-hidden="true">r</span><span class="char3" aria-hidden="true">a</span><span class="char4" aria-hidden="true">g</span><span class="char5" aria-hidden="true">e</span><span class="char6" aria-hidden="true">n</span><span class="char7" aria-hidden="true"> </span><span class="char8" aria-hidden="true">u</span><span class="char9" aria-hidden="true">n</span><span class="char10" aria-hidden="true">d</span><span class="char11" aria-hidden="true"> </span><span class="char12" aria-hidden="true">A</span><span class="char13" aria-hidden="true">n</span><span class="char14" aria-hidden="true">t</span><span class="char15" aria-hidden="true">w</span><span class="char16" aria-hidden="true">o</span><span class="char17" aria-hidden="true">r</span><span class="char18" aria-hidden="true">t</span><span class="char19" aria-hidden="true">e</span><span class="char20" aria-hidden="true">n</span></h1>
                            </div><!--



            <div class="wpknb">     <form role="search" method="get" id="wpknbsearchform" action="http://localhost:8888/dandelion/" >
                        <div class="wpknb-search">
                            <input type="text" value="" name="s" id="s" placeholder="Suchen..." /><span><input type="submit" id="searchsubmit" value="Suchen" /></span>
                            <input type="hidden" name="post_type" value="knowledge_base" />
                        </div>
                    </form> -->
                <div class="breadcrumb">
                <?php if (function_exists('nav_breadcrumb')) nav_breadcrumb(); ?>
                </div>

                <?php if (have_posts()) : while (have_posts()) : the_post();
                ?>

                    <ul class="faq">
                          <li>
                            <i class="knb-icon knb-format-"><b><?php the_title(); ?></b></i>
                        </li>
                    </ul>
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

    <?php get_sidebar( 'faq' ); ?>


    </div>

<?php get_footer() ?>