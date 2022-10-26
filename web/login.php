<?php
require_once("config.php");

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title><?php echo SERVICE_NAME; ?></title>
    <meta name="description" content="購入した食材の消費期限切れを事前にお知らせしてくれるサービスです。" />
    <meta name="keywords" content="食品ロス,賞味期限" />

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <main class="form-signin text-center">
        <form action="./index.php">
            <img class="mb-3" src="img/logo.png" alt="" width="100" height="100">

            <div class="form-floating mb-3">
                <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
                <label for="emailInput">メールアドレス</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" class="form-control" id="passwordInput" placeholder="パスワード">
                <label for="passwordInput">パスワード</label>
            </div>

            <button class="w-100 mb-3 btn btn-lg btn-primary" type="submit">ログイン</button>
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="1"> 次回から自動でログイン
                </label>
            </div>
            <p><a href="./signup.php">新規ユーザー登録（無料） &raquo;</a></p>
        </form>
        <hr>
        <p class="text-muted"><?php echo COPYRIGHT ?></p>

    </main>

    <footer>
    </footer>

    <script src="js/bootstrap.min.js"></script>
</body>

</html>