<?php
session_start();
$inputs = $_POST;
$inputs['gender'] = genderToJp($inputs['gender']);
$inputs['course'] = courseToJp($inputs['course']);
$_SESSION['inputs'] = $inputs;

function genderToJp($gender)
{
    switch ($gender) {
        case 'male':
            return '男性';
        case 'female':
            return '女性';
        case 'other':
            return 'その他';
        default:
            break;
    }
}

function courseToJp($course)
{
    switch ($course) {
        case 'frontend':
            return 'フロントエンド';
        case 'backend':
            return 'バックエンド';
        case 'app':
            return 'アプリ';
        default:
            break;
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>確認画面</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/style.css">
  </head>
  <body>
    <section class="wrapper">
      <div class="inner">
        <div class="main-content">
          <h1 class="form-title">入力情報確認</h1>
          <form class="form-content" action="./thanks.php" method="POST">
            <!-- 名前 -->
            <div class="row name-box">
              <div class="name is-halfWidth">
                <p class="label-text">名字<span class="alert"> ※</span></p>
                <p class="text"><?= $inputs['lastName'] ?></p>
              </div>
              <div class="name is-halfWidth">
                <p class="label-text">名前<span class="alert"> ※</span></p>
                <p class="text"><?= $inputs['firstName'] ?></p>
              </div>
            </div>

            <!-- 性別 -->
            <div class="row gender">
              <p class="label-text is-fullWidth">性別</p>
              <p class="text"><?= $inputs['gender'] ?></p>
            </div>

            <!-- 出身 -->
            <div class="row origin is-halfWidth">
              <p class="label-text">出身</p>
              <p class="text"><?= $inputs['origin'] ?></p>
            </div>

            <!-- Eメール -->
            <div class="row email">
              <p class="label-text">Eメール<span class="alert"> ※</span></p>
              <p class="text"><?= $inputs['email'] ?></p>
            </div>

            <!-- 電話番号 -->
            <div class="row tel">
              <p class="label-text">電話番号</p>
              <p class="text"><?= $inputs['tel'] ?></p>
            </div>

            <!-- パスワード -->
            <div class="row password">
              <p class="label-text">パスワード<span class="alert"> ※</span></p>
              <p class="text">入力したパスワード</p>
            </div>

            <!-- 複数チェック -->
            <div class="row course">
              <p class="label-text">希望コース</p>
              <p class="text"><?= $inputs['course'] ?></p>
            </div>

            <!-- 備考 -->
            <div class="row remarks">
              <p class="label-text">備考</p>
              <p class="text"><?= $inputs['remarks'] ?></p>
            </div>

            <!-- 送信ボタン -->
            <div class="row">
              <input type="submit" value="登録" class="input-init button submit-btn is-fullWidth">
            </div>
            <p class="agreement">アカウントを作成することにより、<a class="link-color" href>利用規約</a>と<a class="link-color" href>プライバシーポリシー</a>に同意するものとします。</p>
          </form>
        </div>
      </div>
    </section>
  </body>
</html>