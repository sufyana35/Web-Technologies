<?php
  $conn = mysqli_connect('localhost', 'unn_w14033416', 'holly-05', 'unn_w14033416');
  if (mysqli_connect_errno()) {
		echo "<p>Connection failed:".mysqli_connect_error()."</p>\n";
  }
?>
