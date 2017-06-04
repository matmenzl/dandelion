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
        
            <p>Die Schule DANDELION spielt, lernt und arbeitet stufendurchmischt. Die Kinder arbeiten und spielen je nach Thema, Stimmung und Interesse mit älteren, jüngeren oder gleichaltrigen Kindern zusammen.
            </p>
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
                    <h4><!-- <i class="fa fa-child"></i> --><b><?php echo get_the_title( 405 ); ?></b></h4>
                </div>
                <div class="img-responsive">
                <?php the_post_thumbnail('full', array('class' => 'img-responsive') ); ?>
                </div>
                <div class="panel-body">
                    <?php $the_query = new WP_Query( 'page_id=405' ); ?>

                    <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                           <?php the_content(); ?>


                         <?php endwhile;?>
                  
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><!-- <i class="fa fa-clock-o"></i> --><?php echo get_the_title( 407 ); ?></h4>
                </div>
                <div class="img-responsive">
                <?php the_post_thumbnail('full', array('class' => 'img-responsive') ); ?>
                </div>
                <div class="panel-body">
                <?php $the_query = new WP_Query( 'page_id=407' ); ?>

              <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                     <?php the_content(); ?>


                   <?php endwhile;?>
                    
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4><!-- <i class="fa fa-graduation-cap"> --></i> <?php echo get_the_title( 409 ); ?></h4>
                </div>
                <div class="img-responsive">
                <?php the_post_thumbnail('full', array('class' => 'img-responsive') ); ?>
                </div>
                <div class="panel-body">
                    <?php $the_query = new WP_Query( 'page_id=409' ); ?>

                    <?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

                                           <?php the_content(); ?>


                         <?php endwhile;?>
                    
                </div>
            </div>
        </div>

        </div>
    </div><!-- /.row -->

</div><!-- /.container -->


<div class="container">


<?php get_footer() ?>