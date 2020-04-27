<?php
    $ip_address = gethostbyname('exist.ru');
    echo $ip_address.'<br/>';
    $hostname  = gethostbyaddr($ip_address);
    echo $hostname;
 ?>
