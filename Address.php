<?php
class Address {
	
	public function get_address($cep){
	
	
		$cep = preg_replace("/[^0-9]/", "", $cep);
		$url = "http://viacep.com.br/ws/$cep/xml/"; // FALTA DA BARRA(/) NA URL PARA PASSAR PAREMTRO CEP
	
		$xml = simplexml_load_file($url);
		return $xml;
	}
	
}
?>