<?php
// 外部ファイル取込み
require_once(dirname(__FILE__) . '/../common/db.php');

// クラス
class ResetDb extends db
{
	public function isUrl($url){
		// SQL文
		$sql = 'SELECT MemberId__c FROM salesforce.account WHERE PwResetUrl__c:PwResetUrl AND :PwResetDeadline<=PwResetDeadline__c;';
		$stmt = $this->pdo->prepare($sql);

		// 値をバインド
		$stmt->bindValue(':PwResetUrl', $url);
		$stmt->bindValue(':PwResetDeadline', date("Y-m-d"));

		// SQL実行
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}
?>