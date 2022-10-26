<?php
require_once('config.php');

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>HOME | <?php echo SERVICE_NAME; ?></title>
    <meta name="description" content="購入した食材の消費期限切れを事前にお知らせしてくれるサービスです。" />
    <meta name="keywords" content="食品ロス,賞味期限" />
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
                    <li class="active"><a href="./index.php">食品リスト</a></li>
                    <li><a href="./category_register.php">分類登録</a></li>
                    <li><a href="./setting.php">設定</a></li>
                    <li><a href="./login.php">ログアウト</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <h1>食品リスト</h1>

        <form method="POST" class="panel panel-default panel-body form-inline">
            <div class="form-group">
                <label class="control-label">分類 </label>
                <select class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
            <p><a href="./food_register.php">新規登録 &raquo;</a></p>
            <p><a href="./index.php">まとめて削除 &raquo;</a></p>
            <ul class="list-group">
                <li class="list-group-item">
                    <input type="checkbox" class="custom-control-input">
                    分類 食品名 賞味期限 アラート日数　[編集] [削除]
                </li>
                <li class="list-group-item">
                    <input type="checkbox" class="custom-control-input">
                    分類 食品名 賞味期限 アラート日数　[編集] [削除]
                </li>
                <li class="list-group-item">
                    <input type="checkbox" class="custom-control-input">
                    分類 食品名 賞味期限 アラート日数　[編集] [削除]
                </li>
            </ul>
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