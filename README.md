# 課題10 -RDB-

## ①課題内容（どんな作品か）
- （内容自体は前回と同様）
- 日報管理できるシステムを作成しました。
- テナント管理、ユーザ管理、日報管理機能を備え、それぞれ登録・参照・更新・削除が可能です。
- ユーザには以下の3種類が存在します。
    - システム管理者：システム全体の維持・管理をする人。全機能が利用可能。
    - ユーザ管理者：自テナント内の運営をする人。ユーザ管理、日報管理が利用可能。
    - 一般ユーザ：テナントに所属する管理者ではない人。日報管理が利用可能。
- ログインしたユーザによって、ログイン後のメニュー画面で参照可能な機能が自動で変更されます。
- ユーザ管理機能
    - システム管理者は既存に登録されているテナントから所属先を選択してユーザ追加できる。
    - システム管理者は全ユーザの一覧を参照でき、更新・削除ができる。
    - ユーザ管理者は自テナントのユーザを追加できる。テナントは自動指定される。
    - ユーザ管理者は自テナントのユーザの一覧を参照でき、更新・削除ができる。

## ②工夫した点・こだわった点
- 可能な部分はMVCモデルを意識してプログラムを再作成しました。
- UI部分は前回は素のBootstrapで独自に作っていましたが、今回はBootstrapテンプレートを使用してみました。
- 必要なパーツをコピペするだけで見た目が整い、慣れればフロントエンド側の開発工数を大幅に削減できそうな印象でした。

## ③難しかった点・次回トライしたいこと(又は機能)
- ヘッダやサイドバーなどのHTMLの共通部分を何度も書いているのでまとめて削減したい。
- Laravelなどのフレームワークに期待。

## ④質問・疑問・感想、シェアしたいこと等なんでも
- [テンプレート] 
  1. https://themeselection.com/item/sneat-free-bootstrap-html-admin-template/