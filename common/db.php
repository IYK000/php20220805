<?php
	// 定数
	define("DB_URL", "postgres://vqiytyzspyznoj:2eb6bfdc87af15f0dcd898ac87e91dc6707e5ba8577c5587c218a522e9bb94da@ec2-3-220-207-90.compute-1.amazonaws.com:5432/dbigepq68h23ic");

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
