	<?php require_once('view/top.php') ?>
      <link rel="stylesheet" type="text/css" href="style/index.css">
      <title>会員情報ログイン</title>
    </head>
<body>
   <div id="wrap">
        <?php require_once('view/header.php') ?>

        <div id="main">
            <div>
                <div>会員情報ログイン</div>
                <div></div>
            </div>

            <div>
                お客様の会員IDとパスワードを入力してログインしてください。
            </div>

            <div>
                <table border="2">
            <form action="login.php" method="POST">
                    <tr>
                        <td>会員ID</td>
                        <td><input type="text" name="MemberId" placeholder="会員ID"><span>[半角]</span></td>
                    </tr>
                    <tr>
                        <td>会員パスワード</td>
                        <td><input type="password" name="LoginPassword" placeholder="会員パスワード"><span>[半角]</span></td>
                    </tr>
                </table>
            </div>

            <div>
                <div><input type="checkbox" id="save-id"><label class="save-id-label" for="save-id">会員IDを保持する場合はチェックして下さい。（次回ログイン時に会員IDが自動で表示されます。）</label></div>
                <div>会員IDを忘れた方はこちら <a>会員IDの再発行</a></div>
                <div>会員パスワードを忘れた方はこちら <a>会員パスワードの再発行</a></div>
            </div>

            <div class="submit">
                <input type="submit" value="ログイン">
            </div>

            <?php
                // ID/PW判断

            ?>
        </form>
        </div>

        <div>
            <div>安心してサイトをご利用いただくために</div>
            <div>
                安心してサイトをご利用いただくために、<span>パスワードは定期的に変更すること</span>をおすすめします。

                <div>
                    <h3>パスワードを変更するときの注意点</h3>
                    <ul>
                        <li>自分や家族の名前、誕生日などの個人情報を基にした単語は使用しない</li>
                        <li>日本語、英語に限らず、辞書に載っている単語は使用しない</li>
                        <li>アルファベットや数字のみでのパスワードは使用しない</li>
                        <li>他サービスで利用しているパスワードは使用しない</li>
                        <li>過去に使ったことがあるパスワードは使用しない</li>
                    </ul>
                </div>

            </div>
        </div>

<?php require_once('view/footer.php') ?>

<script>

</script>

