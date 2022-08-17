<?php
// 外部ファイル取込み
require_once(dirname(__FILE__) . '/../common/db.php');

// クラス
class loginDb extends db
{
	public function loginCheck($MemberId, $LoginPassword){
		// SQL文
		$sql = 'SELECT MemberId__c FROM salesforce.account WHERE MemberId__c=:MemberId AND LoginPassword__c=:LoginPassword;';
		$stmt = $this->pdo->prepare($sql);

		// 値をバインド
		$stmt->bindValue(':MemberId', $MemberId);
		$stmt->bindValue(':LoginPassword', $LoginPassword);

		// SQL実行
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}
?>