<?php
include('commen.php');
while ($row = mysqli_fetch_assoc($result)) { ?>
  <div>
    <span><?php echo $row['id'] ?></span>
    <span><?php echo $row['time'] ?></span>
    <div><?php echo $row['innertext'] ?></div>
  </div>
<?php } ?>