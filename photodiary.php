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
    <style>
        h1{
            margin-top:  28px;
            margin-bottom:  34px;
            color: #626262;
            font-family: "Playfair Display";
            font-size: 30px;
            text-align: left;
        }
        h2{
            color: #626262;
            font-family: "Playfair Display";
            font-size: 20px;
            text-align: left;
            padding-bottom: 89px;
        }
        .bigphoto{
            width: 90%;
            height: 600px;
            margin-top: 77px;
            margin-left: 70px;
            margin-right: 70px;
        }
        .content__photos{
            max-width: 80%;
            max-height: 80%;
        }

        .content{
            margin-right: 397px;
        }

        .content_subtitles{
            margin-top: 99px;
        }
        .content__text-italic{
            margin-top:  54px;
            margin-left:  7px;
            color: #626262;
            font-family: "Playfair Display";
            font-size: 14px;
            line-height: 24px;
            text-align: left;
            font-family: "Playfair Display - Italic";
            font-style: italic;
        }    
        .content__text{
            margin-top: 20px;
            margin-right: 10%;
            margin-bottom: 117px;
            color: #626262;
            font-family: "Playfair Display - Italic";
            font-size: 14px;
            line-height: 24px;
            text-align: left;
        
        }

        .block-also-like{
            background-color: #f2f2f2;
        }

        .block-also-like .content_subtitles{
            padding-left: 156px;
            padding-top: 69px;
            padding-bottom: 40px;
        }  

        .block-also-like__images{
            display: flex;
            justify-content: space-around;
        }
        .block-also-like__images .content__img{
            width: 100%;
            height: 100%;
        }
        .block-col{
            display: flex;
            flex-direction: column;

        }

    </style>
    <?php 
    // HEADER
        include 'template/static/header.php';

    ?>

    <img class="bigphoto" src="template\img\photodiary\image1.jpg" alt="">
    <div class="container">
        <div class="content">
            <p class="content_subtitles">photodiary</p>
            <h1 class="h1">The perfect weekend getaway</h1>
            <div class="content__text"> 
                Lorem ipsum dolor sit amet, <b>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</b> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                Lorem ipsum dolor sit amet, <b>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </b>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, <b>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</b> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
            </div>
            <img class="content__photos" src="template\img\photodiary\3-photo.jpg" alt="">

            <div class="content__text-italic">“Duis aute irure dolor in reprehenderit in voluptate velit
                 esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut 
                  perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                  totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.” 
            </div>
            <div class="content__text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud 
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure 
                <b>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
                eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. </b>
                Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur,
                adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
            </div>
        </div>

        <div class="block-also-like">
            <p class="content_subtitles">you may also like</p>
            <div class="block-also-like__images">
                <div class=block-col>
                    <img src="template/img/blogtest/img3.jpg" alt="" class="content__img">
                    <h2>Cold winter days</h2>
                </div>
                <div class=block-col>
                    <img src="template/img/blogtest/img3.jpg" alt="" class="content__img">
                    <h2>A day exploring the Alps</h2>
                </div>
                <div class=block-col>
                    <img src="template/img/blogtest/img3.jpg" alt="" class="content__img">
                    <h2>American dream</h2>
                </div>
            </div>
        </div>

    </div>

    <?php 
    // COMMENT FORM
        include 'template/forms/comment_form.php';
    ?>


    <?php 
    // FOOTER
        include 'template/static/footer.php';
    ?>
</body>
</html>