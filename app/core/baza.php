<?php 

namespace Model;

Trait Baza
{

	private function povezi()
	{
		$charset = 'utf8mb4';
		$options = [
			\PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
			\PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
			\PDO::ATTR_EMULATE_PREPARES   => false,
		];

		if (getenv('USE_DOCKER')) {
			$host = 'db';
			$db = 'projekat';
			$user = 'projekat';
			$pass = 'projekat';
		} else {
			$host = 'sql200.epizy.com';
			$db = 'epiz_31121671_db1';
			$user = 'epiz_31121671';
			$pass = '7XhEahxb5zgcPgN';
		}
		$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
		$con = new \PDO($dsn, $user, $pass, $options);
		return $con;
	}

	public function query($query, $data = [])
	{

		$kon = $this->povezi();
		$stm = $kon->prepare($query);

		$check = $stm->execute($data);
		if($check)
		{
			$rezultat = $stm->fetchAll(\PDO::FETCH_OBJ);
			if(is_array($rezultat) && count($rezultat))
			{
				return $rezultat;
			}
		}

		return false;
	}

	public function selektuj_red($query, $data = [])
	{

		$kon = $this->povezi();
		$stm = $kon->prepare($query);

		$check = $stm->execute($data);
		if($check)
		{
			$rezultat = $stm->fetchAll(\PDO::FETCH_OBJ);
			if(is_array($rezultat) && count($rezultat))
			{
				return $rezultat[0];
			}
		}

		return false;
	}
	
}


