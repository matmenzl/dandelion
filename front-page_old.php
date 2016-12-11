<?php get_header() ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->

    <div class="jumbotron1">
      <div class="container">
        
        <?php $the_query = new WP_Query( 'page_id=29' ); ?>

        <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

        <?php the_excerpt(); ?>

        <?php endwhile;?>

        <a href="#intro" class="btn btn-circle scroll">
            <i class="animated bounce fa fa-angle-double-down fa-4"></i>
        </a>

      </div>
    </div>
    
    <div id="intro" data-speed="4" data-type="background">

     <div class="jumbotron">
       <div class="container">
         
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <?php the_content(); ?>
        
        <?php endwhile; endif; ?>

        </div>
       </div>
    </div>
</header>



<!-- widgets -->
    <div class="widgets">
     <div class="container">
        <div class="row">
            <div class="col-md-4">
                <?php if ( dynamic_sidebar( 'front-left' ) ); ?>
            </div>
            <div class="col-md-4">
                <?php if ( dynamic_sidebar( 'front-center' ) ); ?>
            </div>
            <div class="col-md-4">
                <?php if ( dynamic_sidebar( 'front-right' ) ); ?>
            </div>
            <div class="col-md-4">
                <?php if ( dynamic_sidebar( 'bottom-front-left' ) ); ?>
            </div>
            <div class="col-md-4">
                <?php if ( dynamic_sidebar( 'bottom-front-center' ) ); ?>
            </div>
            <div class="col-md-4">
                <?php if ( dynamic_sidebar( 'bottom-front-right' ) ); ?>
            </div>
        </div>
    </div>
</div>


<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row row-eq-height">
      <!--   <div class="col-lg-12">
            <h1 class="page-header">
                Schule DANDELION                
                </h1>
        </div> -->
        <div class="ow-eq-height">

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-child"></i> <?php echo get_the_title( 39 ); ?></h4>
                </div>
                <div class="panel-body">
                    <?php $the_query = new WP_Query( 'page_id=39' ); ?>

                    <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                           <?php the_excerpt(); ?>


                         <?php endwhile;?>
                    <a href="<?php echo get_page_link(58); ?>" title="Read the whole post" class="btn btn-primary center-block">Mehr Informationen</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-clock-o"></i> <?php echo get_the_title( 45 ); ?></h4>
                </div>
                <div class="panel-body">
              <p><?php $the_query = new WP_Query( 'page_id=45' ); ?>

              <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                     <?php the_excerpt(); ?>


                   <?php endwhile;?></p>
                    <a href="<?php echo get_page_link(58); ?>" title="Read the whole post" class="btn btn-primary center-block">Mehr Informationen</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-globe"></i> <?php echo get_the_title( 43 ); ?></h4>
                </div>
                <div class="panel-body">
                    <?php $the_query = new WP_Query( 'page_id=43' ); ?>

                    <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                           <?php the_excerpt(); ?>


                         <?php endwhile;?>
                    <a href="<?php echo get_page_link(58); ?>" title="Read the whole post" class="btn btn-primary center-block">Mehr Informationen</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><i class="fa fa-dot-circle-o"></i> <?php echo get_the_title( 41 ); ?></h4>
                </div>
                <div class="panel-body">
                    <?php $the_query = new WP_Query( 'page_id=41' ); ?>

                    <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                           <?php the_excerpt(); ?>


                         <?php endwhile;?>
                    <a href="<?php echo get_page_link(58); ?>" title="Read the whole post" class="btn btn-primary center-block">Mehr Informationen</a>
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
           'category_name' => 'Slider'
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
 <!--          <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a> -->
        </div> 



 
        <!-- Portfolio Section -->
        <!-- <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Portfolio Heading</h2>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <img class="img-responsive img-portfolio img-hover" src="http://placehold.it/700x450" alt="">
                </a>
            </div>
        </div> -->
        <!-- /.row -->

        <!-- Features Section -->
        <!-- <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Modern Business Features</h2>
            </div>
            <div class="col-md-6">
                <p>The Modern Business template by Start Bootstrap includes:</p>
                <ul>
                    <li><strong>Bootstrap v3.3.7</strong>
                    </li>
                    <li>jQuery v1.11.1</li>
                    <li>Font Awesome v4.2.0</li>
                    <li>Working PHP contact form with validation</li>
                    <li>Unstyled page elements for easy customization</li>
                    <li>17 HTML pages</li>
                </ul>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="http://placehold.it/700x450" alt="">
            </div>
        </div> -->
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
    <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2>Newsletter abonnieren</h2>
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