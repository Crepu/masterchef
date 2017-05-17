<?php
/**
* Manejo de ingredientes
*/
class Ingredientes
{
	private $id, $nombre;

	function __construct($id)	
	{
		$this->id = $id;
		$url = "http://localhost:1337/ingrediente/";
		$url .= $id;
		$curl = curl_init();
		curl_setopt_array($curl, array(
    		CURLOPT_RETURNTRANSFER => 1,
    		CURLOPT_URL => $url
		));
		if(!curl_exec($curl))
		{
    		die('Error: "' . curl_error($curl) . '" - Code: ' . curl_errno($curl));
		}
		$result = curl_exec($curl);
		$arr = json_decode($result,true);
		$this->nombre = $arr["nombre"];
	}

	function crt($id, $nombre)
	{
		$this->id = $id;
		$this->nombre = $nombre;
	}

	function prnt()
	{
		echo $this->id.": ".$this->nombre."</br>";
	}

	function chgName($nombre)
	{
		$this->nombre = $nombre;
	}

	function del()
	{

	}

	function add()
	{

	}

}

$ingrediente = new Ingredientes(1);
$ingrediente->prnt();


?>