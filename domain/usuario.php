<?php 
class Usuario{

	private $usuarioid;
	private $usuariocedula;
	private $usuarionombre;
	private $usuarioapellido1;
    private $usuarioapellido2;
    private $usuarioedad;
    private $usuariocorreo;
    

	public function __construct($usuarioid, $usuariocedula, $usuarionombre, 
    $usuarioapellido1,$usuarioapellido2, $usuarioedad, $usuariocorreo){
		$this->usuarioid = $usuarioid;
		$this->usuariocedula = $usuariocedula;
		$this->usuarionombre = $usuarionombre;
		$this->usuarioapellido1 = $usuarioapellido1;
        $this->usuarioapellido2 = $usuarioapellido2;
        $this->usuarioedad = $usuarioedad;
        $this->usuariocorreo = $usuariocorreo;
	} 

    function getusuarioedad(){
        return $this->usuarioedad;
    }

    function setusuarioedad($usuarioedad){
        $this->usuarioedad = $usuarioedad;
    }


	function getusuariocorreo(){
        return $this->usuariocorreo;
    }

    function setusuariocorreo($usuariocorreo){
        $this->usuariocorreo = $usuariocorreo;
    }

	function getusuarioapellido2(){
        return $this->usuarioapellido2;
    }

    function setusuarioapellido2($usuarioapellido2){
        $this->usuarioapellido2 = $usuarioapellido2;
    }

	function getusuarioapellido1(){
        return $this->usuarioapellido1;
    }

    function setusuarioapellido1($usuarioapellido1){
        $this->usuarioapellido1 = $usuarioapellido1;
    }

	function getusuarionombre(){
        return $this->usuarionombre;
    }

    function setusuarionombre($usuarionombre){
        $this->usuarionombre = $usuarionombre;
    }

	function getusuarioid(){
        return $this->usuarioid;
    }

    function setusuarioid($usuarioid){
        $this->usuarioid = $usuarioid;
    }

	function getusuariocedula(){
        return $this->usuariocedula;
    }

    function setusuariocedula($usuariocedula){
        $this->usuariocedula = $usuariocedula;
    }
    



}