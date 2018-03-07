<?php
  session_start();
  if(isset($_POST['login'])){

    if($_SESSION['capt'] == $_POST['cap']){
      echo "name : ".$_POST['name']."<br>";
      echo "email : ".$_POST['email']."<br>";
      echo $_SESSION['capt']." valid";
    }else{
      echo $_SESSION['capt']." invalid";
    }
  }
?>
