<?php
/**
 * Template Name: Application Page
 *
 * This is the template that displays a contact form.
 *
 */
 
if(isset($_POST['submitted'])) {
    if(trim($_POST['contactName']) === '') {
        $nameError = true;
        $hasError = true;
    } else {
        $name = trim($_POST['contactName']);
    }

    if(trim($_POST['childName']) === '') {
        $childNameError = true;
        $hasError = true;
    } else {
        $childName = trim($_POST['childName']);
    }

    if(trim($_POST['age']) === '') {
        $ageError = true;
        $hasError = true;
    } else {
        $age = trim($_POST['age']);
    }

    if(trim($_POST['offer']) === '') {
        $offerError = true;
        $hasError = true;
    } else {
        $offer = trim($_POST['offer']);
    }


    if(trim($_POST['start']) === '') {
        $startError = true;
        $hasError = true;
    } else {
        $start = trim($_POST['start']);
    }
    

    if(trim($_POST['school']) === '') {
        $schoolError = true;
        $hasError = true;
    } else {
        $school = trim($_POST['school']);
    }
 
    if(trim($_POST['email']) === '')  {
        $emailError = true;
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
        $emailError = true;
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }

 
 
    if(!isset($hasError)) {
        $emailTo = get_option('admin_email');
        if (!isset($emailTo) || ($emailTo == '') ){
            $emailTo = get_option('admin_email');
        }
        $subject = __('From ','dandelion').$name;
        $body = __('Name: ','dandelion').$name."\n".__('Email: ','dandelion').$email."\n".__('ChildName: ','dandelion').$childName."\n".__('Age: ','dandelion').$age."\n".__('Offer: ','dandelion').$offer."\n".__('Start: ','dandelion').$start."\n".__('School: ','dandelion').$school;
        $headers = __('From: ','dandelion') .$name. ' <'.$emailTo.'>' . "\r\n" . __('Reply-To:','dandelion') .$name. '<'.$email.'>';
 
        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }
 
}
 
get_header(); ?>
 
<?php
 ?>
 
<div class="container">
  <div class="row">
 
  <div id="primary" class="col-md-9 col-lg-9">
    <main id="main" class="site-main" role="main">
 
      <?php while ( have_posts() ) : the_post(); ?>
 
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header class="entry-header">
            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
          </header><!-- .entry-header -->
 
          <div class="entry-content">
            <?php the_content(); ?>
 
                  <?php if(isset($emailSent) && $emailSent == true) { ?>
                        <div class="alert alert-success" role="alert">
                            <p><?php _e('Danke, die Kontaktanfrage wurde erfolgreich verschickt.', 'dandelion'); ?></p>
                        </div>
                    <?php } else { ?>
 
                        <?php if(isset($hasError) || isset($captchaError)) { ?>
                            <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <strong><?php _e('Error!', 'dandelion'); ?></strong> <?php _e('Bitte alle Felder ausfüllen.', 'dandelion'); ?>
                  </div>
                        <?php } ?>
 
                    <form action="<?php the_permalink(); ?>" id="contactForm" method="post">
                        <div class="form-group <?php if(isset($nameError)) { echo "has-error has-feedback"; }?>">
                                <label class="control-label" for="contactName"><?php _e('Name Eltern', 'dandelion'); ?></label>
                                <input class="form-control" type="text" name="contactName" id="contactName" value="" />
                                <?php if(isset($nameError)) { ?>
                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                <?php } ?>
                          
                            </div>
                            <div class="form-group <?php if(isset($emailError)) { echo "has-error has-feedback"; }?>">
                                 <label class="control-label" for="email"><?php _e('Email', 'dandelion'); ?></label>
                             
                                 <input class="form-control" type="text" name="email" id="email" value="" />
                                 <?php if(isset($emailError)) { ?>
                                     <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                 <?php } ?>
                            </div>
                            <div class="form-group <?php if(isset($childNameError)) { echo "has-error has-feedback"; }?>">
                                    <label class="control-label" for="childName"><?php _e('Name Kind', 'dandelion'); ?></label>
                                    <input class="form-control" type="text" name="childName" id="childName" value="" />
                                    <?php if(isset($childNameError)) { ?>
                                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                    <?php } ?>
                              
                                </div>
                                <div class="form-group <?php if(isset($ageError)) { echo "has-error has-feedback"; }?>">
                                        <label class="control-label" for="age"><?php _e('Alter Kind', 'dandelion'); ?></label>
                                        <input class="form-control" type="text" name="age" id="age" value="" />
                                        <?php if(isset($ageError)) { ?>
                                            <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                        <?php } ?>
                                  
                                    </div>
                                  <div class="form-group <?php if(isset($offerError)) { echo "has-error has-feedback"; }?>">
                                          <label class="control-label" for="offer"><?php _e('Gewünschtes Angebot für das Kind', 'dandelion'); ?></label>
                                          <select class="form-control" type="select" name="offer" id="offer" value="" />>
                                            <option>Primarstufe 1 (1750 CHF)</option>
                                            <option>Primarstufe 2 (1750 CHF)</option>
                                            <option>Primarstufe 1 mit Abendbetreuung (1850 CHF)</option>
                                            <option>Primarstufe 2 mit Abendbetreuung (1850 CHF)</option>
                                          </select>
                                          <?php if(isset($offerError)) { ?>
                                              <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                          <?php } ?>
                                    
                                      </div>
                                  <div class="form-group <?php if(isset($startError)) { echo "has-error has-feedback"; }?>">
                                          <label class="control-label" for="start"><?php _e('Gewünschter Eintritt ab', 'dandelion'); ?></label>
                                          <input class="form-control" type="text" name="start" id="start" value="" />
                                          <?php if(isset($startError)) { ?>
                                              <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                          <?php } ?>
                                    
                                      </div>
                                  <div class="form-group <?php if(isset($schoolError)) { echo "has-error has-feedback"; }?>">
                                          <label class="control-label" for="school"><?php _e('Aktuelle Schule', 'dandelion'); ?></label>
                                          <input class="form-control" type="text" name="school" id="school" value="" />
                                          <?php if(isset($schoolError)) { ?>
                                              <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                          <?php } ?>
                                    
                                      </div>

                           <div class="form-actions">
                                <button type="submit" class="btn btn-primary"><?php _e('Anmeldung senden', 'dandelion'); ?></button>
                                <input type="hidden" name="submitted" id="submitted" value="true" />
                           </div>
                    </form>
 
                <?php } ?>
                            
            <?php
              wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'dandelion' ),
                'after'  => '</div>',
              ) );
            ?>
          </div><!-- .entry-content -->
          <footer class="entry-footer">
            <?php edit_post_link( __( 'Edit', 'dandelion' ), '<span class="edit-link">', '</span>' ); ?>
          </footer><!-- .entry-footer -->
        </article><!-- #post-## -->
        <!-- .comments -->
        <!--
        <?php
          // If comments are open or we have at least one comment, load up the comment template
          if ( comments_open() || '0' != get_comments_number() ) :
            comments_template();
          endif;
        ?> 
        -->
      <?php endwhile; // end of the loop. ?>
 
    </main><!-- #main -->
  </div><!-- #primary -->
 
<?php get_sidebar('contact'); ?>
<?php get_footer(); ?>