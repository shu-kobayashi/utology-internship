<?php
if($_FILES['file']){
    move_uploaded_file($_FILES['file']['tmp_name'], './img/test.jpg');
}
?>
<form action="./normal_post1.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="ファイルをアップロードする">


</form>