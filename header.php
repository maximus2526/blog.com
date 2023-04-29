<?php include_once __DIR__.'/includes/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog title</title>
    <link rel="stylesheet" href="<?php get_file_path() ?>css/style.css">    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

</head>

<body>
<div class="header">

    <div class="header-logo">
        <a href="/"><img class="header-logo-img"  src="img/logo.png" alt="MINIMO"></a>
    </div>
    <div class="header-nav">
        <a class="header-nav-elem" href="?post_category=lifestyle">lifestyle</a>
        <a class="header-nav-elem" href="?post_category=photodiary">photodiary</a> 
        <a class="header-nav-elem" href="?post_category=music">music</a>
        <a class="header-nav-elem" href="?post_category=travel">travel</a>
    </div>
</div>