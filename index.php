<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog title</title>
    <link rel="stylesheet" href="template/css/null.css">
    <link rel="stylesheet" href="template/css/header.css">
    <link rel="stylesheet" href="template/css/footer.css">
    <link rel="stylesheet" href="template/css/content/main_page.css">
    <!-- <link rel="stylesheet" href="template/css/content/post_page.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>
<body>
    <?php 
    // HEADER
        include 'template/static/header.php';
    ?>




    

    

    <?php 
    // CONTENT
       include 'template/pages/main_page.php';
    ?>








    <?php 
    // FOOTER
        include 'template/static/footer.php';
    ?>
</body>
</html>