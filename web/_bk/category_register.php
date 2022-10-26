<?php
require_once('config.php');

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>分類登録 | <?php echo SERVICE_NAME; ?></title>
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
                    <li><a href="./index.php">食品リスト</a></li>
                    <li class="active"><a href="./category_register.php">分類登録</a></li>
                    <li><a href="./setting.php">設定</a></li>
                    <li><a href="./login.php">ログアウト</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <h1>分類登録</h1>
        <form method="POST" class="panel panel-default panel-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <input type="text" class="form-control">
                    </div>
                    <div class="col-md-2">
                        <input type="submit" value="登録" class="btn btn-success btn-block" />
                    </div>
                </div>
            </div>
        </form>
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                冷蔵庫
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                        ・・・
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="#">削除</a></li>
                    </ul>
                </div>
            </li>
            <li class="list-group-item">
                冷凍室
            </li>
            <li class="list-group-item">
                収納庫
            </li>
        </ul>
        <hr>
        <footer class="footer">
            <p><?php echo COPYRIGHT; ?></p>
        </footer>
    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>