<?php
// 外部ファイル取込み
require_once(dirname(__FILE__) . '/../common/db.php');

// クラス
class SessionCheckDb extends db
{
	/****************************************************/
	/* [argument]										*/
	/*	String $session:確認セッションハッシュ値 		*/
	/* [eturn value] 									*/
	/*	配列 :											*/
	/*		成功時：取引先情報を返す					*/
	/****************************************************/
	public function isSession($session){
		// SQL文
		$sql = 'SELECT count(Session__c ) FROM salesforce.account WHERE Session__c=:session;';
		$stmt = $this->pdo->prepare($sql);

		// 値をバインド
		$stmt->bindValue(":session", $session);

		// SQL実行
		$stmt->execute();
		$return = $stmt->fetch(PDO::FETCH_ASSOC);
		// SQL実行
		return $return['count'];
	}


	/********************************************************/
	/* [argument]											*/
	/*	String $session_old:使用中のセッションハッシュ値	*/
	/* [eturn value] 										*/
	/*	配列 :												*/
	/*		成功時：取引先情報を返す						*/
	/********************************************************/
	public function setSession($session_old){
		// ランダムセッション値生成
		$session_new = substr(str_shuffle(str_repeat('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', 10)), 0, 16);
		// セッション値を保存
		$sql = 'UPDATE salesforce.account SET Session__c=:session_new WHERE Session__c=:session_old';
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindValue(':session_new', $session_new);
		$stmt->bindValue(':session_old', $session_old);

		// SQL実行
		$stmt->execute();

		return $session_new;
	}
}
?>