<?php require_once('view/top.php') ?>
      <title>会員IDの追加</title>
      <link rel="stylesheet" type="text/css" href="style/AdditionalMember.css">
    </head>
<body>

<div id="wrap">
    <?php require_once('view/header.php') ?>
    <div class="index-head m-bt-1r">
        <div></div>
        <div class="t-l">
            <div class="fx fx-f-m">
              <h3 class="p-r-1r">会員IDの追加</h3>
              <h4>会員情報の入力</h4>
            </div>
            <hr class="m-d">
            <div class="fx fx-f-m link-tree f-l">
              <div><a class="f-l" href="/main.php"><span>トップページへ</span></a></div>
              <div>会員情報の入力</div>
            </div>

            <?php require_once('view/AddMember-Container.php') ?>
        </div>
    </div>


</div>


<?php require_once('view/footer.php') ?>

  <script>

    function submit(){
      const userPw = document.getElementById('userPw');
      const userPwV = userPw.value;
      const userPwC = document.getElementById('userPwC');

      const mailAcc = document.getElementById('mailAcc');
      const mailAccV = mailAcc.value;

      // console.log(userPwV);

      // user Pw Pattern
      var pattern = /^(?=.*[a-zA-Z])((?=.*\d)|(?=.*[!\"#$%&\=\-@\/+*?])).{8,16}$/gi;

      // mailID Pattern
      // var pattern2 = /^([^0-9A-Z\W_]{1})+([a-z0-9_.-]).{3,23}$/g;
      var pattern2 = /^([^0-9A-Z\W_])+([a-z0-9_.-]){4,}$/g;

      console.log(
        mailAccV.match(pattern2)
      );
      /*
      if( userPwV.match(pattern) == null ){
        alert("会員パスワードの入力が正しくありません");
        // userPw.value = "";
      }
      if( userPw.value != userPwC.value ){
        console.log( userPw.value + " - " + userPwC.value );
        alert("会員パスワードとパスワード確認が合致しません");
        userPw.value = "";
        userPwC.value = "";
      }
      */

    }

    let button = document.getElementById('submit');
    button.addEventListener('click', submit);
  </script>