<?php
/*
    Template Name: Hero Image Template
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
    <div class="row">

        <div class="col-md-12">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="page-header">
                    <h1><?php the_title(); ?></h1>
                </div>

                <?php the_content(); ?>

            <?php endwhile; else: ?>

            <div class="page-header">
                <h1>Oh no!</h1>
            </div>

            <p>Kein Inhalt vorhanden.</p>

            <?php endif; ?>

        
<?php get_footer() ?>