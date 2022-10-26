<?php
require_once("config.php");
require_once('functions.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // submit

    $user_email = $_POST['user_email'];
    $user_password = $_POST['user_password'];
    $user_password_confirm = $_POST['user_password_confirm'];

    $err = array();

    // 入力チェック
    if ($user_email == '') {
        $err['user_email'] = 'メールアドレスを入力してください。';
    } elseif (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
        $err['user_email'] = 'メールアドレスの形式が不正です。';
    } elseif (strlen(mb_convert_encoding($user_email, 'SJIS', 'UTF-8')) > 200) {
        $err['user_email'] = 'メールアドレスは200バイト以内で入力してください。';
    }

    if ($user_password == '') {
        $err['user_password'] = 'パスワードを入力してください。';
    } elseif (strlen(mb_convert_encoding($user_password, 'SJIS', 'UTF-8')) > 30) {
        $err['user_password'] = 'パスワードは30バイト以内で入力してください。';
    }

    if ($user_password_confirm == '') {
        $err['user_password_confirm'] = 'パスワード(確認)を入力してください。';
    } elseif (strlen(mb_convert_encoding($user_password_confirm, 'SJIS', 'UTF-8')) > 30) {
        $err['user_password_confirm'] = 'パスワード(確認)は30バイト以内で入力してください。';
    } elseif ($user_password != $user_password_confirm) {
        $err['user_password_confirm'] = 'パスワードが一致しません。';
    }

    $pdo = connectDb();

    if (empty($err)) {
        // ユーザ新規登録
        $stmt = $pdo->prepare("INSERT INTO user (user_password, user_email, deliver_hour, alert, created_at, updated_at) VALUES (:user_password, :user_email, 99, 3, now(), now())");

        $stmt->bindValue(':user_password', $user_password, PDO::PARAM_STR);
        $stmt->bindValue(':user_email', $user_email, PDO::PARAM_STR);

        $stmt->execute();
    }
} else {
    // 画面初期表示
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザ登録 | <?php echo SERVICE_NAME; ?></title>
    <meta name="description" content="購入した食材の消費期限切れを事前にお知らせしてくれるサービスです。" />
    <meta name="keywords" content="食品ロス,賞味期限" />

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>
    <main class="form-signup">
        <div class="card">
            <div class="card-header bg-secondary text-light">
                ユーザ登録
            </div>
            <div class="card-body bg-light">
                <form method="post">
                    <div class="form-group mb-3">
                        <label for="emailInput" class="form-label">メールアドレス <span class="badge bg-danger">必須</span></label>
                        <input type="text" class="form-control <?php if ($err['user_email'] != '') echo 'is-invalid'; ?>" id="emailInput" name="user_email" placeholder="メールアドレス">
                        <span class="invalid-feedback"><?php echo $err['user_email']; ?></span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="passwordInput" class="form-label">パスワード <span class="badge bg-danger">必須</span></label>
                        <input type="password" class="form-control <?php if ($err['user_password'] != '') echo 'is-invalid'; ?>" id="passwordInput" name="user_password" placeholder="パスワード">
                        <span class="invalid-feedback"><?php echo $err['user_password']; ?></span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="passwordConfirmInput" class="form-label">パスワード(確認) <span class="badge bg-danger">必須</span></label>
                        <input type="password" class="form-control <?php if ($err['user_password_confirm'] != '') echo 'is-invalid'; ?>" id="passwordConfirmInput" name="user_password_confirm" placeholder="パスワード">
                        <span class="invalid-feedback"><?php echo $err['user_password_confirm']; ?></span>
                    </div>
                    <button class="w-100 mb-3 btn btn-lg btn-primary" type="submit">登録</button>
                </form>
            </div>
        </div>
    </main>
    <footer>
        <hr>
        <p class="text-muted"><?php echo COPYRIGHT ?></p>
    </footer>

    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>