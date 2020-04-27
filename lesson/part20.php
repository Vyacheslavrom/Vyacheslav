<?php
class User{

  public $name ='User';
  public $mail;

  public function __construct($name = false, $email = false){
    if ($name) $this->name = $name;
    if ($email) $this->mail = $email;
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
    $this->mail = $email;}

  public function __destruct(){
    echo 'удаляем обьект';
  }

}
$user = new User('Igor', 'abc@mail.ru');
//$user = 5;
  echo $user->name.'<br />';
  echo $user->mail.'<br />';
  echo $user->getName().'<br />';
  echo $user->getEmail().'<br />';
  $user->setName('krutonio').'<br />';
  $user->setEmail('supermail.mail.ru').'<br />';
  echo $user->getName().'<br />';
  echo $user->getEmail().'<br />'
?>
