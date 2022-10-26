<?php
require_once('config.php');

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ユーザー登録 | <?php echo SERVICE_NAME; ?></title>
    <meta name="description" content="購入した食材の消費期限切れを事前にお知らせしてくれるサービスです。" />
    <meta name="keywords" content="食品ロス,賞味期限" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="main">
    <div class="container">
        <h1>ユーザー登録</h1>

        <form method="POST" action="./signup_complete.php" class="panel panel-default panel-body">
            <div class="form-group <?php if ($err['user_screen_name'] != '') echo 'has-error'; ?>">
                <input type="text" class="form-control" placeholder="ニックネーム" name="user_screen_name" value=<?= $user_screen_name ?>>
                <span class="help-block"><?php echo $err['user_screen_name']; ?></span>
            </div>
            <div class="form-group <?php if ($err['user_email'] != '') echo 'has-error'; ?>">
                <input type="text" class="form-control" placeholder="メールアドレス" name="user_email" value=<?= $user_email ?>>
                <span class="help-block"><?php echo $err['user_email']; ?></span>
            </div>
            <div class="form-group <?php if ($err['user_password'] != '') echo 'has-error'; ?>">
                <input type="password" class="form-control" placeholder="パスワード" name="user_password">
                <span class="help-block"><?php echo $err['user_password']; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" value="アカウントを作成" class="btn btn-success btn-block" />
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