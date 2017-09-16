<?php get_header() ?>



    <!-- Main jumbotron for a primary marketing message or call to action -->

    
    <div class="jumbotron1 wrapper">
        <div class="container">
            
            <?php $the_query = new WP_Query( 'page_id=29' ); ?>

            <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

            <?php the_excerpt(); ?>

            <?php endwhile; ?>

            <!--arrow -->
            <!--<a href="#intro" class="btn btn-circle scroll">
                <i class="animated bounce fa fa-angle-double-down fa-4"></i>
            </a> -->

        </div><!--container jumbotron1-->

        <!--badges-->
        <?php

            the_post();

            // Get 'badge' posts
            $badge_posts = get_posts( array(
                'post_type' => 'badge',
            ) );

        if ( $badge_posts ):

        ?>

        <!-- badge links -->
        <?php
            foreach ( $badge_posts as $post ): 
            setup_postdata($post);
        ?>

        <?php if ( get_field('badge_left') ): ?>

            <a href="<?php the_field('badge_left_link'); ?>" target="_blank"><button type="button" class="roundleft animated fadeInLeftBig"><?php the_field('badge_left'); ?></button></a>


           <!--  <div class="info animated fadeInLeftBig"><a href="<?php the_field('badge_left_link'); ?>" target="_blank"><?php the_field('badge_left'); ?></a></div>
 -->

        <?php endif; ?>



        <!-- badge rechts -->
        <?php if ( get_field('badge_right') ): ?>

        <a href="<?php the_field('badge_right_link'); ?>" target="_blank"><button type="button" class="round animated fadeInRightBig"><?php the_field('badge_right'); ?></button></a>

        <!-- <div class="inforight animated fadeInRightBig"><a href="<?php the_field('badge_right_link'); ?>" target="_blank"><?php the_field('badge_right'); ?></a>
        </div> -->

        <?php endif; ?>


        <?php endforeach; ?>
        <?php endif; ?>

        <!--badges ENDE-->


    </div><!--jumbotron1-->
        
        <div id="intro" data-speed="4" data-type="background">

         <div class="jumbotron jumbotrontext">
           <div class="container">

           <?php $the_query = new WP_Query( 'page_id=2' ); ?>

           <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

           <?php the_content(); ?>

           <?php endwhile; ?>
             

           </div>
        </div>
    </header>





<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
<!--         <div class="col-lg-12">
            <h1 class="page-header">
                Schule DANDELION                
                </h1>
        </div> -->
<!--         <div class="ow-eq-height">
 -->
        <div class="col-md-4 equalize">
        <div class="sameheight">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo get_page_link(211); ?>"><h4><!-- <i class="fa fa-child"></i> --><b><?php echo get_the_title( 211 ); ?></b></h4></a>
                </div>
                <div class="panel-body">
                    <?php $the_query = new WP_Query( 'page_id=211' ); ?>

                    <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                           <?php the_excerpt(); ?>


                         <?php endwhile;?>
                    <a href="<?php echo get_page_link(211); ?>" title="Read the whole post" class="center-block">Mehr</a>
                </div>
            </div>

        </div>
        </div>

        <div class="col-md-4 equalize">
        <div class="sameheight">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo get_page_link(45); ?>"><h4><!-- <i class="fa fa-clock-o"></i> --><?php echo get_the_title( 45 ); ?></h4></a>
                </div>
                <div class="panel-body">
                <?php $the_query = new WP_Query( 'page_id=45' ); ?>

              <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                     <?php the_excerpt(); ?>


                   <?php endwhile;?>
                    <a href="<?php echo get_page_link(45); ?>" title="Read the whole post" class="center-block">Mehr</a>
                </div>
            </div>

        </div>
        </div>

        <div class="col-md-4 equlize">
        <div class="sameheight">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo get_page_link(43); ?>"><h4><!-- <i class="fa fa-graduation-cap"> --></i> <?php echo get_the_title( 43 ); ?></h4></a>
                </div>
                <div class="panel-body">
                    <?php $the_query = new WP_Query( 'page_id=43' ); ?>

                    <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                           <?php the_excerpt(); ?>


                         <?php endwhile;?>
                    <a href="<?php echo get_page_link(43); ?>" title="Read the whole post" class="center-block">Mehr</a>
                </div>
            </div>
        </div>
        </div>

        <div class="col-md-4 equalize">
        <div class="sameheight">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo get_page_link(1197); ?>"><h4><!-- <i class="fa fa-graduation-cap"> --></i> <?php echo get_the_title( 1197 ); ?></h4></a>
                </div>
                <div class="panel-body">
                    <?php $the_query = new WP_Query( 'page_id=1197' ); ?>

                    <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                           <?php the_excerpt(); ?>


                         <?php endwhile;?>
                    <a href="<?php echo get_page_link(1197); ?>" title="Read the whole post" class="center-block">Mehr</a>
                </div>
            </div>
        </div>
        </div>

        <div class="col-md-4 equalize">
        <div class="sameheight">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo get_page_link(1199); ?>"><h4><!-- <i class="fa fa-graduation-cap"> --></i> <?php echo get_the_title( 1199 ); ?></h4></a>
                </div>
                <div class="panel-body">
                    <?php $the_query = new WP_Query( 'page_id=1199' ); ?>

                    <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                           <?php the_excerpt(); ?>


                         <?php endwhile;?>
                    <a href="<?php echo get_page_link(1199); ?>" title="Read the whole post" class="center-block">Mehr</a>
                </div>
            </div>

        </div>
        </div>

        <div class="col-md-4 equalize">
        <div class="sameheight">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="<?php echo get_page_link(1201); ?>"><h4><!-- <i class="fa fa-graduation-cap"> --></i> <?php echo get_the_title( 1201 ); ?></h4></a>
                </div>
                <div class="panel-body">
                    <?php $the_query = new WP_Query( 'page_id=1201' ); ?>

                    <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                           <?php the_excerpt(); ?>


                         <?php endwhile;?>
                    <a href="<?php echo get_page_link(1201); ?>" title="Read the whole post" class="center-block">Mehr</a>
                </div>
            </div>
        </div>
        </div>

        </div>
    </div><!-- /.row -->

</div><!-- /.container -->


<!-- Carousel -->
      <?php 

        $args = array(
          'post_type'     => 'post',
          'category_name' => 'Slider',
          'order' => 'ASC'
          );

          $the_query = new WP_Query( $args );

      ?>

       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
         <!-- Indicators -->
         <ol class="carousel-indicators">
            <?php if ( have_posts() ) : while ($the_query->have_posts() ) : $the_query-> the_post(); ?>

           <li data-target="#carousel-example-generic" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if ( $the_query->current_post == 0):?>active<?php endif; ?>"></li>

           <?php endwhile; endif; ?>
         </ol>

         <?php rewind_posts(); ?>

         <!-- Wrapper for slides -->
         <div class="carousel-inner" role="listbox">

         <?php if ( have_posts() ) : while ($the_query->have_posts() ) : $the_query-> the_post(); ?>

           <div class="item <?php if ( $the_query->current_post == 0):?>active<?php endif; ?>">
            <?php 
              $thumbnail_id = get_post_thumbnail_id();
              $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail-size', true);
              $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
            ?>
             <!-- <a href="<?php the_permalink();?>"> --><img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"><!-- </a> -->
             <div class="carousel-caption"><?php the_title(); ?>
             </div>
           </div>

           <?php endwhile; endif; ?>

         </div>

         <!-- Controls -->
         <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
           <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
           <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
           <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
           <span class="sr-only">Next</span>
         </a>
       </div> 




<hr>

<div class="container">
<a href="<?php echo get_page_link(71); ?>"><h1>
NEWS UND VERANSTALTUNGEN</h1></a>

<?php 

$num_posts = ( is_front_page() ) ? 4 : -1;

$args = array(
    'post_type' => 'post',
    'posts_per_page' => $num_posts,
  );
  $query = new WP_Query( $args );
?>
  <?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
<article class="post col-md-12">                    
    <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>

    <div class="col-md-5 img-responsive">
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?></a>
    </div>

    <div class="col-md-7 text">
    <p class="text"><?php the_excerpt(); ?></p>
    <a href="<?php the_permalink(); ?>" class="center-block">Mehr lesen</a>
  </div>

  </article>
  <hr>

  <?php endwhile; endif; wp_reset_postdata(); ?>

</div>
<hr>

<!-- Map Section -->
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>STANDORT</h2>
            <p class="text">Die Schule DANDELION befindet sich im Zürcher Freilager und ist gut mit Bus (67/78/80/89/83) und Tram (2/3) zu erreichen.<a href="https://maps.google.com?saddr=Current+Location&daddr=75+Rautistrasse+Zurich+8048" target="_blank" class="center-block">Ihr Reiseweg zur Schule DANDELION auf Google Maps</a></p>
        </div>
    </div>
</div>
<div id="map">

</div>



 

        <hr>

        <!-- Call to Action Section -->
    <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>NEWSLETTER ABONNIEREN</h2>
                    <p>Wir halten dich auf dem Laufenden rund um die Schule DANDELION (Wir versprechen: kein Spam und keine unnötigen E-mails).</p>
                </div>
                <div class="col-md-4">
                    <!-- Begin MailChimp Signup Form -->
                   <!--  <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css"> -->
                    <style type="text/css">
                        #mc_embed_signup{background:; clear:left; font:14px Helvetica,Arial,sans-serif; }
                        /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                           We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                    </style>
                    <div id="mc_embed_signup">
                    <form action="//schule-dandelion.us14.list-manage.com/subscribe/post?u=b077009b2df832ec7205e6206&amp;id=896df0f6bc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                        
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">E-Mail-Adresse eingeben</label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>
                        <div id="mce-responses" class="clear">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b077009b2df832ec7205e6206_896df0f6bc" tabindex="-1" value=""></div>
                        <div class="clear"><input type="submit" value="Newsletter abonnieren" name="subscribe" id="mc-embedded-subscribe" class="btn btn-lg btn-primary btn-block"></div>
                        </div>
                    </form>
                    </div>
                    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text'; /*
                     * Translated default messages for the $ validation plugin.
                     * Locale: DE
                     */
                    $.extend($.validator.messages, {
                        required: "Dieses Feld ist ein Pflichtfeld.",
                        maxlength: $.validator.format("Geben Sie bitte maximal {0} Zeichen ein."),
                        minlength: $.validator.format("Geben Sie bitte mindestens {0} Zeichen ein."),
                        rangelength: $.validator.format("Geben Sie bitte mindestens {0} und maximal {1} Zeichen ein."),
                        email: "Geben Sie bitte eine gültige E-Mail Adresse ein.",
                        url: "Geben Sie bitte eine gültige URL ein.",
                        date: "Bitte geben Sie ein gültiges Datum ein.",
                        number: "Geben Sie bitte eine Nummer ein.",
                        digits: "Geben Sie bitte nur Ziffern ein.",
                        equalTo: "Bitte denselben Wert wiederholen.",
                        range: $.validator.format("Geben Sie bitten einen Wert zwischen {0} und {1}."),
                        max: $.validator.format("Geben Sie bitte einen Wert kleiner oder gleich {0} ein."),
                        min: $.validator.format("Geben Sie bitte einen Wert größer oder gleich {0} ein."),
                        creditcard: "Geben Sie bitte ein gültige Kreditkarten-Nummer ein."
                    });}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                    <!--End mc_embed_signup-->
                </div>
            </div>
        </div>
        <div class="container">


<?php get_footer() ?>