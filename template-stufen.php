<?php
/*
    Template Name: Stufen
*/
?>
<?php get_header() ?>

<div class="container">
    <div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h1><?php the_title(); ?></h1>
        </div>
            <?php $the_query = new WP_Query( 'page_id=1088' ); ?>

            <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                   <?php the_content(); ?>


                 <?php endwhile;?>
            
            
        </div>
    </div>
</div>

<!-- Page Content -->
<div class="container">

    <!-- Marketing Icons Section -->
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><!-- <i class="fa fa-child"></i> --><b><?php echo get_the_title( 1197 ); ?></b></h4>
                </div>
                <div class="img-responsive">
                <?php the_post_thumbnail('full', array('class' => 'img-responsive') ); ?>
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

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><!-- <i class="fa fa-clock-o"></i> --><?php echo get_the_title( 1199 ); ?></h4>
                </div>
                <div class="img-responsive">
                <?php the_post_thumbnail('full', array('class' => 'img-responsive') ); ?>
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

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><!-- <i class="fa fa-graduation-cap"> --></i> <?php echo get_the_title( 1201 ); ?></h4>
                </div>
                <div class="img-responsive">
                <?php the_post_thumbnail('full', array('class' => 'img-responsive') ); ?>
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
    </div><!-- /.row -->

</div><!-- /.container -->


<div class="container">


<?php get_footer() ?>