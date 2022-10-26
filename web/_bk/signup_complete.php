<?php
require_once('config.php');

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ユーザー登録完了 | <?php echo SERVICE_NAME; ?></title>
    <meta name="description" content="購入した食材の消費期限切れを事前にお知らせしてくれるサービスです。" />
    <meta name="keywords" content="食品ロス,賞味期限" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>

<body id="main">
    <div class="container">
        <h1>ユーザー登録完了</h1>

        <div class="alert alert-success">
            ユーザー登録が完了しました。
        </div>
        <a href="./index.php">トップページへ</a>
        <hr>
        <footer class="footer">
            <p><?php echo COPYRIGHT; ?></p>
        </footer>
    </div>

    <script src="//code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>

</html>