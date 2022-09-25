<?php
/*
// 外部ファイル取込み
require_once(dirname(__FILE__) . '/../common/db.php');

// クラス
class MainDb extends db
{
	public function getMemberInformation($MemberId){
		// SQL文
		$sql = 'SELECT MemberId__c, Name, FirstName, LastName, hurigana__c, MailAddress__c FROM salesforce.account WHERE MemberId__c=:MemberId;';
		$stmt = $this->pdo->prepare($sql);

		// 値をバインド
		$stmt->bindValue(':MemberId', $MemberId);

		// SQL実行
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}
*/
?>