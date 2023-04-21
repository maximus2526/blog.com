
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog title</title>
    <link rel="stylesheet" href="/template/css/null.css">
    <link rel="stylesheet" href="/template/css/header.css">
    <link rel="stylesheet" href="/template/css/footer.css">
    <link rel="stylesheet" href="/template/css/content/main_page.css">
    <link rel="stylesheet" href="/template/css/content/post_page.css">
</head>
<body>
    <?php 
    // HEADER
        include $_SERVER['DOCUMENT_ROOT'].'/mysql_manager/db_manage.php';
        include $_SERVER['DOCUMENT_ROOT'].'/template/static/header.php';
        $conn = connect();
    ?>

    <div class="content">
        <?php 
        $post_id = $_GET["post_id"] 
        ?>
        <h1><?=get_attr($conn, "post_title", $post_id);?></h1>
        <p class="content__text-italic"><?=get_attr($conn, "post_date", $post_id);?></p>
        <img class="content__photos" src="<?=get_attr($conn, "post_img_path", $post_id);?>" alt="">

        <p class="content__text" id="content"><?=get_attr($conn, "post_text", $post_id);?></p> 

    </div>    


    <?php
    $conn->close();
    ?>   

    <?php 
    // COMMENT FORM
        include $_SERVER['DOCUMENT_ROOT'].'/template/forms/comment_form.php';
    ?>


    <?php 
    // FOOTER
        include $_SERVER['DOCUMENT_ROOT'].'/template/static/footer.php';
    ?>
</body>
</html>