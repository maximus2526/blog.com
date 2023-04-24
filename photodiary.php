<!-- Test page "photodiary" -->
<?php 
// HEADER
    include 'template/static/header.php';

?>

<img class="bigphoto" src="/template/img/photodiary/image1.jpg" alt="">
<div class="container">
    <div class="content">
        <p class="content_subtitles">photodiary</p>
        <h1 class="h1">The perfect weekend getaway</h1>
        <div class="content-text"> 
            Lorem ipsum dolor sit amet, <b>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</b> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Lorem ipsum dolor sit amet, <b>consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </b>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, <b>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</b> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
        </div>
        <img class="content-photos" src="/template/img/photodiary/3-photo.jpg" alt="">

        <div class="content-text-italic">“Duis aute irure dolor in reprehenderit in voluptate velit
                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut 
                perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.” 
        </div>
        <div class="content-text">
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
        <div class="block-also-like-images">
            <div class=block-col>
                <img src="/template/img/blogtest/img3.jpg" alt="" class="content-img">
                <h2>Cold winter days</h2>
            </div>
            <div class=block-col>
                <img src="/template/img/blogtest/img3.jpg" alt="" class="content-img">
                <h2>A day exploring the Alps</h2>
            </div>
            <div class=block-col>
                <img src="/template/img/blogtest/img3.jpg" alt="" class="content-img">
                <h2>American dream</h2>
            </div>
        </div>
    </div>

</div>

<?php 
// COMMENT FORM
    include 'template/forms/test_form.php';
?>


<?php 
// FOOTER
    include 'template/static/footer.php';
?>
