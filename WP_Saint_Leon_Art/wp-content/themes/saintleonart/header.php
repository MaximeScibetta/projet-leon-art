<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Saint-Léon'Art</title>
    <link rel="stylesheet"  href="<?= dw_asset('css/main.css');?>">
</head>
<body>
    <?php get_template_part('part', 'grid');?>
    <header>
        <button class="hamburger" >
            <span class="line"></span>
            <span class="line"></span>
            <span class="line"></span>
        </button>
        <h1 class="u-hidden-visually">Saint-Léon'Art</h1>
        <?php get_template_part('part', 'navbar');?>
        <button class="search-icon">
            <span class="circle"></span>
            <span class="handle"></span>
        </button>
    </header>
    <article class="wrapper">
        