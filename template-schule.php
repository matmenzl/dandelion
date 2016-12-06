<?php
/*
    Template Name: Schule
*/
?>

<?php get_header() ?>

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );
$image = $image[0]; ?>
<?php else :
$image = get_bloginfo( 'stylesheet_directory') . '/images/default_cat_img.jpg'; ?>
<?php endif; ?>
<div class="heroimage img-responsive" style="background-image: url('<?php echo $image; ?>');background-repeat:no-repeat;
background-size:cover;
background-position:center;" >
<h1 class="herotitle"><?php the_title(); ?></h1>

</div>

<div class="container">
<!-- Portfolio Section -->
<div class="row">
<!--     <div class="col-lg-12">
        <h2 class="page-header">Portfolio Heading</h2>
    </div> -->
    <div class="row is-flex">

    <div class="col-md-4 col-sm-6">
        <a href="<?php echo get_page_link(38); ?>">
            <img class="img-responsive img-portfolio img-hover text" src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/12/leitbild.jpg" alt="">
       </a>
       <h2 class="text"><span>Leitbild</span></h2>
    </div>
    <div class="col-md-4 col-sm-6">
        <a href="<?php echo get_page_link(102); ?>">
            <img class="img-responsive img-portfolio img-hover" src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/12/anmeldeprozess.jpg" alt="">
        </a>
        <h2 class="text"><span>Anmeldeprozess</span></h2>
    </div>
    <div class="col-md-4 col-sm-6">
        <a href="<?php echo get_page_link(36); ?>">
            <img class="img-responsive img-portfolio img-hover" src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/12/angebot.jpg" alt="">
        </a>
        <h2 class="text"><span>Angebot</span></h2>
    </div>
    <div class="col-md-4 col-sm-6">
        <a href="<?php echo get_page_link(133); ?>">
            <img class="img-responsive img-portfolio img-hover" src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/12/stundenplan.jpg" alt="">
        </a>
        <h2 class="text"><span>Stundenplan</span></h2>
    </div>
    <div class="col-md-4 col-sm-6">
        <a href="<?php echo get_page_link(33); ?>">
            <img class="img-responsive img-portfolio img-hover" src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/12/anmeldung.jpg" alt="">
        </a>
        <h2 class="text"><span>Anmeldung</span></h2>
    </div>
    <div class="col-md-4 col-sm-6">
        <a href="<?php echo get_page_link(79); ?>">
            <img class="img-responsive img-portfolio img-hover" src="<?php bloginfo('url'); ?>/wp-content/uploads/2016/12/kontakt.jpg" alt="">
        </a>
        <h2 class="text"><span>Kontakt</span></h2>
    </div>
    </div>
</div>
<!-- /.row -->

<?php get_footer(); ?>