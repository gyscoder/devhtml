<?php 
class Pessoa{
	//public  	<- qualquer pessoa pode acessar
	//private 	<- só pode ser acessada dentro dessa classe
	//protected <- só pode ser acessada pela classe e por outras classes que herdam características dela
	protected $nome;
	const ESPECIE = "Humano";

	//__construct serve para definir um nome diretamente na chamada

	public function __construct($tmpNome){
		$this->nome = $tmpNome;
	}

	public function setNome($novoNome){ //seta um nome para a variavel privada
		$this->nome = $novoNome;
	}

	public function getNome(){ //retorna a variavel privada como pública
		return $this->nome;
	}

}
?>