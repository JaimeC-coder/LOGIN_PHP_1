<?php
include_once 'db.php';
class User extends DB{
    private $nombres;
    private $username;
    public function userExists($user,$pass){
        $md5pass=md5($pass);

         $query =$this->connect()->prepare('SELECT * FROM secciones WHERE username=:user AND password=:pass');
        $query->execute(['user'=> "$user", 'pass'=> "$md5pass"]);
        //echo $query->rowCount();
        if($query->rowCount()){
            return true;
        }else{
            return false;
        }
    }
    public function setUser($user){
        $query=$this->connect()->prepare('SELECT * FROM secciones WHERE username = :user');
        $query->execute(['user' => $user]);
        foreach($query as $currerntUser){
            $this->nombre = $currerntUser['nombre'];
            $this->username = $currerntUser['username'];
        }
    }
    public function getNombre(){
        return $this->nombre;
    }

}