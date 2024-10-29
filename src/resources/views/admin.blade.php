<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('css/common.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
</head>

<body>
    <div class="container">
        <header>
            <h1>FashionablyLate</h1>
            <button class="logout-button">logout</button>
        </header>
        <main>
            <h2>Admin</h2>
            <div class="search-area">
                <input type="text" placeholder="名前やメールアドレスを入力してください">
                <select>
                    <option>性別</option>
                </select>
                <select>
                    <option>お問い合わせの種類</option>
                </select>
                <select>
                    <option>年/月/日</option>
                </select>
                <button class="search-button">検索</button>
                <button class="reset-button">リセット</button>
            </div>
            <button class="export-button">エクスポート</button>
            <table>
                <thead>
                    <tr>
                        <th>お名前</th>
                        <th>性別</th>
                        <th>メールアドレス</th>
                        <th>お問い合わせの種類</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>山田 太郎</td>
                        <td>男性</td>
                        <td>test@example.com</td>
                        <td>商品の交換について</td>
                        <td><button class="detail-button">詳細</button></td>
                    </tr>
                    <!-- 追加の行はここに同じ形式で繰り返し -->
                </tbody>
            </table>
            <div class="pagination">
                <span>&lt;</span>
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>4</span>
                <span>5</span>
                <span>&gt;</span>
            </div>
        </main>
    </div>
</body>
</html>

<!-- <body>
  <header class="header">
    <div class="header__inner">
      <div class="header-utilities">
        <a class="header__logo" href="/admin">
          FashionablyLate
        </a>
        <nav>
          <ul class="header-nav">
            @if (Auth::check())
            <li class="header-nav__item">
              <form class="form" action="/logout" method="post">
                @csrf
                <button class="header-nav__button">ログアウト</button>
              </form>
            </li>
            @endif
          </ul>
        </nav>
      </div>
    </div>
  </header>

<main>
<div class="todo__content">
  <form class="create-form">
    <div class="create-form__item">
      <input class="create-form__item-input" type="text" name="content">
    </div>
    <div class="create-form__button">
      <button class="create-form__button-submit" type="submit">作成</button>
    </div>
  </form>
  <div class="todo-table">
    <table class="todo-table__inner">
      <tr class="todo-table__row">
        <th class="todo-table__header">Todo</th>
      </tr>
      <tr class="todo-table__row">
        <td class="todo-table__item">
          <form class="update-form">
            <div class="update-form__item">
              <input class="update-form__item-input" type="text" name="content" value="test">
            </div>
            <div class="update-form__button">
              <button class="update-form__button-submit" type="submit">更新</button>
            </div>
          </form>
        </td>
        <td class="todo-table__item">
          <form class="delete-form">
            <div class="delete-form__button">
              <button class="delete-form__button-submit" type="submit">削除</button>
            </div>
          </form>
        </td>
      </tr>
      <tr class="todo-table__row">
        <td class="todo-table__item">
          <form class="update-form">
            <div class="update-form__item">
              <input class="update-form__item-input" type="text" name="content" value="test2">
            </div>
            <div class="update-form__button">
              <button class="update-form__button-submit" type="submit">更新</button>
            </div>
          </form>
        </td>
        <td class="todo-table__item">
          <form class="delete-form">
            <div class="delete-form__button">
              <button class="delete-form__button-submit" type="submit">削除</button>
            </div>
          </form>
        </td>
      </tr>
    </table>
  </div>
</div>
</main>
</body>

</html>
-->
