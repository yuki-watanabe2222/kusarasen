<?php
require_once('config.php');

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <title>設定 | <?php echo SERVICE_NAME; ?></title>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="main">
    <div class="nav navbar-default navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="navbar-brand" href="<?php echo SITE_URL; ?>"><?php echo SERVICE_NAME; ?></a>
                <ul class="nav navbar-nav">
                    <li><a href="./food_register.php">食品登録</a></li>
                    <li><a href="./index.php">食品リスト</a></li>
                    <li><a href="./category_register.php">分類登録</a></li>
                    <li class="active"><a href="./setting.php">設定</a></li>
                    <li><a href="./login.php">ログアウト</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <h1>設定</h1>
        <?php if ($complete_msg) : ?>
            <div class="alert alert-success">
                <?php echo $complete_msg; ?>
            </div>
        <?php endif; ?>

        <form method="POST" class="panel panel-default panel-body">
            <div class="form-group">
                <label>メール通知</label>
                <select class="form-control">
                    <option>1時</option>
                    <option>2時</option>
                    <option>3時</option>
                    <option>4時</option>
                    <option>5時</option>
                </select>
            </div>
            <div class="form-group">
                <label>期限アラートタイミング</label>
                <select class="form-control">
                    <option>1日前</option>
                    <option>2日前</option>
                    <option>3日前</option>
                    <option>4日前</option>
                    <option>5日前</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="登録" class="btn btn-success btn-block" />
            </div>
        </form>

        <hr>
        <footer class="footer">
            <p><?php echo COPYRIGHT; ?></p>
        </footer>
    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>