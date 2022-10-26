<?php
require_once("config.php");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // submit

    $category_name = $_POST['category_name'];
    $food_name = $_POST['food_name'];
    $deadline = $_POST['deadline'];
    $alert = $_POST['alert'];

    if ($category_name == '') {
        $err['category_name'] = 'カテゴリーを選択してください。';
    }

    if ($food_name == '') {
        $err['food_name'] = '食品名を入力してください。';
    } elseif (strlen(mb_convert_encoding($user_passsword, 'SJIS', 'UTF-8')) > 30) {
        $err['food_name'] = '食品名は30バイト以内で入力してください。';
    }

    if ($deadline == '') {
        $err['deadline'] = '賞味期限を入力してください。';
    } elseif (strlen(mb_convert_encoding($deadline, 'SJIS', 'UTF-8')) > 30) {
        $err['deadline'] = '賞味期限は30バイト以内で入力してください。';
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
    <title>食品登録 | <?php echo SERVICE_NAME; ?></title>
    <meta name="description" content="購入した食材の消費期限切れを事前にお知らせしてくれるサービスです。" />
    <meta name="keywords" content="食品ロス,賞味期限" />

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/food_register.css">
</head>

<body>
    <header class="p-3 bg-dark text-white">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./food_register.php" class="nav-link px-2 text-secondary">食品登録</a></li>
                    <li><a href="./index.php" class="nav-link px-2 text-white">食品一覧</a></li>
                    <li><a href="./category_register.php" class="nav-link px-2 text-white">カテゴリ登録</a></li>
                    <li><a href="./setting.php" class="nav-link px-2 text-white">設定</a></li>
                </ul>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light me-2" onclick="location.href='./login.php'">ログアウト</button>
                </div>
            </div>
        </div>
    </header>

    <main class="form-food">
        <div class="card">
            <div class="card-header bg-secondary text-light">
                食品登録
            </div>
            <div class="card-body bg-light">
                <form method="post">
                    <div class="mb-3">
                        <label for="categoryInput" class="form-label">カテゴリ <span class="badge bg-danger">必須</span></label>
                        <select class="form-select <?php if ($err['category_name'] != '') echo 'is-invalid'; ?>" name="category_name" id="categoryInput" aria-label="Example select with button addon">
                            <option value="指定なし">指定なし</option>
                            <option value="冷蔵庫">冷蔵庫</option>
                            <option value="冷凍庫">冷凍庫</option>
                            <option value="冷蔵庫">冷蔵庫</option>
                            <option value="収納庫">収納庫</option>
                        </select>
                        <span class="invalid-feedback"><?php echo $err['category_name']; ?></span>
                    </div>

                    <div class="mb-3">
                        <label for="foodNameInput" class="form-label">食品名 <span class="badge bg-danger">必須</span></label>
                        <input type="text" class="form-control <?php if ($err['food_name'] != '') echo 'is-invalid'; ?>" name="food_name" id="foodNameInput" placeholder="食品名">
                        <span class="invalid-feedback"><?php echo $err['food_name']; ?></span>
                    </div>

                    <div class="mb-3">
                        <label for="deadlineInput" class="form-label">賞味期限 <span class="badge bg-danger">必須</span></label>
                        <input type="date" class="form-control <?php if ($err['deadline'] != '') echo 'is-invalid'; ?>" name="deadline" id="deadlineInput">
                        <span class="invalid-feedback"><?php echo $err['deadline']; ?></span>
                    </div>

                    <div class="mb-3">
                        <label for="alertInput" class="form-label">アラートタイミング <span class="badge bg-danger">必須</span></label>
                        <div class="input-group">
                            <span class="input-group-text">賞味期限</span>
                            <input type="number" class="form-control <?php if ($err['alert'] != '') echo 'is-invalid'; ?>" name="alert" id="alertInput" placeholder="3">
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