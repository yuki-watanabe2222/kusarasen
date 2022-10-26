<?php
require_once('config.php');

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title><?php echo SERVICE_NAME; ?></title>
    <meta name="description" content="購入した食材の消費期限切れを事前にお知らせしてくれるサービスです。" />
    <meta name="keywords" content="食品ロス,賞味期限" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="img/logo.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="./index.php">
                <div class="form-group">
                    <input type="text" id="inputEmail" name="user_email" class="form-control" placeholder="メールアドレス" value="<?= $user_email ?>" />
                </div>

                <div class="form-group">
                    <input type="password" id="inputPassword" name="user_password" class="form-control" placeholder="パスワード" />
                </div>

                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">ログイン</button>
                <div class="form-group">
                    <label>
                        <input type="checkbox" name="auto_login" value="1">
                        次回から自動でログイン
                    </label>
                </div>
                <p><a href="./signup.php">新規ユーザー登録（無料） &raquo;</a></p>
            </form><!-- /form -->
        </div><!-- /card-container -->
        <hr>
        <footer class="footer">
            <p><?php echo COPYRIGHT; ?></p>
        </footer>
    </div><!-- /container -->
</body>

</html>