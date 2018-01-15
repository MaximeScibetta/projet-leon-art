<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title() ;?></title>
    <link rel="shortcut icon" type="image/png" href="http://maxime-scibetta.be/saintleonart/wp-content/themes/saintleonart/favicon.png"/>
    <link rel="stylesheet"  href="<?= dw_asset('css/main.css');?>">
    <link rel="stylesheet" href="<?= dw_asset('dist/css/glide.core.min.css');?>">
    <link rel="stylesheet" href="<?= dw_asset('dist/css/glide.theme.min.css');?>">
</head>
<body>
    <header class="header">
        <button class="hamburger" >
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>
        <h1 class="u-hidden-visually"><?php wp_title(); ?> - Saint-Léon'Art</h1>
        <?php get_template_part('part', 'navbar');?>
    </header>
    <article class="wrapper u-12/12">
    <h2 class="u-hidden-visually">Article de la page <?php wp_title() ;?></h2>
        