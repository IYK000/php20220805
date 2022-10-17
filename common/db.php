<?php
	// 定数
	define("DB_URL", "postgres://zfnnaktxnmjifd:a6847fa4cef27c84f494a99b9bab46c08028c17c81524b288c918219cd54e12c@ec2-18-207-37-30.compute-1.amazonaws.com:5432/de201gj49ath09");

	class Db
	{
		protected $pdo;	// PDOクラスインスタンス

		// コンストラクタ
		function __construct() 
		{
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
