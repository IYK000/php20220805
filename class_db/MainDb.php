<?php
// 外部ファイル取込み
require_once(dirname(__FILE__) . '/../common/db.php');

// クラス
class MainDb extends db
{
	/****************************************/
	/* [argument]							*/
	/*	String $MemberId:ログインID 		*/
	/* [eturn value] 						*/
	/*	配列 :								*/
	/*		成功時：取引先情報を返す		*/
	/****************************************/
	public function getMemberInformation($MemberId, $session){
		// // SQL文
		// //$sql = 'SELECT MemberId__c, Name, FirstName, LastName, hurigana__c, MailAddress__c FROM salesforce.account WHERE MemberId__c=:MemberId AND Session__c=:session;';
		// $sql = 'SELECT * FROM salesforce.account WHERE MemberId__c=:MemberId AND Session__c=:session;';
		
		// $stmt = $this->pdo->prepare($sql);

		// // 値をバインド
		// $stmt->bindValue(':MemberId', $MemberId);
		// $stmt->bindValue(':session', $session);

		// // SQL実行
		// $stmt->execute();
		// return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}
?>