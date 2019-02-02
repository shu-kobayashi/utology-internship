<?php
//var_dump($_POST);
//最初に変数を定義しておかないとエラーになる
$err_msg1 = "";
$err_msg2 = "";
$message = "";
$name = (isset($_POST["name"]) === true) ? $_POST["name"] : "";
$comment = (isset($_POST["comment"]) === true) ? trim($_POST["comment"]) : "";
$filename = __DIR__ . "/data/data.txt";
if (!file_exists($filename)) {
    touch($filename);
}


if ($comment === "") $err_msg2 = "コメントを入力してください";

if ($err_msg1 === "" && $err_msg2 === "") {
    $fp = fopen($filename, "a");
    fwrite($fp, $name . "\t" . $comment . "\n");
    $message = "書き込みに成功しました。";
}

$fp = fopen($filename, "r");

$dataArr = array();
while ($res = fgets($fp)) {
    $tmp = explode("\t", $res);
    $arr = array(
        "name" => $tmp[0],
        "comment" => $tmp[1]
    );
    $dataArr[] = $arr;
}

//以降はhtml
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="ja">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <title>掲示板</title>
</head>
<body>
<?php echo $message; ?>
<form method="post" action="">
    名前：<input type="text" name="name" value="<?php echo $name; ?>">
    <?php echo $err_msg1; ?><br>
    コメント：<textarea name="comment" rows="4" cols="40"><?php echo $comment; ?></textarea>
    <?php echo $err_msg2; ?><br>
    <br>
    <input type="submit" name="send" value="クリック">
</form>
<dl> <!-- 定義リスト -->
    <?php foreach ($dataArr as $data): ?>
        <p><span><?php echo $data["name"]; ?></span>:<span><?php echo $data["comment"]; ?></span></p>
    <?php endforeach; ?>
</dl>
</body>
</html>
