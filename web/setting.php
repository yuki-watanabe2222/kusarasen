<?php
require_once("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // submit

    $deliver_hour = $_POST['deliver_hour'];
    $alert = $_POST['alert'];

    $err = array();

    if ($deliver_hour == '') {
        $err['deliver_hour'] = 'メール通知時間を入力してください。';
    }

    if ($alert == '') {
        $err['alert'] = 'アラートタイミングを入力してください。';
    }
} else {
    // 画面初期表示
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>設定 | <?php echo SERVICE_NAME; ?></title>
    <meta name="description" content="購入した食材の消費期限切れを事前にお知らせしてくれるサービスです。" />
    <meta name="keywords" content="食品ロス,賞味期限" />

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/setting.css">
</head>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./food_register.php" class="nav-link px-2 text-white">食品登録</a></li>
                    <li><a href="./index.php" class="nav-link px-2 text-white">食品一覧</a></li>
                    <li><a href="./category_register.php" class="nav-link px-2 text-white">カテゴリ登録</a></li>
                    <li><a href="./setting.php" class="nav-link px-2 text-secondary">設定</a></li>
                </ul>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2" onclick="location.href='./login.php'">ログアウト</button>
                </div>
            </div>
        </div>
    </header>

    <main>
        <div class="card">
            <div class="card-header bg-secondary text-light">
                設定
            </div>
            <div class="card-body bg-light">
                <form method="post">
                    <div class="mb-3">
                        <label for="deliverHourInput" class="form-label">メール通知時間 <span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <input type="number" class="form-control <?php if ($err['deliver_hour'] != '') echo 'is-invalid'; ?>" name="deliver_hour" id="deliverHourInput" placeholder="7">
                            <span class="input-group-text">時</span>
                            <span class="invalid-feedback"><?php echo $err['deliver_hour']; ?></span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="alertInput" class="form-label">アラートタイミング <span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <input type="number" class="form-control <?php if ($err['alert'] != '') echo 'is-invalid'; ?> " name="alert" id="alertInput" placeholder="3">
                            <span class="input-group-text">日前</span>
                            <span class="invalid-feedback"><?php echo $err['alert']; ?></span>
                        </div>
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