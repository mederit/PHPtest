<?php
    if($_COOKIE['user'] == 'yes')
        setcookie('user', 'yes', time() - 3600, '/');
    else
        setcookie('user', 'yes', time() + 3600, '/');
    
    header('Location: /');    
?>
