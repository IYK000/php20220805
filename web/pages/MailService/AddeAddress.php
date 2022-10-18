<?php
// 外部ファイル取込み
	require_once(dirname(__FILE__) . '/../../../common/config.php');
	require_once(dirname(__FILE__) . '/../../../common/SessionCheck.php');
	require_once(dirname(__FILE__) . '/../../../class_db/AddeAddressDb.php');

	try {
		$Db = new AddeAddressDb();
		
		// 会員情報取得
		$MemberName = $Db->getMemberName($_SESSION['user_id'], $_SESSION['session']);

    
		// 会員情報（子供）取得
		$MembeChildNameList = $Db->getMembeChildNameList($MemberInformation['sfid']);

	} catch (PDOException $e) {
    $Msg = 'エラー';
    if(DEBUG == 1){
      $Msg += '3-1：'; 
    } elseif(DEBUG == 99){
      $Msg += 'DB接続に失敗しました。('.$e->getMessage().')';
    }
	}

	// // debug
	// echo '<pre>';
	// echo var_dump($MemberInformation);
	// echo '</pre>';

?>
<?php require_once('../../view/top.php') ?>
      <title>メールアドレスの追加</title>
    </head>
<body>

<div id="wrap">
    <?php require_once('../../view/header.php') ?>
    <div class="index-head m-bt-1r">
        <div></div>
        <div class="t-l">
            <div class="fx fx-f-m">
              <h3 class="p-r-1r">メールアドレスの追加</h3>
              <h4>メールアドレス利用者の指定</h4>
            </div>
            <hr class="m-d">
            <div class="fx fx-f-m link-tree f-l">
              <div><a class="f-l" href="../../main.php"><span>トップページへ</span></a></div>
              <div>メールアドレス利用者の指定</div>
            </div>

            <?php require_once('../../view/S2-add-mail.php') ?>
        </div>
    </div>
</div>


<?php require_once('../../view/footer.php') ?>