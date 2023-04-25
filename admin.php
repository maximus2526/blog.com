<link rel="stylesheet" href="css/admin.css">
<?php 
    include "includes.php";
    db_manager();
    $db_obj = new Connection();
?>
<h1>Admin panel</h1>

<table>
  <tr>
    <th>post_id</th>
    <th>post_img_path</th>
    <th>post_title</th>
    <th>post_date</th>
    <th>post_short_text</th>
    <th>post_text</th>
  </tr>
  <?php
    foreach($db_obj->get_all_data("post") as $col):   
  ?>
  <tr class="post-value">
    <th><?php echo $col["post_id"]; ?></th>
    <th><?php echo $col["post_img_path"]; ?></th>
    <th><?php echo $col["post_title"]; ?></th>
    <th><?php echo $col["post_date"]; ?></th>
    <th><?php echo $col["post_short_text"]; ?></th>
    <th><?php echo $col["post_text"]; ?></th>
  </tr>
  <?php endforeach ?>
</table>