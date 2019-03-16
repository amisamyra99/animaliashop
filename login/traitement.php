<?php 
   if(isset($_GET['login']) && isset($_GET['pwd'])){
       if(empty($_GET['login']) || empty($_GET['pwd'])){
            header('location:index.html?error');
       }else{
             header('location:index.html');


    else echo'<strong>error</strong>';
?>