<?php
class User{

  public $id = 0;// public доступ откуда угодно
  protected $name ='User';// protected доступ из этого и производных (дочерных)классов
  private $mail;//private доступ только из этого класса

  public function __construct($name = false, $email = false){
    if ($name) $this->name = $name;
    if ($email) $this->mail = $email;
    $this->id =$this->getid();
  }

  public function getName(){
    return $this->name;
  }

  public function getEmail(){
    return $this->mail;
  }

  public function setName($name){
    $this->name = $name;
  }

  public function setEmail($email){
    $this->mail = $email;
  }

  private function getid(){
    return uniqid();
  }

  public function __destruct(){
    echo 'удаляем обьект';
  }

}
$user = new User();
echo $user->id.'<br />';
echo $user->getName().'<br />';

?>
