<?php 
require_once __DIR__.'/User.php';
class CartaCredito extends User{
    protected $number;
    protected $name;
    protected $surname;
    protected $dateScad;

    function __construct($_number, $_name, $_surname,$_dateScad)
    {
        $this->number = $_number;
        $this->name = $_name;
        $this->surname = $_surname;
        $this->dateScad = $_dateScad;
    }


    public function setNumber($_number){
        $this->number = $_number;
    }
    public function getNumber(){
        return $this->number;
    }
    public function setName($_name){
        $this->name = $_name;
    }
    public function getName(){
        return $this->name;
    }
    public function setSurname($_surname){
        $this->surname = $_surname;
    }
    public function getSurname(){
        return $this->surname;
    }
    public function setDate($_dateScad){
        if(strtotime(date('m/y')) > strtotime($_dateScad)){
            throw new Exception('La carta inserita è scaduta');
        }else{
            $this->dateScad = $_dateScad;
        }
    }
    public function getDate(){
        return $this->dateScad;
    }


    
}
?>