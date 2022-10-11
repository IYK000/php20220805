<?php
	// 外部ファイル取込み
	require_once(dirname(__FILE__) . '/config.php');
	require_once(dirname(__FILE__) . '/../class_db/SessionCheckDb.php');

	// セッション開始
	session_name('nttms-member-support');
	session_start();
	session_regenerate_id(TRUE);

	// session確認用クラス生成
	$Db = new SessionCheckDb();

	// session有無
	if( isset($_SESSION['session']) ){
		if($Db->isSession( $_SESSION['session'] )){
			// 新しいセッション値用ハッシュ値を設定
			$_SESSION['session'] = $Db->setSession( $_SESSION['session'] );
		} else {
			// ログイン画面に遷移
			header('Location: ./index.php');
		}
	} else {
		// ログイン画面に遷移
		header('Location: ./index.php');
	}

	// // debug
	// echo '<pre>';
	// echo var_dump( $_SESSION['session'] );
	// echo '</pre>';
?>