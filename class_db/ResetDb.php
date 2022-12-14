<?php
// 外部ファイル取込み
require_once(dirname(__FILE__) . '/../common/db.php');

// クラス
class ResetDb extends db
{
	// リセット可能かチェック
	public function isUrl($Url){
		// SQL文
		$sql = 'SELECT MemberId__c FROM salesforce.RentalAgreement__c WHERE PwResetUrl__c=:PwResetUrl AND :PwResetDeadline<=PwResetDeadline__c;';
		$stmt = $this->pdo->prepare($sql);

		// 値をバインド
		$stmt->bindValue(':PwResetUrl', $Url);
		$stmt->bindValue(':PwResetDeadline', date("Y-m-d"));

		// SQL実行
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}

	// PWリセット
	public function updatePassword($MemberId, $MemberPASS){
		// SQL文
		$sql = 'UPDATE salesforce.RentalAgreement__c SET MemberPASS__c=:MemberPASS, PwResetUrl__c=:PwResetUrl, PwResetDeadline__c=:PwResetDeadline WHERE MemberID__c=:MemberId;';
		$stmt = $this->pdo->prepare($sql);

		// 値をバインド
		$stmt->bindValue(':MemberId', $MemberId);
		$stmt->bindValue(':MemberPASS', hash('sha256', $MemberPASS));
		$stmt->bindValue(":PwResetUrl", null, PDO::PARAM_NULL);
		$stmt->bindValue(":PwResetDeadline", null, PDO::PARAM_NULL);

		// SQL実行
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}
?>