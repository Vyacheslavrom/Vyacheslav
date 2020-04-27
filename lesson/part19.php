<?php

    class User {
      public $name = 'User';
      public $email;

    }

    $user = new User();
    echo $user->name.'<br />';
    echo $user->email.'<br />';

    $user->email = 'abc@mail.ru';
    echo $user->email.'<br />';

    $user_1 = new User();
    $user_1->name = 'Oleg';
    $user_1->email = 'toto@mail.ru';
    echo $user_1->name.'<br />';
    echo $user_1->email.'<br />';


?>
