<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HTML応用編 ~登録フォームを作ってみよう~</title>
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/style.css">
  </head>
  <body>
    <section class="wrapper">
      <div class="inner">
        <div class="main-content">
          <h1 class="form-title">アカウント作成</h1>
          <div class="columns">
            <div class="column is-halfWidth">
              <a href="#" class="button-init button is-fullWidth is-facebook">Facebookでスタート</a>
            </div>
            <div class="column is-halfWidth">
              <a href="#" class="button-init button is-fullWidth is-google">Googleでスタート</a>
            </div>
          </div>
          <p class="supplement-text is-defaultText">タイムラインへ投稿を行うことや、アカウント情報を伝えることはありません。</p>
          <div class="devider">
            <p class="is-defaultText">アカウント情報</p>
          </div>
          <form class="form-content" action="#" method="POST">
            <!-- 名前 -->
            <div class="row name-box">
              <div class="name is-halfWidth">
                <p class="label-text">名字<span class="alert"> ※</span></p>
                <input type="text" class="input-init input-area" required>
              </div>
              <div class="name is-halfWidth">
                <p class="label-text">名前<span class="alert"> ※</span></p>
                <input type="text" class="input-init input-area" required>
              </div>
            </div>

            <!-- 性別 -->
            <div class="row gender">
              <p class="label-text is-fullWidth">性別</p>
              <!-- 縦並び or 横並び -->
              <div class="gender-contents">
                <label class="gender-content">
                  <input type="radio" name="gender" value="male" class="gender-input">
                  <span>男性</span>
                </label>
                <label class="gender-content">
                  <input type="radio" name="gender" value="female" class="gender-input">
                  <span>女性</span>
                </label>
                <label class="gender-content">
                  <input type="radio" name="gender" value="other" class="gender-input">
                  <span>その他</span>
                </label>
              </div>
            </div>

            <!-- 出身 -->
            <div class="row origin is-halfWidth">
              <p class="label-text">出身</p>
              <div class="select-area">
                <select name="origin" id="origin" class="input-init input-area origin-input">
                  <option value="東京">東京</option>
                  <option value="千葉">千葉</option>
                  <option value="埼玉">埼玉</option>
                  <option value="神奈川">神奈川</option>
                </select>
              </div>
            </div>

            <!-- Eメール -->
            <div class="row email">
              <p class="label-text">Eメール<span class="alert"> ※</span></p>
              <input type="email" class="input-init input-area is-fullWidth" name="email" placeholder="ex) hoge@example.com" required>
            </div>

            <!-- 電話番号 -->
            <div class="row tel">
              <p class="label-text">電話番号</p>
              <input type="tel" class="input-init input-area is-fullWidth" name="tel" placeholder="ex) 09012345678">
            </div>

            <!-- パスワード -->
            <div class="row password">
              <p class="label-text">パスワード<span class="alert"> ※</span></p>
              <input type="password" class="input-init input-area is-fullWidth" name="password">
            </div>
            <div class="row password">
              <p class="label-text">パスワード(確認用)<span class="alert"> ※</span></p>
              <input type="password" class="input-init input-area is-fullWidth" name="password-confirm">
            </div>

            <!-- 複数チェック -->
            <div class="row course">
              <p class="label-text">希望コース</p>
              <div class="course-option">
                <input type="checkbox" name="course" value="frontend" id="frontend">
                <label class="course-option-text" for="frontend">フロントエンド</label>
              </div>
              <div class="course-option">
                <input type="checkbox" name="course" value="backend" id="backend">
                <label class="course-option-text" for="backend">バックエンド</label>
              </div>
              <div class="course-option">
                <input type="checkbox" name="course" value="app" id="app">
                <label class="course-option-text" for="app">アプリ</label>
              </div>
            </div>

            <!-- 備考 -->
            <div class="row remarks">
              <p class="label-text">備考</p>
              <textarea class="input-init input-area is-fullWidth" name="remarks" placeholder="何かあればご記入ください"></textarea>
            </div>

            <!-- 送信ボタン -->
            <div class="row">
              <input type="submit" value="アカウント作成" class="input-init button submit-btn is-fullWidth">
            </div>
            <p class="agreement">アカウントを作成することにより、<a class="link-color" href>利用規約</a>と<a class="link-color" href>プライバシーポリシー</a>に同意するものとします。</p>
          </form>
        </div>
        <div class="foot-part">
          <p>すでにアカウントをお持ちですか？ <a class="link-color" href>ログイン</a></p>
          <a class="link-color resend-mail" href>認証メールが届きませんか？</a>
        </div>
      </div>
    </section>
  </body>
</html>