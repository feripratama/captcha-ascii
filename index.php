<?php

  session_start();
  include"ascii_captcha.php";
  $color = ['red', 'green', 'blue', '#333'];
  $bg = ['black', '#111', '#222'];
  $_SESSION['color'] = $color[rand(0,3)];
  $_SESSION['bg'] = $bg[rand(0,2)];

?>
<style media="screen">
pre{
  font-size: 5px;
  float:left;
  padding-right:10px;
  text-shadow:
    -1px -1px 0 white,
    1px -1px 0 white,
    -1px 1px 0 white,
    1px 1px 0 white;
  margin: 0;
  color:<?php echo $_SESSION['color']; ?>;
  -moz-user-select: none;
  -webkit-user-select: none;
}
.cap{
  width: 125px;
  height: 35px;
  padding: 5px;
  background: <?php echo $_SESSION['bg']; ?>;
}
</style>

<form class="" action="check.php" method="post">
  <label for="name">Name :</label>
  <br>
  <input type="text" name="name" placeholder="name">
  <br>
  <label for="email">Email :</label>
  <br>
  <input type="text" name="email" placeholder="email address">
  <br>
  <label for="cap">Code :</label>
  <br>
  <input type="text" name="cap" placeholder="code">
  <br>
  <br>
  <div class="cap">
    <?php
      $r1 = rand(0, 9);
      $r2 = rand(0, 9);
      $r3 = rand(0, 9);
      $r4 = rand(0, 9);
      $cmp = $r1.$r2.$r3.$r4;
      $_SESSION['capt'] = $cmp;
      $final = ascii_captcha($r1, $r2, $r3, $r4);
      echo $final;
    ?>
  </div>
  <br>
  <input type="submit" name="login" value="Login">
</form>
