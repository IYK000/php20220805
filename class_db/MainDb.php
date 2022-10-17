<?php
// 外部ファイル取込み
require_once(dirname(__FILE__) . '/../common/db.php');

// クラス
class MainDb extends db
{
	/****************************************/
	/* [argument]							*/
	/*	String $MemberID:ログインID 		*/
	/*	String $session:SessionID 			*/
	/* [eturn value] 						*/
	/*	配列 :								*/
	/*		成功時：物件名と部屋名を返す	*/
	/****************************************/
	public function getPropertyInformation($MemberID, $session){
		// SQL文
		$sql = '
			SELECT 
				salesforce.building__c.Name AS building,
				salesforce.Room__c.Name AS room
			FROM
				salesforce.RentalAgreement__c 
			LEFT JOIN 
				salesforce.Room__c
			ON 
				salesforce.RentalAgreement__c.Room__c=salesforce.Room__c.Sfid 
			LEFT JOIN 
				salesforce.building__c
			ON 
				salesforce.Room__c.building__c=salesforce.building__c.Sfid 
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


	/****************************************/
	/* [argument]							*/
	/*	String $MemberID:ログインID 		*/
	/* [eturn value] 						*/
	/*	配列 :								*/
	/*		成功時：賃貸契約情報を返す		*/
	/****************************************/
	public function getMemberInformation($MemberID, $session){
		// SQL文
		$sql = '
			SELECT 
				MemberID__c, FirstName, LastName, LastNameHurigana__c, FirstNameHurigana__c, PersonEmail
			FROM
				salesforce.RentalAgreement__c 
			LEFT JOIN 
				salesforce.Account
			ON 
				salesforce.RentalAgreement__c.Account__c=salesforce.Account.Sfid 

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


	/********************************************/
	/* [argument]								*/
	/*	String $MemberID:ログインID 			*/
	/*	String $session:SessionID 				*/
	/* [eturn value] 							*/
	/*	配列 :									*/
	/*		成功時：メールサービス情報を返す	*/
	/********************************************/
	public function getMailserviceList($MemberID, $session){
		// SQL文
		$sql = '
			SELECT 
				salesforce.IndividualOptionContract__c.Name,
				salesforce.IndividualOptionContract__c.email_address__c,
				salesforce.IndividualOptionContract__c.SMTP_server__c,
				salesforce.IndividualOptionContract__c.POP_server__c
			FROM
				salesforce.IndividualOptionContract__c 
			LEFT JOIN 
				salesforce.RentalAgreement__c
			ON 
				salesforce.IndividualOptionContract__c.RentalAgreement__c=salesforce.RentalAgreement__c.Sfid 
			WHERE 
				salesforce.RentalAgreement__c.MemberID__c=:MemberID AND 
				salesforce.RentalAgreement__c.Session__c=:session;';
		
		$stmt = $this->pdo->prepare($sql);

		// 値をバインド
		$stmt->bindValue(':MemberID', $MemberID);
		$stmt->bindValue(':session', $session);

		// SQL実行
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
}
?>