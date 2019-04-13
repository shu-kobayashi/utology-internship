<?php
try{
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
                move_uploaded_file($_FILES['file']['tmp_name'], './img/test.jpg');
        }
}catch(Exception $e) {
        echo 'エラー:', $e->getMessage().PHP_EOL;
}
?>

<form action="./up_movie2.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="ファイルをアップロードする">
</form>