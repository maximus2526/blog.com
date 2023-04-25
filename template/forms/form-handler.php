<?php
// Hundle input


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // отримуємо дані з форми
    $post_id = $_POST['post_id'];
    $comment = $_POST["comment"];
    // обробляємо дані форми, наприклад, зберігаємо їх у базі даних
    if(isset($comment)){
        post_comment($post_id, $comment);  // Шось тут не робить або в comment form, ще глянь якщо шо в pdo-manager і вируби після фіксу db-manage.
        header("Location: " . $_SERVER['PHP_SELF']."?post_id=".$post_id);
    }
    exit;
        }
    
?>

