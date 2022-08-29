<?php
// 外部ファイル取込み
require_once(dirname(__FILE__) . '/../common/db.php');

// クラス
class PasswordResetDb extends db
{
	// リセット可能かチェック
	public function isMailAddress($MailAddress){
		// SQL文
		$sql = 'SELECT MemberId__c FROM salesforce.account WHERE MailAddress__c=:MailAddress;';
		$stmt = $this->pdo->prepare($sql);

		// 値をバインド
		$stmt->bindValue(':MailAddress', $MailAddress);

		// SQL実行
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	// PWリセット
	public function updatePassword($MemberId, $LoginPassword){
		// SQL文
		$sql = 'UPDATE salesforce.account SET LoginPassword__c=:LoginPassword, PwResetUrl__c=:PwResetUrl, PwResetDeadline__c=:PwResetDeadline WHERE MemberId__c=:MemberId;';
		$stmt = $this->pdo->prepare($sql);

		// 値をバインド
		$stmt->bindValue(':MemberId', $MemberId);
		$stmt->bindValue(':LoginPassword', hash('sha256', $LoginPassword));
		$stmt->bindValue(":PwResetUrl", null, PDO::PARAM_NULL);
		$stmt->bindValue(":PwResetDeadline", null, PDO::PARAM_NULL);

		// SQL実行
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}
?>