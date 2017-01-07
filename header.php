<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="u0RM_nudVPJWGu4mCRr5QERSOm0Ztm6VwEWGZB2i0M0" />
    <link rel="shortgut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">


    <title><?php wp_title('|', true, 'right');?></title>

    <?php wp_head(); ?>

</head>

<?php include_once("analyticstracking.php") ?>

<body <?php body_class(); ?>>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/de_DE/sdk.js#xfbml=1&version=v2.8&appId=227248291050546";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


    <!-- Navigation -->


                <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                  <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                      </button>
                      <a class="navbar-brand" href="<?php echo home_url(); ?>">
                                <?php bloginfo('name'); ?>
                            </a>
                    </div>

                        <?php
                            wp_nav_menu( array(
                                'menu'              => 'header-menu',
                                // 'theme_location'    => 'primary',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'bs-example-navbar-collapse-1',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                                'walker'            =>  new wp_bootstrap_navwalker())
                            );
                        ?>
                    </div>
                </nav>

                

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
