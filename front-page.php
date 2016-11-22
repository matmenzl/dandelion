<?php get_header() ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->

    <div class="jumbotron1">
      <div class="container">
        
        <?php $the_query = new WP_Query( 'page_id=43' ); ?>

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


     <div class="container">
        <!-- Example row of columns -->
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
        </div>
    </div>

       <hr>

       <!-- Header Carousel -->
       <header id="myCarousel" class="carousel slide">
           <!-- Indicators -->
           <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
           </ol>

           <!-- Wrapper for slides -->
           <div class="carousel-inner">
               <div class="item active">
                   <div class="fill" style="background-image:url('./images/photo-1457978535446-dcd58011ea54.jpeg&text=Slide One');"></div>
                   <div class="carousel-caption">
                       <h2>Caption 1</h2>
                   </div>
               </div>
               <div class="item">
                   <div class="fill" style="background-image:url('./images/index.jpeg&text=Slide Two');"></div>
                   <div class="carousel-caption">
                       <h2>Caption 2</h2>
                   </div>
               </div>
               <div class="item">
                   <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                   <div class="carousel-caption">
                       <h2>Caption 3</h2>
                   </div>
               </div>
           </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Schule DANDELION                
                    </h1>
            </div>

            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                    <?php $page = get_page_by_title( 'Über Schule DANDELION' ); ?>
                        <h4><i class="fa fa-fw fa-check"></i><?php echo get_the_title( $page->ID ); ?></h4>
                    </div>
                    <div class="panel-body">
                        <p><?php $content = apply_filters('the_content', $page->post_content); echo wp_trim_words( $content, 100, ''); ?></p>
                        <a href="<?php echo get_page_link(33); ?>">Map</a>
                        <a href="<?php echo get_page_link(33); ?>" title="Read the whole post" class="btn btn-default">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                <?php $page = get_page_by_title( 'Konzept Schule DANDELION' ); ?>
                                    <h4><i class="fa fa-fw fa-check"></i><?php echo get_the_title( $page->ID ); ?></h4>
                                </div>
                                <div class="panel-body">
                                    <p><?php $content = apply_filters('the_content', $page->post_content); echo wp_trim_words( $content, 100, ''); ?></p>
                                    <a href="<?php echo get_permalink( $page->ID ); ?>" title="Read the whole post" class="btn btn-default">Read More</a>
                                </div>
                            </div>
                        </div>
            <div class="col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                <?php $page = get_page_by_title( 'Kosten Schule DANDELION' ); ?>
                                    <h4><i class="fa fa-fw fa-check"></i><?php echo get_the_title( $page->ID ); ?></h4>
                                </div>
                                <div class="panel-body">
                                    <p><?php $content = apply_filters('the_content', $page->post_content); echo wp_trim_words( $content, 100, ''); ?></p>
                                    <a href="<?php echo get_permalink( $page->ID ); ?>" title="Read the whole post" class="btn btn-default">Read More</a>
                                </div>
                            </div>
                        </div>
        </div><!-- /.row -->

        <!-- Portfolio Section -->
        <div class="row">
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
        </div>
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
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
        </div>
        <!-- /.row -->

        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a class="btn btn-lg btn-default btn-block" href="#">Call to Action</a>
                </div>
            </div>
        </div>

<?php get_footer() ?>