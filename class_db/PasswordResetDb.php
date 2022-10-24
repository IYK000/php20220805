<?php
// 外部ファイル取込み
require_once(dirname(__FILE__) . '/../common/db.php');

// クラス
class PasswordResetDb extends db
{
	// リセット可能かチェック
	public function isMailAddress($PersonEmail){
		// SQL文
		$sql = '
			SELECT 
				PersonEmail 
			FROM 
				salesforce.RentalAgreement__c
			LEFT JOIN 
				salesforce.Account
			ON 
				salesforce.RentalAgreement__c.Account__c=salesforce.Account.Sfid
			WHERE 
				PersonEmail=:PersonEmail;';

		$stmt = $this->pdo->prepare($sql);

		// 値をバインド
		$stmt->bindValue(':PersonEmail', $PersonEmail);

		// SQL実行
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	// PWリセット
	public function setResetUrl($PersonEmail){
		// SQL文
		$sql = '
			UPDATE 
				salesforce.RentalAgreement__c 
			SET 
				PwResetUrl__c=:PwResetUrl, 
				PwResetDeadline__c=:PwResetDeadline 
			FROM 
				salesforce.Account
			WHERE 
				salesforce.RentalAgreement__c.Account__c=salesforce.Account.Sfid AND
				PersonEmail=:PersonEmail;';
		$stmt = $this->pdo->prepare($sql);

		// 値をバインド
		$stmt->bindValue(":PwResetUrl", substr(str_shuffle(str_repeat('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', 10)), 0, 16));
		$stmt->bindValue(":PwResetDeadline", date('Y-m-d', strtotime('+1 day')));
		$stmt->bindValue(':PersonEmail', $PersonEmail);

		// SQL実行
		return $stmt->execute();
	}
}
?>