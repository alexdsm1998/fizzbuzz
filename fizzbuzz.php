<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    for ($i=1; $i < 101; $i++) {
      if ( $i%3==0) {
        echo " fizz";
      }if ($i%5==0) {
        echo " buzz";
      }if ($i%3==0 && $i%5==0) {
        echo" FIZZBUZZ!";
      }else {
        echo " $i";
      }
    }
     ?>
  </body>
</html>
