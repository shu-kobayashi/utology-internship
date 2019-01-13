<?php
/**
 * Created by PhpStorm.
 * User: s16C1
 * Date: 2018/11/24
 * Time: 14:55
 */

$username = '';
if($_SERVER['REQUEST_METHOD']==='POST'){
    $username = $_POST['username'];
    $err = false;
    if(strlen($username)>8){
        $err = true;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>Cheack username</title>
</head>
<body>
<form action="" action="POST">
    <input type="text" name="username" placeholder="user name"value="<?php echo
    htmlspecialchars($username,ENT_QUOTES,'UTF-8'); ?>">
    <input type="submit" value="Check!">
</form>
</body>
</html>
