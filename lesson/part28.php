<?php
    use ru5\www\User as User5;
    require_once 'a.php';
    require_once 'b.php';

    $user = new ru\www\User();
    $user->name = 'Micaile';
    echo $user->name.'<br/>';

   $user5= new User5();
   $user5->email = 'andnfn@mail.ru';
   echo $user5->email.'<br/>';

 ?>
