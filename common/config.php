<?php
	// const DEBUG = 0 // デバッグ無し
	// const DEBUG = 1 // エラー値表示
	// const DEBUG = 99 // 開発用 
	const DEBUG = 99;

	// セッション設定
	session_set_cookie_params(
		time()+60*60,	// クッキーの生存期間(lifetime)
		'/',			// 情報が保存されている場所のパス
		'',				// クッキーのドメイン
		true,			// クロスドメイン間で送信されるクッキーを制御します。
		true			// クッキーは HTTP を通してのみアクセス可能となります。
	);
?>