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




