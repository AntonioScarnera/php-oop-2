<?php
require_once __DIR__.'/User.php';
class UserPremium extends User{
    protected $sconto;

    public function setSconto($_sconto){
        $this->sconto = $_sconto;
    }
    public function getSconto(){
        return $this->sconto;
    }
} 
?>