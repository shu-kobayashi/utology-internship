<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>電卓ゥ～</title>
</head>
    <body>
    <header>
        <h1>四則演算</h1>
    </header>
    <div>
        <div style="color: purple">
          <?php echo $message; ?>
        </div>
            <form action="dentaku.php" method="post">
                <label>一つ目の数字: <input type="text" name="no1"/></label><br/>
                <label>+ - * /: <input type="text" name="name"/></label><br/>
                <label>二つ目の数字: <input type="text" name="no2"/></label><br/>
                <input type="submit" value="結果">
            </form>
        </div>
    </body>
</html>