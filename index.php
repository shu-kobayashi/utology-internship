<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>トップ</title>
</head>
<body>
<header>
    <div>
        <a href="/index.php">TOP</a>
        <a href="/register.php">新規作成</a>
        <a href="/login.php">ログイン</a>
        <a href="/logout.php">ログアウト</a>
        <!--
        <a href="/utology-internship/index.php">TOP</a>
        <a href="/utology-internship/register.php">新規作成</a>
        <a href="/utology-internship/login.php">ログイン</a>
        <a href="/utology-internship/logout.php">ログアウト</a>
        -->
    </div>
<h1>トップ</h1>
</header>
<div>
    <?php echo "{$_SESSION['name']}コバヤシさんようこそ"; ?>
</div>
</body>
</html>