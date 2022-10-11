<?php
// 外部ファイル取込み
require_once(dirname(__FILE__) . '/../common/db.php');

// クラス
class loginDb extends db
{
	/************************************************/
	/* [argument]									*/
	/*	String $MemberId:ログインID 				*/
	/*	String $LoginPassword:ログインパスワード	*/
	/* [eturn value] 								*/
	/*	String return:								*/
	/*		成功時は自動生成されたセッション値　	*/
	/*		1-1：ID・PWが合わない				　	*/
	/*		1-2：セッション値の保存失敗　			*/
	/************************************************/
	public function loginCheck($MemberId, $LoginPassword){
		// SQL文
		$sql = 'SELECT MemberId__c FROM salesforce.account WHERE MemberId__c=:MemberId AND LoginPassword__c=:LoginPassword;';
		$stmt = $this->pdo->prepare($sql);

		// 値をバインド
		$stmt->bindValue(':MemberId', $MemberId);
		$stmt->bindValue(':LoginPassword',  hash('sha256', $LoginPassword));

		// SQL実行
		$stmt->execute();

		// 対象があればセッションを保存
		$return = '';
		if( $stmt->fetch(PDO::FETCH_ASSOC) ){
			// ランダムセッション値生成
			$session = substr(str_shuffle(str_repeat('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', 10)), 0, 16);
			// セッション値を保存
			$sql = 'UPDATE salesforce.account SET Session__c=:session WHERE MemberId__c=:MemberId';
			$stmt = $this->pdo->prepare($sql);
			$stmt->bindValue(':MemberId', $MemberId);
			$stmt->bindValue(':session', $session);
			$update_return = $stmt->execute();

			// 保存成功出来なかった場合
			if( $update_return == FALSE){
				$return = '2-2';
				if(DEBUG == 99){
					$return .= 'セッションの保存に失敗しました。';
				}
			} else {
				$return = array(
					'user_id' => $MemberId,
					'session' => $session
				);

				$return = $r;
			}
		} else {
			$return = '2-1';
			if(DEBUG == 99){
				$return .= 'ログインとPWが一致しませんでした';
			}
		}

		return $return;
	}
}
?>