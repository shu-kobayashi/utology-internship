<?php
    if(isset($_REQUEST['button_sum'])){

        $a = $_REQUEST['no1'];
        $s = $_REQUEST['name'];
        $b = $_REQUEST['no2'];
        $c = $a + $b;
    }else{
        echo "数字の入力をお願いします";
    }
    //$c = $a + $b
    ?>

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
                <label>一つ目の数字: <input type="text" name="no1" value="<?php echo htmlspecialchars($a); ?>"/></label><br/>
                <label>+ - * /: <input type="text" name="name"/></label><br/>
                <label>二つ目の数字: <input type="text" name="no2" value="<?php echo htmlspecialchars($b); ?>"/></label><br/>
                <span><?php echo htmlspecialchars($c); ?></span>
                <input type="submit" name="button_sum" value="結果">
                <?php echo $s; ?>
            </form>
        </div>
    </body>
</html>