<?php
// 外部ファイル取込み
require_once(dirname(__FILE__) . '/config.php');

class Db
{
	protected $pdo;	// PDOクラスインスタンス

	// コンストラクタ
	function __construct() {
		$db = parse_url(DB_URL);

		$this->pdo = new PDO('pgsql:' . sprintf(
			'host=%s;port=%s;user=%s;password=%s;dbname=%s',
			$db['host'],
			$db['port'],
			$db['user'],
			$db['pass'],
			ltrim($db['path'], '/')
		));
    }
}
?>
