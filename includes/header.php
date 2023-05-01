<?php include_once 'helper.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog title</title>
    <link rel="stylesheet" href="<?php echo get_url() ?>css/style.css">  
    <link rel="stylesheet" href="<?php echo get_url() ?>admin/css/admin.css">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">

</head>

<body>
<div class="container">
    <div class="header">
        <div class="header-logo">
            <a href="/"><img class="header-logo-img"  src="<?php echo get_url() ?>img/logo.png" alt="MINIMO"></a>
        </div>
        <div class="header-nav">
            <a class="header-nav-elem" href="<?php echo get_url()?>?post_category=lifestyle">lifestyle</a>
            <a class="header-nav-elem" href="<?php echo get_url()?>?post_category=photodiary">photodiary</a> 
            <a class="header-nav-elem" href="<?php echo get_url()?>?post_category=music">music</a>
            <a class="header-nav-elem" href="<?php echo get_url()?>?post_category=travel">travel</a>
        </div>
    </div>