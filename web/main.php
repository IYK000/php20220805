<?php
// 外部ファイル取込み
	require_once(dirname(__FILE__) . '/../common/config.php');
	require_once(dirname(__FILE__) . '/../common/SessionCheck.php');
	require_once(dirname(__FILE__) . '/../class_db/MainDb.php');

	try {
		$Db = new MainDb();
		
		// 物件情報取得
		$PropertyInfomation = $Db->getPropertyInformation($_SESSION['user_id'], $_SESSION['session']);
		// 会員情報取得
		$MemberInformation = $Db->getMemberInformation($_SESSION['user_id'], $_SESSION['session']);
		//　メールサービス情報取得
        $MailserviceList =$Db->getMailserviceList($_SESSION['user_id'], $_SESSION['session']);

	} catch (PDOException $e) {
			$Msg = 'DB接続に失敗しました。<br>('.$e->getMessage().')';
	}

	// // debug
	// echo '<pre>';
	// echo var_dump($MailserviceList);
	// echo '</pre>';

?>
<?php require_once('view/top.php') ?>
      <link rel="stylesheet" type="text/css" href="style/main.css">
      <title>ご利用状況</title>
    </head>
<body>

<div id="wrap">
    <?php require_once('view/header.php') ?>

    <div>
        <a target="_blank" href="https://www.yahoo.co.jp/">
        <img src="img/main-banner.png" width="100%" height="100px" border="0"></a>
    </div>
    <div id="content" class="fx">
        <div id="sidenav">
            <?php require_once('view/main-side-nav.php') ?>
        </div>

        <div id="article">
            <div class="fx fx-f-m fx-jc-sb">
                <div class="fx fx-f-m">
                    <div class="f-b fs-b p-r-1r">ご利用状況</div>
                    <div class="fs-b">お客様の現在のサービス利用状況です。</div>
                </div>
                <div><a class="lk f-l" href="#"><span>ログイン画面へ</span></a></div>

            </div>

            <hr>

            <?php require_once('view/main-container.php') ?>
        </div>


    </div>
</div>
<?php require_once('view/footer.php') ?>

<script>
<?php require_once('lib/gotoTop.js') ?>
</script>