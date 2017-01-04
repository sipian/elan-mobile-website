<?php
    session_start();
    session_unset(); 
    session_destroy(); 
    header('Location: https://id.nvision.org.in/signout?url=http://mobile.elan.org.in');
 ?>