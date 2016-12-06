<?php
/*
    Template Name: Leitbild
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
  <div class="lead">
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <?php the_content(); ?>
  
  <?php endwhile; endif; ?>

  </div>
  <div class="panel-group">
    
    <!-- panel 1-->    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse1"><?php echo get_the_title( 131 ); ?> <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse">
        <div class="panel-body">
            <?php $the_query = new WP_Query( 'page_id=131' ); ?>

            <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

            <?php the_excerpt(); ?>

            <?php endwhile;?>
        </div>
        <div class="panel-footer">Panel Footer</div>
      </div>
      </div>
      
      <!-- panel 2-->    
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse2"><?php echo get_the_title( 133 ); ?> <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">

        <?php $the_query = new WP_Query( 'page_id=133' ); ?>

        <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

        <?php the_content(); ?>

        <?php endwhile;?>


        </div>
        <div class="panel-footer">Panel Footer</div>
      </div>
    </div>

      <!-- panel 3-->    
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse3"><?php echo get_the_title( 135 ); ?> <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
            <?php $the_query = new WP_Query( 'page_id=135' ); ?>

            <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

            <?php the_content(); ?>

            <?php endwhile;?>
        </div>
        <div class="panel-footer">Panel Footer</div>
      </div>
    </div>

      <!-- panel 4-->    
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse4"><?php echo get_the_title( 137 ); ?> <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
            <?php $the_query = new WP_Query( 'page_id=137' ); ?>

            <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

            <?php the_excerpt(); ?>

            <?php endwhile;?>
        </div>
        <div class="panel-footer">Panel Footer</div>
      </div>
    </div>

      <!-- panel 5-->    
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse5"><?php echo get_the_title( 139 ); ?> <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
            
            <?php $the_query = new WP_Query( 'page_id=139' ); ?>

            <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

            <?php the_excerpt(); ?>

            <?php endwhile;?>

        </div>
        <div class="panel-footer">Panel Footer</div>
      </div>
    </div>

      <!-- panel 6-->    
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse6"><?php echo get_the_title( 141 ); ?> <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">
            
            <?php $the_query = new WP_Query( 'page_id=141' ); ?>

            <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

            <?php the_excerpt(); ?>

            <?php endwhile;?>

        </div>
        <div class="panel-footer">Panel Footer</div>
      </div>
    </div>

      <!-- panel 7-->    
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse7"><?php echo get_the_title( 143 ); ?> <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
        </h4>
      </div>
      <div id="collapse7" class="panel-collapse collapse">
        <div class="panel-body">
            
            <?php $the_query = new WP_Query( 'page_id=143' ); ?>

            <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

            <?php the_excerpt(); ?>

            <?php endwhile;?>
        </div>
        <div class="panel-footer">Panel Footer</div>
      </div>
    </div>

      <!-- panel 8-->    
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse8"><?php echo get_the_title( 145 ); ?> <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
        </h4>
      </div>
      <div id="collapse8" class="panel-collapse collapse">
        <div class="panel-body">
            <?php $the_query = new WP_Query( 'page_id=145' ); ?>

            <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

            <?php the_excerpt(); ?>

            <?php endwhile;?>

        </div>
        <div class="panel-footer">Panel Footer</div>
      </div>
    </div>

      <!-- panel 9-->    
      <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" href="#collapse9"><?php echo get_the_title( 148 ); ?> <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span></a>
        </h4>
      </div>
      <div id="collapse9" class="panel-collapse collapse">
        <div class="panel-body">

            <?php $the_query = new WP_Query( 'page_id=148' ); ?>

            <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

            <?php the_content(); ?>

            <?php endwhile;?>
        </div>
        <div class="panel-footer">Panel Footer</div>
      </div>
    </div>









<?php get_footer(); ?>