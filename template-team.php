<?php
/*
    Template Name: Team
*/

?>
<?php get_header() ?>

<?php

    the_post();

    // Get 'team' posts
    $team_posts = get_posts( array(
        'post_type' => 'team',
        'posts_per_page' => -1, // Unlimited posts
        'orderby' => 'title', // Order alphabetically by name
        'order' => 'ASC',
    ) );

    if ( $team_posts ):

?>

<div class="container text teampage">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Team Schule DANDELION</h2>
        </div>
    </div>
    </div>
</div style="padding-bottom:20px;">


<div class="container">
<div class="row">


<?php
    foreach ( $team_posts as $post ): 
    setup_postdata($post);
    
    // Resize and CDNize thumbnails using Automattic Photon service
    $thumb_src = null;
    if ( has_post_thumbnail($post->ID) ) {
        $src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'team-thumb' );
        $thumb_src = $src[0];
    }
?>

        <div class="col-sm-4 col-md-4 equalize">
            <div class="team-member">
                <?php if ( $thumb_src ): ?>
                            <img src="<?php echo $thumb_src; ?>" alt="<?php the_title(); ?>, <?php the_field('team_position'); ?>" class="img-responsive img-circle imgteam">
                            <?php endif; ?>
                <h4><?php the_title(); ?></h4>
                <h5><?php the_field('position'); ?></h5>
                <p class="text-muted"><?php the_field('description'); ?></p>
                <ul class="list-inline social-buttons">
                <?php if ( get_field('email') ): ?>
                    <li><i class="fa fa-envelope"></i><a href="mailto:<?php the_field('email'); ?>"> Email</a></li>
                <?php endif; ?>
                <?php if ( get_field('telephone') ): ?>
                        <li><i class="fa fa-phone"> </i><a href="tel:<?php the_field('telephone'); ?>"> Telefon</a>
                        </li>
                <?php endif; ?>
                    </ul>
                </div style="padding-bottom:20px;">
                </div><!-- col-sm-4 col-md-4 -->

                <?php endforeach; ?>

            </div><!-- row -->

        <?php endif; ?>


    <div class="row">

    <div class="col-sm-4 col-md-4 equalize">
        <div class="team-member">
            <img src="https://www.schule-dandelion.ch/wp-content/uploads/2017/03/Bildschirmfoto-2017-03-09-um-16.28.57.png" alt="Shamila" class="img-responsive img-circle imgteam">
            <h4>Schulhund Shamila</h4>
            <h5>Oft vor Ort</h5>
            <p class="text-muted">Braucht täglich ihr Spiel mit Bällen und eine exklusive weiche Unterlage</p>
            <!-- <ul class="list-inline social-buttons">
                <li><i class="fa fa-envelope"></i><a href="mailto:<?php the_field('email'); ?>"> Email</a></li>
                <li><i class="fa fa-phone"> </i><a href="tel:<?php the_field('telephone'); ?>"> Telefon</a>
                    </li>
                </ul> -->
        </div>
      </div><!-- col-sm-4 col-md-4 -->
      <div class="col-sm-4 col-md-4 equalize">
          <div class="team-member">
              <img src="https://www.schule-dandelion.ch/wp-content/uploads/2017/03/Bildschirmfoto-2017-03-09-um-16.31.43.png" alt="Kisha" class="img-responsive img-circle imgteam">
              <h4>Schulhund Kisha</h4>
              <h5>Oft vor Ort</h5>
              <p class="text-muted">Ruhig, kuschelfreudig und immer auf der Suche nach Futter</p>
              <!-- <ul class="list-inline social-buttons">
                  <li><i class="fa fa-envelope"></i><a href="mailto:<?php the_field('email'); ?>"> Email</a></li>
                  <li><i class="fa fa-phone"> </i><a href="tel:<?php the_field('telephone'); ?>"> Telefon</a>
                      </li>
                  </ul> -->
          </div>
        </div><!-- col-sm-4 col-md-4 -->
        <div class="col-sm-4 col-md-4 equalize">
            <div class="team-member">
                <img src="https://www.schule-dandelion.ch/wp-content/uploads/2017/03/Bildschirmfoto-2017-03-09-um-16.39.36.png" alt="Mia" class="img-responsive img-circle imgteam">
                <h4>Schulhund Mia</h4>
                <h5>Oft vor Ort</h5>
                <p class="text-muted">Ungestüm, voller Liebe und gerne in Bewegung</p>
                <!-- <ul class="list-inline social-buttons">
                    <li><i class="fa fa-envelope"></i><a href="mailto:<?php the_field('email'); ?>"> Email</a></li>
                    <li><i class="fa fa-phone"> </i><a href="tel:<?php the_field('telephone'); ?>"> Telefon</a>
                        </li>
                    </ul> -->
            </div>
          </div><!-- col-sm-4 col-md-4 -->

    </div>


     <div class="jumbotron jumbotrontext">
       <div class="container">
        <div class="text section-subheading text-muted">Da wir wissen, dass es ein ganzes Dorf braucht, um ein Kind bei seinem Weg zu begleiten, laden wir regelmässig Experten zu uns in die Schule ein. Du besuchst unseren Schulalltag während 1- 4 Tagen und begeisterst die Kinder für dein Thema. Das kann alles Mögliche sein: Ameisen, Bastelideen, Sprachen, Yoga, Wasserpflanzen...
        Wir freuen uns über deine Kontaktaufnahme.</div>
        <a href="http://www.schule-dandelion.ch/kontakt/"><button class="teambutton">Kontakt</button></a>
       </div>
    </div>

<?php get_footer() ?>