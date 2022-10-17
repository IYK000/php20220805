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
	public function setResetUrl($MailAddress){
		// SQL文
		$sql = 'UPDATE salesforce.account SET PwResetUrl__c=:PwResetUrl, PwResetDeadline__c=:PwResetDeadline WHERE MailAddress__c=:MailAddress;';
		$stmt = $this->pdo->prepare($sql);

		// 値をバインド
		$stmt->bindValue(":PwResetUrl", substr(str_shuffle(str_repeat('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', 10)), 0, 16));
		$stmt->bindValue(":PwResetDeadline", date('Y-m-d', strtotime('+1 day')));
		$stmt->bindValue(':MailAddress', $MailAddress);

		// SQL実行
		return $stmt->execute();
	}
}
?>