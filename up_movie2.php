<?php
if($_FILES['file']){
  print_r($_FILES['file']);
}
?>
<form action="./up_movie2.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="ファイルをアップロードする">
</form>
