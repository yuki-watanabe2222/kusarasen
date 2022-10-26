<?php
require_once("config.php");

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>HOME | <?php echo SERVICE_NAME; ?></title>
    <meta name="description" content="購入した食材の消費期限切れを事前にお知らせしてくれるサービスです。" />
    <meta name="keywords" content="食品ロス,賞味期限" />

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./food_register.php" class="nav-link px-2 text-white">食品登録</a></li>
                    <li><a href="./index.php" class="nav-link px-2 text-secondary">食品一覧</a></li>
                    <li><a href="./category_register.php" class="nav-link px-2 text-white">カテゴリ登録</a></li>
                    <li><a href="./setting.php" class="nav-link px-2 text-white">設定</a></li>
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
                食品一覧
            </div>
            <div class="card-body bg-light">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">カテゴリ</label>
                    <div class="input-group">
                        <select class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon">
                            <option value="0">指定なし</option>
                            <option value="1">冷蔵庫</option>
                            <option value="2">冷凍庫</option>
                            <option value="3">収納庫</option>
                        </select>
                        <img src="img/search.svg" class="btn btn-outline-secondary dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"></img>
                    </div>
                </div>

                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <span class="badge rounded-pill bg-primary me-2">冷蔵庫</span>
                        <div class="ms-2 me-auto">
                            納豆
                            <span class="fw-bold text-muted limit-text">あと10日</span>
                        </div>
                        <div class="dropdown">
                            <img src="img/list.svg" class="dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"></img>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><button class="dropdown-item" type="button">編集</button></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><button class="dropdown-item" type="button">削除</button></li>
                            </ul>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-start">
                        <span class="badge rounded-pill bg-primary me-2">冷凍庫</span>
                        <div class="ms-2 me-auto">
                            キャベツ
                            <span class="fw-bold text-muted limit-text">あと3日</span>
                        </div>
                        <div class="dropdown">
                            <img src="img/list.svg" class="dropdown-toggle" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false"></img>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li><button class="dropdown-item" type="button">編集</button></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
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