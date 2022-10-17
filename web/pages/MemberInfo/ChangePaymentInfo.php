<?php require_once('../../view/top.php') ?>
      <title>支払い情報の変更</title>
    </head>
<body>

<div id="wrap">
  <?php require_once('../../view/header.php') ?>
      <div class="index-head m-bt-1r">
          <div></div>
          <div class="t-l">
              <div class="fx fx-f-m">
                <h3 class="p-r-1r">支払い情報の変更</h3>
                <h4>カード情報の入力</h4>
              </div>
              <hr class="m-d">
              <div class="fx fx-f-m link-tree f-l">
                <div><a class="f-l" href="../../main.php"><span>トップページへ</span></a></div>
                <div>カード情報の入力</div>
              </div>

            <?php require_once('../../view/ChangePayment-Infomation.php') ?>
        </div>
    </div>

</div>


<?php require_once('../../view/footer.php') ?>