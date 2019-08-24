<?php
session_start();

$message = '';
try {
    $DBSERVER = 'localhost';
    $DBUSER = 'board';
    $DBPASSWD = 'boardpw';
    $DBNAME = 'board';
    $dsn = 'mysql:'
        . 'host=' . $DBSERVER . ';'
        . 'dbname=' . $DBNAME . ';'
        . 'charset=utf8';
    $pdo = new PDO($dsn, $DBUSER, $DBPASSWD, array(PDO::ATTR_EMULATE_PREPARES => false));

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM boards";
    $stmt = $dbh->query($sql);
    // foreach文で配列の中身を一行ずつ出力
    foreach ($stmt as $row) {
        // データベースのフィールド名で出力
        echo $row['id'] . '：' . $row['title'] . '_time' .$row['created'];
        // 改行を入れる
        echo '<br>';
        }
    } catch (Exception $e) {
    $message = "接続に失敗しました: {$e->getMessage()}";
}

?>