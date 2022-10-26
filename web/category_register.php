<?php
require_once("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // submit

    $category_name = $_POST['category_name'];

    $err = array();

    if ($category_name == '') {
        $err['category_name'] = 'カテゴリ名を入力してください。';
    }
} else {
    // 画面初期表示
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>カテゴリ登録 | <?php echo SERVICE_NAME; ?></title>
    <meta name="description" content="購入した食材の消費期限切れを事前にお知らせしてくれるサービスです。" />
    <meta name="keywords" content="食品ロス,賞味期限" />

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/category_register.css">
</head>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./food_register.php" class="nav-link px-2 text-white">食品登録</a></li>
                    <li><a href="./index.php" class="nav-link px-2 text-white">食品一覧</a></li>
                    <li><a href="./category_register.php" class="nav-link px-2 text-secondary">カテゴリ登録</a></li>
                    <li><a href="./setting.php" class="nav-link px-2 text-white">設定</a></li>
                </ul>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2" onclick="location.href='./login.php'">ログアウト</button>
                </div>
            </div>
        </div>
    </header>

    <main class="form-category">
        <div class="card">
            <div class="card-header bg-secondary text-light">
                カテゴリ登録
            </div>
            <div class="card-body bg-light">
                <form method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control <?php if ($err['category_name'] != '') echo 'is-invalid'; ?>" name="category_name" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" type="submit" id="button-addon2">登録</button>
                        <span class="invalid-feedback"><?php echo $err['category_name']; ?></span>
                    </div>
                </form>

                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            冷蔵庫
                        </div>
                        <div class="dropdown">
                            <img src="img/list.svg" class="dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"></img>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><button class="dropdown-item" type="button">削除</button></li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            冷凍庫
                        </div>
                        <div class="dropdown">
                            <img src="img/list.svg" class="dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"></img>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><button class="dropdown-item" type="button">削除</button></li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            収納庫
                        </div>
                        <div class="dropdown">
                            <img src="img/list.svg" class="dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"></img>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><button class="dropdown-item" type="button">削除</button></li>
                            </ul>
                        </div>
                    </li>
                </ul>
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