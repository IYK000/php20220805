<?php
	// 定数
	define("DB_URL", "postgres://qdklbbipcfznxe:63aa78d794a3a76816316a89750ce17c82c2fa566b9421318ca9f941936d4a3d@ec2-52-4-87-74.compute-1.amazonaws.com:5432/dfg4l71a9p8ql4");

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
