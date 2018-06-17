<?php
 /**
  * Summary
  * Description.
  *
  * Template のヘッダー部分。
  *
  * @package WordPress
  * @since 0.0.1
  */
 ?>
<!doctype html>
 <html lang="ja">
   <head>
     <meta charset="<?php bloginfo ('charset') ; ?>" />
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <title><?php bloginfo('name'); ?></title>
     <?php wp_head(); ?>
   </head>
   <body <?php body_class(); ?>>
