<?php
session_unset();
            SetCookie("user_name", "", time() - 360000, '/');
            header( 'Refresh: 0;');
            include("login.phtml");
?>            
