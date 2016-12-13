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

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="fancy_title"><i class="fa fa-child"></i> <?php echo get_the_title( 39 ); ?></h4>
                </div>
                <div class="panel-body">
                    <?php $the_query = new WP_Query( 'page_id=39' ); ?>

                    <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                           <?php the_content(); ?>


                         <?php endwhile;?>
                    <a href="<?php echo get_page_link(89); ?>" title="Read the whole post" class="btn btn-primary center-block">Persönliches Gespräch vereinbaren</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="fancy_title"><i class="fa fa-clock-o"></i> <?php echo get_the_title( 45 ); ?></h4>
                </div>
                <div class="panel-body">
              <p><?php $the_query = new WP_Query( 'page_id=45' ); ?>

              <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                     <?php the_excerpt(); ?>


                   <?php endwhile;?></p>
                    <a href="<?php echo get_page_link(89); ?>" title="Read the whole post" class="btn btn-primary center-block">Anmelden zum Schnuppern</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="fancy_title"><i class="fa fa-graduation-cap"></i> <?php echo get_the_title( 43 ); ?></h4>
                </div>
                <div class="panel-body">
                    <?php $the_query = new WP_Query( 'page_id=43' ); ?>

                    <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                           <?php the_excerpt(); ?>


                         <?php endwhile;?>
                    <a href="<?php echo get_page_link(79); ?>" title="Read the whole post" class="btn btn-primary center-block">Zur Kostenübersicht</a>
                </div>
            </div>
        </div>

        </div>
    </div><!-- /.row -->

</div><!-- /.container -->


<div class="container">
<h3>
Aktuelle Veranstaltungen
</h3>

<?php 

$num_posts = ( is_front_page() ) ? 4 : -1;

$args = array(
    'post_type' => 'post',
    'posts_per_page' => $num_posts
  );
  $query = new WP_Query( $args );
?>
  <?php if ( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
  <div class="col-md-4">

  <div class="thumbnail">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('large'); ?></a>
    <h4><?php the_excerpt(); ?></h4>
    <a href="<?php the_permalink(); ?>"><button class="btn btn-default">Mehr Lesen</button></a>
  </div>
  </div>

  <?php endwhile; endif; wp_reset_postdata(); ?>

</div>
<hr>

<!-- Map Section -->
<div class="container">
<div class="row">
<h2>Die Schule DANDELION befindet sich zur Zeit in Gründung in Zürich Albisrieden/Altstetten.</h2>
</div>
</div>
<div id="map">

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyALR-fKOehBUz5vQTl33w6pAYzSAzT6cjU&sensor=false"></script>
</div>
</div>
</div>


 

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