<?php
// 外部ファイル取込み
require_once(dirname(__FILE__) . '/../common/db.php');

// クラス
class ChangeMemInfoDb extends db
{
	/************************************/
	/* [argument]						*/
	/*	String $MemberID:ログインID 	*/
	/*	String $session:SessionID 		*/
	/* [eturn value] 					*/
	/*	配列 :							*/
	/*		成功時：会員IDと氏名を返す	*/
	/************************************/
	public function getMemberInformation($MemberID, $session){
		// SQL文
		$sql = '
		SELECT 
			MemberID__c, FirstName, LastName, salesforce.RentalAgreement__c.SFID
		FROM
			salesforce.RentalAgreement__c 
		LEFT JOIN 
			salesforce.Account
		ON 
			salesforce.RentalAgreement__c.Account__c=salesforce.Account.SFID 
		WHERE 
			MemberID__c=:MemberID AND 
			Session__c=:session;';
		
		$stmt = $this->pdo->prepare($sql);

		// 値をバインド
		$stmt->bindValue(':MemberID', $MemberID);
		$stmt->bindValue(':session', $session);

		// SQL実行
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}


	/************************************/
	/* [argument]						*/
	/*	String $MemberID:ログインID 	*/
	/*	String $session:SessionID 		*/
	/* [eturn value] 					*/
	/*	配列 :							*/
	/*		成功時：会員IDと氏名を返す	*/
	/************************************/
	public function getMembeChilledrInformation($SFID){
		// SQL文
		$sql = '
		SELECT 
			MemberID__c, FirstName, LastName
		FROM
			salesforce.RentalAgreement__c 
		LEFT JOIN 
			salesforce.Account
		ON 
			salesforce.RentalAgreement__c.Account__c=salesforce.Account.SFID 
		WHERE 
			salesforce.RentalAgreement__c.SFID=:SFID;';
		
		$stmt = $this->pdo->prepare($sql);

		// 値をバインド
		$stmt->bindValue(':SFID', $SFID);

		// SQL実行
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>