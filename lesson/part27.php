<?php
trait Id {

      protected $id;

      public function getId(){
          return $this->id;
      }

      public function setId($id = 0){
          $this->id = $id;
      }
}
trait Name {

         protected $name;

    public function getName(){
        return $this->name;
    }

    public function setName($name = ''){
         $this->name = $name;
    }
}

class User {

    use Id, Name;

}

$user = new User();
$user->setId(10);
$user->setName('ktoto tottov');
echo $user->getId().'<br/>';
echo $user->getName().'<br/>';

?>
