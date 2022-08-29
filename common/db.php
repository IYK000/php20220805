<?php
	// 定数
	define("DB_URL", "postgres://zzlpnqcuxuugfz:f81d23261a0d49fcc7dcd1e84d32643f8042b0693a21fe718156cf90e3d0bb42@ec2-18-208-55-135.compute-1.amazonaws.com:5432/d46tm6b9iumf7g");

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
