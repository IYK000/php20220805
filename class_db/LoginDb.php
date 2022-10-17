<?php
// 外部ファイル取込み
require_once(dirname(__FILE__) . '/../common/db.php');

// クラス
class loginDb extends db
{
	/************************************************/
	/* [argument]									*/
	/*	String $MemberID:ログインID 				*/
	/*	String $MemberPASS:ログインパスワード	*/
	/* [eturn value] 								*/
	/*	String return:								*/
	/*		成功時は自動生成されたセッション値　	*/
	/*		1-1：ID・PWが合わない				　	*/
	/*		1-2：セッション値の保存失敗　			*/
	/************************************************/
	public function loginCheck($MemberID, $MemberPASS){
		// SQL文
		$sql = 'SELECT MemberID__c, MemberPASS__c FROM salesforce.RentalAgreement__c WHERE MemberID__c=:MemberID AND MemberPASS__c=:MemberPASS;';
		$stmt = $this->pdo->prepare($sql);

		// 値をバインド
		$stmt->bindValue(':MemberID', $MemberID);
		$stmt->bindValue(':MemberPASS',  hash('sha256', $MemberPASS));

		// SQL実行
		$stmt->execute();

		// 対象があればセッションを保存
		$return = array();

		if( $stmt->fetch(PDO::FETCH_ASSOC) ){
			// ランダムセッション値生成
			$session = substr(str_shuffle(str_repeat('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', 10)), 0, 16);
			// セッション値を保存
			$sql = 'UPDATE salesforce.RentalAgreement__c SET Session__c=:session WHERE MemberID__c=:MemberID';
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindValue(':MemberID', $MemberID);
			$stmt->bindValue(':session', $session);
			$update_return = $stmt->execute();

			// 保存成功出来なかった場合
			if( $update_return == FALSE){
				$return['error'] = '2-2';
				if(DEBUG == 99){
					$return['error'] .= 'セッションの保存に失敗しました。';
				}
			} else {
				$return = array(
					'user_id' => $MemberID,
					'session' => $session
				);
			}
		} else {
			$return['error'] = '2-1';
			if(DEBUG == 99){
				$return['error'] .= 'ログインとPWが一致しませんでした';
			}
		}

		return $return;
	}
}
?>