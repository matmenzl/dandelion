<?php
/**
 * Template Name: Contact Page
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
 
    if(trim($_POST['email']) === '')  {
        $emailError = true;
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
        $emailError = true;
        $hasError = true;
    } else {
        $email = trim($_POST['email']);
    }

    if(trim($_POST['phone']) === '')  {
        $phoneError = true;
        $hasError = true;
    } else if (!preg_match("/^[[:alnum:]][a-z0-9_.-]*@[a-z0-9.-]+\.[a-z]{2,4}$/i", trim($_POST['email']))) {
        $phoneError = true;
        $hasError = true;
    } else {
        $phone = trim($_POST['phone']);
    }
 
    if(trim($_POST['comments']) === '') {
        $commentError = true;
        $hasError = true;
    } else {
        if(function_exists('stripslashes')) {
            $comments = stripslashes(trim($_POST['comments']));
        } else {
            $comments = trim($_POST['comments']);
        }
    }
 
 
    if(!isset($hasError)) {
        $emailTo = get_option('admin_email');
        if (!isset($emailTo) || ($emailTo == '') ){
            $emailTo = get_option('admin_email');
        }
        $subject = __('From ','dandelion').$name;
        $body = __('Name: ','dandelion').$name."\n".__('Email: ','dandelion').$email."\n".__('Phone: ','dandelion').$phone."\n".__('Comments: ','dandelion').$comments;
        $headers = __('From: ','dandelion') .$name. ' <'.$emailTo.'>' . "\r\n" . __('Reply-To:','dandelion') .$name. '<'.$email.'>';
 
        wp_mail($emailTo, $subject, $body, $headers);
        $emailSent = true;
    }
 
}
 
get_header(); ?>
 
<?php
 ?>

 <!-- Map Section -->
 <div class="container">
   <div class="row">
     <div class="col-md-9 col-lg-9">
       <h1>Adresse</h1>
       <p class="text">Rautistrasse 75, 8047 Zürich<br>
         Email: <a href="mailto:info@schule-dandelion.ch">info@schule-dandelion.ch</a><br>
         Telefonnummer: 079 206 55 43</p>
        <p class="text">Bankverbindung:</br>
        Zürcher Kantonalbank</br>
        IBAN: CH06 0070 0110 0064 5129 4</p>
       <p class="text">Die Schule DANDELION ist gut mit Bus (67/78/80/89/83) und Tram (2/3) zu erreichen.<a href="https://maps.google.com?saddr=Current+Location&daddr=77+Rautistrasse+Zurich+8048" target="_blank" class="center-block">Ihr Reiseweg zur Schule DANDELION auf Google Maps</a></p>
     </div>
   </div>
   </div>
   <!-- </div>
 <div id="map">

 </div>
 <div class="container"> -->

 
<div class="container">
	<div class="row">
 
	<div id="primary" class="col-md-9 col-lg-9 text">
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
						                    <label class="control-label" for="contactName"><?php _e('Name', 'dandelion'); ?></label>
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
						               
                           <div class="form-group <?php if(isset($phoneError)) { echo "has-error has-feedback"; }?>">
                                <label class="control-label" for="phone"><?php _e('Phone', 'dandelion'); ?></label>
                            
                                <input class="form-control" type="text" name="phone" id="phone" value="" />
                                <?php if(isset($phoneError)) { ?>
                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                <?php } ?>
						               </div>
						                <div class="form-group <?php if(isset($commentError)) { echo "has-error has-feedback"; }?>">
						                    <label class="control-label" for="commentsText"><?php _e('Frage', 'dandelion'); ?></label>
						               
						                    <textarea class="form-control" name="comments" id="commentsText" rows="10" cols="20"></textarea>
						                     <?php if(isset($commentError)) { ?>
						                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
						                    <?php } ?>
						                
						               </div>
						               <div class="form-actions">
						                    <button type="submit" class="btn btn-primary"><?php _e('Email senden', 'dandelion'); ?></button>
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