<?php 

class DB{
	public $a = "localhost";
	public $b = "root";
	public $c = "";
	public $d = "pbo";
	public $conn;
	public $join;
	public function __construct()
	{
		$this->conn=mysqli_connect($this->a,$this->b,$this->c,$this->d);
		if (mysqli_connect_errno()){
			echo"Koneksi database gagal : " . mysqli_connect_errno();
		}
	}
}
class form extends DB
{

	public $name;
	public $tanggal;
	public $type;
	public $harga;
	public $days;
	public $query;
	public $state;


	public function post(){
		$this->query = "INSERT INTO hotel (name, tanggal, type_id, day) VALUES ('$this->name', '$this->tanggal', '$this->type', '$this->days')";
		$this->state = mysqli_query($this->conn, $this->query);
		if ($this->state == TRUE) {
			$alert = "berhasil";
			echo "berhasil";
		}else{
			echo "gagal";
		}
	}
	public function select_type(){
		$result = mysqli_query($this->conn, "SELECT * FROM type");
		
		while($arr = mysqli_fetch_array($result)){
			$bangker[] = $arr;
		}
		return $bangker;
		
	}
	public function update_failed(){
		
	}
	public function update($where){
		$result = mysqli_query($this->conn, "UPDATE type SET harga= $this->harga WHERE id = $where");
		if ($result == TRUE) {
			echo "berhasil";
		}else{
			echo "gagal";
		}
	}
}
class views extends DB{
	public $conn;
	public $arr;
	public $string;
	public $data_name = [];
	public $count = 0;
	public function view(){
		$this->string = "SELECT * FROM hotel INNER JOIN type ON hotel.type_id = type.id";
		$this->arr = mysqli_query($this->conn, $this->string);
		while ($data = mysqli_fetch_array($this->arr)) {
			$alldata[] = $data;
		}

		return $alldata;
	}
}

?>
