<?php
session_start();

$message = '';
try {
    $DBSERVER = 'localhost';
    $DBUSER = 'board';
    $DBPASSWD = 'boardpw';
    $DBNAME = 'sampledb';
    $dsn = 'mysql:'
        . 'host=' . $DBSERVER . ';'
        . 'dbname=' . $DBNAME . ';'
        . 'charset=utf8';
    //$dsn = 'mysql:dbname=sampledb;host=localhost;charset=utf8';
    $pdo = new PDO($dsn, $DBUSER, $DBPASSWD, array(PDO::ATTR_EMULATE_PREPARES => false));
    //$pdo = new PDO($dsn, $DBUSER, $DBPASSWD);
} catch (Exception $e) {
    $message = "接続に失敗: {$e->getMessage()}";
}
// 入力が全て入っていたらユーザーを作成する
if(!empty($_POST['name']) && !empty($_POST['mail']) && !empty($_POST['password'])) {
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $sql = "INSERT INTO board (name, mail, password, created, modified)";
    $sql .= ' VALUES (:name, :mail, :password, NOW(), NOW())';
    //$sql = "INSERT INTO makeuser (name, email, password)";
    //$sql .= ' VALUES (:name, :mail, :password)';
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(':name', $name, \PDO::PARAM_STR);
    $stmt->bindValue(':mail', $mail, \PDO::PARAM_STR);
    $stmt->bindValue(':password', $password, \PDO::PARAM_STR);
    //$stmt->bindValue(':name', $name);
    //$stmt->bindValue(':mail', $mail);
    //$stmt->bindValue(':password', $password);
    //下の行で行を追加すると思われる
    $result = $stmt->execute();
    if ($result) {
        $message = 'ユーザーを作成';
        $_SESSION['id'] = $pdo->lastInsertId();
        $_SESSION['name'] = $name;
        $_SESSION['mail'] = $mail;
        $_SESSION['password'] = $password;
    } else {
        $message = '登録に失敗';
        echo $result;
    }
}else{
    $message_x = "中身がないです";
    echo $message_x;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ユーザー登録</title>
</head>
<body>
<header>

    <div>
        <a href="./index.php">TOP</a>
        <a href="./register.php">新規作成</a>
        <a href="./login.php">ログイン</a>
        <a href="./logout.php">ログアウト</a>
    </div>
    <h1>ユーザーの新規登録</h1>
</header>
<div>
    <div style="color: purple">
        <?php echo $message; ?>
    </div>
    <form action="register.php" method="post">
        <label>mail: <input type="email" name="mail"/></label><br/>
        <label>password: <input type="password" name="password"/></label><br/>
        <label>name: <input type="text" name="name"/></label><br/>
        <input type="submit" value="新規登録">
    </form>
</div>
</body>
</html>