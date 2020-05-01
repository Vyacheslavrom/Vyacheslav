<?php
    class User{

         public $email;
         public $password;
         public $lt;

         public function __construct($email, $password){
           $this->email = $email;
           $this->password = $password;
           $this->it = time();
         }
         public function __sleep(){
           return ['email', 'lt'];
         }
         public function __wakeup(){
           $this->it =time();
         }

    }

     $user = new User('abc@mail.ru', '1234');
     print_r($user);
     //$str = serialize($user);
     //echo $str.'<br/>';

     //$fp = fopen($user->email, 'w');
     //fwrite($fp, $str);
     //fclose($fp);
     $str = file_get_contents($user->email);
     sleep(4);

     $u = unserialize($str);
     echo '<br/>';
     print_r($u);

?>
