<form action="" method="get">
  
  <?php 
  $entries_count = $PDO->get_pages_count(); // Extracted value from mysqli_result
  $num_pages = ceil($entries_count / $how_many_pages); // How many pages will there be
  for ($page_num = 1; $page_num <= $num_pages; $page_num++):
    // Select active button for custom styles
    $btn_class = 'pagination-btn-active';
    if ($page_num != (int)$_GET['page_num']) {
      $btn_class = 'pagination-btn';
    }
  ?>

  <button name="page_num" value="<?php echo $page_num ?>" type="submit" class="<?php echo $btn_class ?>"><?php echo $page_num?></button>

  <?php endfor;?> 
</form>