<?php 

namespace Model;

Trait PocetniModel
{
	use Baza;

	protected $limit 		= 10;
	protected $offset 		= 0;
	protected $order_type 	= "desc";
	protected $order_column = "id";
	public $errors 		= [];

	public function nadjiSve()
	{
		$query = "select * from $this->tabela order by $this->order_column $this->order_type limit $this->limit offset $this->offset";

		return $this->query($query);
	}

	public function where($data, $data_not = [])
	{
		$keys = array_keys($data);
		$keys_not = array_keys($data_not);
		$query = "select * from $this->tabela where ";

		foreach ($keys as $key) {
			$query .= $key . " = :". $key . " && ";
		}

		foreach ($keys_not as $key) {
			$query .= $key . " != :". $key . " && ";
		}
		
		$query = trim($query," && ");

		$query .= " order by $this->order_column $this->order_type limit $this->limit offset $this->offset";
		$data = array_merge($data, $data_not);

		return $this->query($query, $data);
	}

	public function prvi($data, $data_not = [])
	{
		$keys = array_keys($data);
		$keys_not = array_keys($data_not);
		$query = "select * from $this->tabela where ";

		foreach ($keys as $key) {
			$query .= $key . " = :". $key . " && ";
		}

		foreach ($keys_not as $key) {
			$query .= $key . " != :". $key . " && ";
		}
		
		$query = trim($query," && ");

		$query .= " limit $this->limit offset $this->offset";
		$data = array_merge($data, $data_not);
		
		$result = $this->query($query, $data);
		if($result)
			return $result[0];

		return false;
	}

	public function umetni($data)
	{
		$keys = array_keys($data);

		$query = "insert into $this->tabela (".implode(",", $keys).") values (:".implode(",:", $keys).")";
		$this->query($query, $data);

		return false;
	}

	public function azuriraj($id, $data, $id_kolona = 'id')
	{
		$keys = array_keys($data);
		$query = "update $this->tabela set ";

		foreach ($keys as $key) {
			$query .= $key . " = :". $key . ", ";
		}

		$query = trim($query,", ");

		$query .= " where $id_kolona = :$id_kolona ";

		$data[$id_kolona] = $id;

		$this->query($query, $data);
		return false;
	}

	public function izbrisi($id, $id_kolona = 'id')
	{

		$data[$id_kolona] = $id;
		$query = "delete from $this->tabela where $id_kolona = :$id_kolona ";
		$this->query($query, $data);

		return false;

	}
}
