<?php
require_once('config.php');

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>食品登録 | <?php echo SERVICE_NAME; ?></title>
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
                    <li class="active"><a href="./food_register.php">食品登録</a></li>
                    <li><a href="./index.php">食品リスト</a></li>
                    <li><a href="./category_register.php">分類登録</a></li>
                    <li><a href="./setting.php">設定</a></li>
                    <li><a href="./login.php">ログアウト</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container">
        <h1>食品登録</h1>
        form-check-inline
        <form method="POST" class="panel panel-default panel-body">
            <div class="form-group">
                <label>分類<span class="text-danger"> *</span></label>
                <select class="form-control">
                    <option>1時</option>
                    <option>2時</option>
                    <option>3時</option>
                    <option>4時</option>
                    <option>5時</option>
                </select>
            </div>
            <div class="form-group">
                <label>食材名<span class="text-danger"> *</span></label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>賞味期限<span class="text-danger"> *</span></label>
                <input type="date" class="form-control">
            </div>
            <div class="form-group">
                <label>期限アラートタイミング<span class="text-danger"> *</span></label>
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
    </div>
</body>

</html>