<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title() ;?></title>
    <link rel="stylesheet"  href="<?= dw_asset('css/main.css');?>">
    <link rel="stylesheet" href="<?= dw_asset('dist/css/glide.core.css');?>">
    <link rel="stylesheet" href="<?= dw_asset('dist/css/glide.theme.css');?>">
</head>
<body>
<?php if( get_page_template_slug( $post->ID ) != 'template-perso.php' 
       && get_page_template_slug( $post->ID ) != 'template-home.php' 
       && get_page_template_slug( $post->ID ) != 'template-program.php' 
       && get_page_template_slug( $post->ID ) != 'template-about.php' 
       && get_page_template_slug( $post->ID ) != 'template-contact.php' 
       && get_page_template_slug( $post->ID ) != 'template-practical.php' 
       && get_page_template_slug( $post->ID ) != 'template-all.php' ):?>
<?php endif ?>
    <header class="header">
        <button class="hamburger" >
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>
        <h1 class="u-hidden-visually">Saint-Léon'Art</h1>
        <?php get_template_part('part', 'navbar');?>
    </header>
    <article class="wrapper u-12/12">
        