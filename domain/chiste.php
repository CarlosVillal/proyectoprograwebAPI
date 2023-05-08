<?php 
class Chiste{

	private $chisteid;
	private $chistetexto;
	
    

	public function __construct($chisteid, $chistetexto){
		$this->chisteid = $chisteid;
		$this->chistetexto = $chistetexto;

	} 

    function getChisteid(){
        return $this->chisteid;
    }

    function setChisteid($chisteid){
        $this->chisteid = $chisteid;
    }


	function getchistetexto(){
        return $this->chistetexto;
    }

    function setchistetexto($chistetexto){
        $this->chistetexto = $chistetexto;
    }


}